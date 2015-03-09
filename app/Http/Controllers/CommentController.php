<?php namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Comment;
use App\User;
use Illuminate\Http\Request;
class CommentController extends Controller {
		public function getComment(Request $request,$id)
		{
				$result=$request->input('page');
				$page=isset($result)?$result:0;
				$pageNum=1;
				$comment=Comment::with('hasOneUser')->where('postId',$id)->where('parentId',0)->get()->sortByDesc('id')->toArray();
				$num=count($comment);
				$comment=array_slice($comment,$pageNum*$page,$pageNum);
				echo '<div id=\'commentBody\'>';
				echo '<div class=\'media-list\'>';
				foreach ($comment as $values) {
						echo '<div class=\'media\'>';
						echo '<div class=\'media-left\'><img class=\'media-object\' src=\''.$values['has_one_user']['avatar'].'\'/></div>';
						echo '<div class=\'media-body\'><h4 class=\'media-heading\'>'.$values['has_one_user']['name'].'</h4>';
						echo '<span class=\'media-heading\'>'.date('Y.m.d h:i',strtotime($values['created_at'])).'</span><a id=\'reply-'.$values['id'].'\' style=\'float:right\' href=\'javascript:getCommentArea('.$values['has_one_user']['id'].','.$id.','.$values['id'].')\'>回复</a><a id=\'cancelReply-'.$values['id'].'\' style=\'display:none;float:right\' href=\'javascript:cancelReply('.$values['id'].')\'>取消回复</a>';
						echo '<p>'.$values['comment'].'</p>';
						echo '<div id=\'commentArea-'.$values['id'].'\'></div>';
						$this->getChildrenComment($values['id']);
						echo '</div>';
						echo '</div>';
				}
				echo '</div>';
				$getPageNav=new PaginationController;
				$getPageNav->getPageNav($num,$pageNum,$page,'/comment/'.$id);
				echo '</div>';
		}
		public function getChildrenComment($id)
		{
				$comment=Comment::with('hasOneUser')->where('parentId',$id)->orderBy('id')->get()->sortByDesc('id')->toArray();
				if (!empty($comment)) {
				foreach($comment as $values){
						echo '<div class=\'media\'>';
						echo '<div class=\'media-left\'><img class=\'media-object\'  src=\''.$values['has_one_user']['avatar'].'\'/></div>';
						echo '<div class=\'media-body\'><h4 class=\'media-heading\'>'.$values['has_one_user']['name'].'</h4>';
						echo '<span class=\'media-heading\'>'.date('Y.m.d h:i',strtotime($values['created_at'])).'</span><a id=\'reply-'.$values['id'].'\'style=\'float:right\'  href=\'javascript:getCommentArea('.$values['has_one_user']['id'].','.$id.','.$values['id'].')\'>回复</a><a id=\'cancelReply-'.$values['id'].'\' style=\'display:none;float:right;\'  href=\'javascript:cancelReply('.$values['id'].')\'>取消回复</a>';
						echo '<p>'.$values['comment'].'</p>';
						echo '<div id=\'commentArea-'.$values['id'].'\'></div>';
						$temp=self::getChildrenComment($values['id']);
						echo '</div>';
						echo '</div>';
				};
				}
		}
		public function getCommentArea(Request $request)  //回复框
		{
				$id=$request->input('id');
				if ($id!=0) {
						$user=User::find($id);
						$parentId=$request->input('parentId');
						$postId=$request->input('postId');
						echo '<form onsubmit=\'return postComment()\'>';
						echo '<div class=\'media-list\'>';
						echo '<div class=\'media\'>';
						echo '<div class=\'media-left media-middle\'><img class=\'media-object\' src=\''.$user->avatar.'\'/></div>';
						echo '<div class=\'media-body\'><h4 class=\'media-heading\'>'.$user->name.'</h4>';
						echo '<input class=\'form-control\' name=\'postId\' id=\'postId\' type=\'hidden\'value=\''.$postId.'\'></input>';
						echo '<input class=\'form-control\' name=\'userId\' id=\'userId\' type=\'hidden\'value=\''.$id.'\'></input>';
						echo '<input class=\'form-control\' name=\'parentId\' id=\'parentId\' type=\'hidden\'value=\''.$parentId.'\'></input>';
						echo '<textarea class=\'form-control\' rows=\'3\' name=\'commentText\' id=\'commentText\'></textarea>';
						echo '<input class=\'btn btn-success\' type=\'submit\' value=\'提交\'></input>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</form>';
				}
		}

		public function postComment(Request $request)
		{
				$userId=$request->input('userId');
				$user=User::find($userId);
				$postId=$request->input('postId');
				$parentId=$request->input('parentId');
				$comment=$request->input('comment');
				$result=Comment::create(array('userId'=>$userId,'postId'=>$postId,'parentId'=>$parentId,'comment'=>$comment));
				if($result) {
						echo '<div class=\'media\'>';
						echo '<div class=\'media-left\'><img class=\'media-object\' src=\''.$user->avatar.'\'/></div>'; echo '<div class=\'media-body\'><h4 class=\'media-heading\'>'.$user->name.'</h4>';
						echo '<p>'.$comment.'</p>';
						echo '</div>';
						echo '</div>';
				}
		}
		public function showComment($comment)
		{
				foreach($comment as $values) {
				}
		}

}

