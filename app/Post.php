<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
		protected $table='zl_post';
		protected $fillable=array('title','content','location','price','author','communication','post_type','age','sex','job','type','direction','dress','square','facility','is_complete');
		public function user()
		{
				return $this->hasOne('App\User','id','author');
		}
}
