<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
		protected $table='zl_comment';
		protected $fillable=array('postId','parentId','userId','comment');
		public function hasOneUser()
		{
				return $this->hasOne('App\User','id','userId');
		}
}
