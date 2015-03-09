@extends('layout')
@section('nav')
<?php if ($id>0) {?>
						<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Link</a></li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">帐号 <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
								<li><a href="/project1/public/user/<?php echo $id;?>">用户首页</a></li>
										<li><a href="/project1/public/auth/logout">登出</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="auth/logout">登出</a></li>
								</ul>
								</li>
						</ul>
<?php } else {?>
						<ul class="nav navbar-nav navbar-right">
								<li><a  href="auth/login">登录</a></li>
								<li><a  href="auth/register">注册</a></li>
						</ul>
<?php }?>
@endsection
@section('content')
						<div class='panel panel-success container'>
								<div class='panel-heading'>
										<div class='panel-title'>成功</div>
								</div>
								<div class='panel-body'>
										<h2>发布成功！</h2>
										<p>5秒后自动跳转,如无法跳转请点击<a href='#' class='btn btn-success btn-sm'>点击跳转</a></p>
										<?php header(Refresh:5;url='/project1/public/');?>
								</div>

@endsection
