<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@index'); //获取首页;
Route::get('home', 'MainController@index');
Route::post('/', 'MainController@index');// 首页 ajax 获取下一页内容
Route::get('home/{type}', 'MainController@indexType');//获取分类页面 首页;
Route::post('home/{type}', 'MainController@indexType');//;
Route::post('listArticle', 'MainController@listArticle');

Route::get('login', 'MainController@login'); //获取登录页;

Route::get('post/{id}', 'MainController@getPage');//获取文章页 id 为 文章id;

Route::post('comment/{id}', 'CommentController@getComment');//获取评论页: id 为 文章id;

Route::post('commentArea', 'CommentController@getCommentArea');//获取评论框j;
Route::post('postComment', 'CommentController@postComment');//发表评论;

Route::post('listLocation', 'ArticleController@listLocation');
/** test**/
Route::get('test', function(){
		$data=App\Post::with('user')->take(20)->get()->toArray();
		$arr=array();
		$pattern='/<img src=[\"a-z0-9:\.\/]*/';
		foreach ($data as $values) {
				$content=stripslashes($values['content']);
				$result=preg_match($pattern,$content,$match);
				if($result==1) {
						$arr[]=$match[0];
				}else {
						$arr[]='null';
				}

		}

		return $arr;
});

Route::get('test', function(){
});

Route::group(['middleware'=>'auth'],function() // 用户帐号控制
		{
				Route::get('user/{id}',['as'=>'profile','uses'=>'account\AccountController@profile']);
				Route::get('user/{id}/avatar','account\AccountController@avatar');
				Route::post('user/{id}/avatar','account\AccountController@uploadAvatar');
				Route::post('user/{id}/changePassword','account\AccountController@changePassword');
				Route::get('user/{id}/{type}','ArticleController@index');
				Route::post('user/{id}/{type}','ArticleController@post');
		});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
