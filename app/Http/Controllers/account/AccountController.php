<?php namespace App\Http\Controllers\account;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Hashing\BcryptHasher; //为了使Bcrypt的check功能可用，官网上的方式无法使用

class AccountController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function profile($id) //用户首页
	{
			$user=User::find($id);
			$avatar=$user->avatar;
			$data=array();
			$data['avatar']=$avatar;
			$data['id']=$id;
			return view('account/profile',$data);
	}
	public function avatar($id) //用户修改头像及密码页面
	{
			$user=User::find($id);
			$avatar=$user->avatar;
			$data=array();
			$data['avatar']=$avatar;
			$data['id']=$id;
			return view('account/avatar',$data);
	}

	public function uploadAvatar(Request $request,$id) //上传头像
	{
			$user=User::find($id);
			$path='../public/avatar/'; //头像储存目录
			$file=$request->file('file');
			$type=$file->getMimeType();
			$type=explode('/',$type);
			$name=$id.'.'.$type[1]; //头像名称
			$result=array();
			if ($file->getError() > 0)
			{
					 $result['error']='Error: ' . $file->getError() ;
			}
			else
			{
					$file->move($path,$name); //将头像移动
					$result['store']='Stored in: ' . $path . 'Named : '.$name;
					$avatar='/avatar/'.$name;
					$user->avatar=$avatar;
					$user->save();
			}
			$data=array();
			$data['avatar']=$avatar;
			$data['id']=$id;
			return view('account/profile',$data);
	}
	public function changePassword(Request $request,$id) //修改密码
	{
			$response=array();
			$oldPassword=$request->input('oldPassword');
			$newPassword=$request->input('newPassword');
			$newPwd=bcrypt($newPassword); //对新密码加密 hash
			$user=User::find($id);
			$hashedPwd=$user->password;
			$hash=new BcryptHasher; //实例化BcryptHasher 类
			if($hash->check($oldPassword,$hashedPwd)) //验证旧密码是否与数据库一致
			{
					$response['msg']='0';
					$user->password=$newPwd;
					$user->save();
			}else {
					$response['msg']='1';
			}
			return $response;
	}
}
