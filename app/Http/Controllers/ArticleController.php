<?php namespace App\Http\Controllers;
use App\Post;
use App\Location;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
		public function index($id,$type) //发布文章页面首页
		{
				$data=array();
				$province=array();
				$city=array();
				$town=array();
				$location=Location::all();
				foreach ($location as $locations){
						$province[]=$locations->province;
						$city[]=$locations->city;
						$town[]=$locations->town;
				}
				$data['id']=$id;
				$data['type']=$type;
				$data['province']=$province;
				$data['city']=$city;
				$data['town']=$town;
				return view('article/index',$data);
		}
		public function listLocation (Request $request) //地区选择功能
		{
				$province=$request->province;
				$province=isset($province)?$province:false;
				$city=$request->city;
				$city=isset($city)?$city:false;
				$data=array();
				if($province) { //判断省，根据省选择市
						$city=array();
						$location=Location::where('province','=',$province)->get();
						foreach ($location as $values) {
								$data[]=$values->city;
						}
				}
				if($city) { //判断市，根据市选择区县
						$location=Location::where('city','=',$city)->get();
						foreach ($location as $values) {
								$data[]=$values->town;
						}
				}
				return array_unique($data);
		}
		public function post(Request $request,$id,$type) //文章发布
		{
				$title=$request->title;
				$location=$request->location;
				$price=$request->price;
				$communication=$request->communication;
				$content=$request->content;
				$facility=$request->facility;
				if(!get_magic_quotes_gpc()) {
						$content=addslashes($content);
				}
				switch($type){
				case 'A': //文章类型分类 A 对应 1
						$age=$request->age;
						$job=$request->job;
						$sex=$request->sex;
						$result=Post::create(array('title'=>$title,'location'=>$location,'price'=>$price,'age'=>$age,'job'=>$job,'sex'=>$sex,'content'=>$content,'facility'=>$facility,'post_type'=>1,'communication'=>$communication,'is_complete'=>0,'author'=>$id));
						break;
				case 'B': //B 对应 2
						$square=$request->square;
						$homeType=$request->homeType;
						$dress=$request->dress;
						$direction=$request->direction;
						$result=Post::create(array('title'=>$title,'location'=>$location,'price'=>$price,'content'=>$content,'square'=>$square,'type'=>$homeType,'dress'=>$dress,'direction'=>$direction,'facility'=>$facility,'post_type'=>2,'communication'=>$communication,'is_complete'=>0,'author'=>$id));
						break;
				default : //default 对应3
						$square=$request->square;
						$homeType=$request->homeType;
						$dress=$request->dress;
						$result=Post::create(array('title'=>$title,'location'=>$location,'price'=>$price,'content'=>$content,'square'=>$square,'type'=>$homeType,'dress'=>$dress,'facility'=>$facility,'post_type'=>3,'communication'=>$communication,'is_complete'=>0,'author'=>$id));
						break;
				}
				return $result;
		}
}
	
