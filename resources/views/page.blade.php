@extends('layout')
@section('nav')
<?php if ($id>0) {?>
						<ul class='nav navbar-nav navbar-right'>
								<li><a href='#'>Link</a></li>
								<li class='dropdown'>
								<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>帐号 <span class='caret'></span></a>
								<ul class='dropdown-menu' role='menu'>
								<li><a href='/user/<?php echo $id;?>'>用户首页</a></li>
										<li><a href='/auth/logout'>登出</a></li>
										<li><a href='#'>Something else here</a></li>
										<li class='divider'></li>
										<li><a href='/auth/logout'>登出</a></li>
								</ul>
								</li>
						</ul>
<?php } else {?>
						<ul class='nav navbar-nav navbar-right'>
								<li><a  href='/auth/login'>登录</a></li>
								<li><a  href='/auth/register'>注册</a></li>
						</ul>
<?php }?>
@endsection
@section('content')
<article class='row'>
		<div class='col-md-9 pageContent'>
				<div class='media'>
						<div class='media-left media-middle'>
								<a href='#'>
										<img class='media-object' src='<?php echo $post->user->avatar;?>'/>
								</a>
						</div>
						<div class='media-body'>
								<h4 class='media-heading'><?php echo $post->title;?></h4>
								<span><?php echo date('Y-m-d h:i',strtotime($post->created_at));?></span><br />
								<span><?php echo $post->location;?></span>
						</div>
				</div>
				<p><?php echo $post->content;?></p>

		</div>
		<div class='col-md-3'>
		</div>
</article>
<div class='contaianer'>
		<div class='col-md-9'>
				<div id='commentArea'>
				</div>
				<div id='comment'>
				</div>
		</div>

</div>
						<script>
							$(function (){
									getComment(<?php echo $post->id;?>);
									getCommentArea(<?php echo $id;?>,<?php echo $post->id;?>,0);
								})
						</script>

@endsection

