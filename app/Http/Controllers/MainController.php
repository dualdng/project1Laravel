<?php namespace App\Http\Controllers;

use Auth;
use App\Post;
use Illuminate\Http\Request;
class MainController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
/**	public function __construct()
	{
		$this->middleware('auth');
	}
	**/
/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request) //首页
	{
			$page=$request->input('page');
			$page=isset($page)?$page:0;
			$pageNum=5;
			$post=Post::all()->sortByDesc('id')->slice($page*$pageNum,$pageNum)->toArray(); //关联user表同时查询20条数据 $data=array();
			$data['type']=0;
			$num=count($post);
			for ($i=0;$i<$num;$i++) {
					$content=$this->getFirstImage(stripslashes($post[$i]['content']));
					if ($content!='null') { //将content换成第一样图片的地址
							$post[$i]['content']=$content.'</>'; 
					} else {
							$post[$i]['content']='<div class=\'masonry-blank\'></div>';
					}
			}
			$data['post']=$post;
			$data['page']=$page;
			if(Auth::check()) { //用户是否已经登录
					$user=Auth::user(); //用户已登录获取该用户数据
					$id=$user->id;
					$data['id']=$id;
					return view('index',$data);
			} else {
					$data['id']='0';
					return view('index',$data);
			}
	}
	public function indexType(Request $request,$type) //按照post_type来取数据
	{
			$page=$request->input('page');
			$page=isset($page)?$page:0;
			$pageNum=5;
			$data=array();
			switch($type) {
			case 'A':
			$post=Post::where('post_type',1)->get()->slice($pageNum*$page,$pageNum)->toArray(); //取出分页大小的数据
			$num=count($post);
			for ($i=0;$i<$num;$i++) {
					$content=$this->getFirstImage(stripslashes($post[$i]['content']));
					if ($content!='null') { //将content换成第一样图片的地址
							$post[$i]['content']=$content.'</>'; 
					} else {
							$post[$i]['content']='<div class=\'masonry-blank\'></div>';
					}
			}
			$data['type']=1;
					break;
			case 'B':
			$post=Post::where('post_type',2)->get()->slice($pageNum*$page,$pageNum)->toArray(); //关联user表同时查询20条数据
			$num=count($post);
			for ($i=0;$i<$num;$i++) {
					$content=$this->getFirstImage(stripslashes($post[$i]['content']));
					if ($content!='null') { //将content换成第一样图片的地址
							$post[$i]['content']=$content.'</>'; 
					} else {
							$post[$i]['content']='<div class=\'masonry-blank\'></div>';
					}
			}
			$data['type']=2;

					break;
			default:
			$post=Post::where('post_type',3)->get()->slice($pageNum*$page,$pageNum)->toArray(); //关联user表同时查询20条数据
			$num=count($post);
			for ($i=0;$i<$num;$i++) {
					$content=$this->getFirstImage(stripslashes($post[$i]['content']));
					if ($content!='null') { //将content换成第一样图片的地址
							$post[$i]['content']=$content.'</>'; 
					} else {
							$post[$i]['content']='<div class=\'masonry-blank\'></div>';
					}
			}
			$data['type']=3;
					break;
			}
			$data['page']=$page;
			$data['post']=$post;
			if(Auth::check()) { //用户是否已经登录
					$user=Auth::user(); //用户已登录获取该用户数据
					$id=$user->id;
					$data['id']=$id;
			} else {
					$data['id']='0';
			}
					return view('index',$data);
	}
	public function getPage($id)
	{
			$data=array();
			$post=Post::with('user')->find($id);
			$post->content=stripslashes($post->content);
			$data['post']=$post;
			if(Auth::check()) { //用户是否已经登录
					$user=Auth::user(); //用户已登录获取该用户数据
					$id=$user->id;
					$data['id']=$id;
			} else {
					$data['id']='0';
			}
					return view('page',$data);

	}
	public function login() //登录页面
	{
			return view('auth.login');
	}
	public function listArticle(Request $request) 
	{
			$pageNum=isset($request->pageNum)?$request->pageNum:20;
			$post=Post::with('user')->take($pageNum)->get()->toArray(); //关联user表同时查询20条数据
			$data=array();
			$num=count($post);
			for ($i=0;$i<$num;$i++) {
					$content=$this->getFirstImage(stripslashes($post[$i]['content']));
					if ($content!='null') { //将content换成第一样图片的地址
							$post[$i]['content']=$content.'</>'; 
					} else {
							$post[$i]['content']='<div class=\'masonry-blank\'></div>';
					}
			}
	}
	public function getFirstImage($content)
	{
			$pattern='/<img src[=\"a-z0-9:\.\/]*/';
			$result=preg_match($pattern,$content,$match);
			if($result==1) {
					return $match[0];
			}else {
					return 'null';
			}
	}
}
