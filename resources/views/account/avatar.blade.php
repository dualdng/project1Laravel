@extends('layout')
@section('nav')
<?php if ($id>0) {;?>
						<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Link</a></li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">帐号 <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
								<li><a href="/user/<?php echo $id;?>">用户首页</a></li>
										<li><a href="/auth/logout">登出</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="/auth/logout">登出</a></li>
								</ul>
								</li>
						</ul>
<?php } else {;?>
						<ul class="nav navbar-nav navbar-right">
								<li><a  href="/auth/login">登录</a></li>
								<li><a  href="/auth/register">注册</a></li>
						</ul>
<?php };?>
@endsection
@section('content')
<article class='container'>
<div class='row'>
		<h3>更改头像</h3>
		<table class='table table-default'>
								<form method='post' enctype='multipart/form-data'>
				<tr>
						<td><h4>当前头像</h4></td>
						<td><img class='img-responsive avatar' src='<?php echo $avatar;?>' /></td>
				</tr>
				<tr>
						<td><h4>当前头像</h4></td>
						<td>
										<div class='form-group'>
												<input style='border:none' class='form-control ' type='file' id='file' name='file'/>
												<input type="hidden" name="_token" id='token' value="<?php echo csrf_token(); ?>"/>
										</div>
								</td>
				</tr>
				<tr>
						<td></td>
						<td><button type="submit" class="btn btn-success">点击上传</button></td>
				</tr>
								</form>
		</table>
		<h3>修改密码</h3>
		<form method='post' onSubmit='return changePassword()' id='changePwd'>
				<div class='form-group'>
		<table class='table table-default'>
				<tr>
						<td><h4 for='oldPassword'>旧密码</h4></td>
						<td><input class='form-control avatarInput' type='password' id='oldPassword' placeholder='请输入旧密码' />
</td>
				</tr>
				<tr>

						<td><h4 for='newPassword'>新密码</h4>
</td>
						<td><input class='form-control avatarInput' type='password' id='newPassword' placeholder='请输入新密码' />
</td>
				</tr>
				<tr>
						<td><h4 for='confirmPassword'>确认密码</h4>
</td>
						<td><input class='form-control avatarInput' type='password' id='confirmPassword' placeholder='确认新密码' />
								<td><input class='form-control avatarInput' type='hidden' id='id' value='<?php echo $id;?>' />
</td>
				</tr>
				<tr>
						<td></td>
						<td><button type="submit" class="btn btn-success">确认修改</button>
</td>
				</tr>
		</table>
				</div>
		</form>
</div>
</article>
@endsection
