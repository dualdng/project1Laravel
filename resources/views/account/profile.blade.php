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
<article class='row'>
		<div class='col-md-6'>
				<div class='avatar'>
				<img class='img-responsive img-circle avatar' alt='avatar' src='<?php echo $avatar;?>' />
				</div>
		</div>
		<div class='col-md-6'>
				<div class='profile'>
						<button class="btn btn-success" type="button">我关注的 <span class="badge">4</span></button><br />
						<button class="btn btn-success" type="button">我回复的 <span class="badge">4</span></button><br />
						<button class="btn btn-success" type="button">回复我的 <span class="badge">4</span></button><br />
						<p><a  class='btn btn-info btn-lg' href='/user/<?php echo $id;?>/avatar' >修改头像</a><br /> 
<!-- Button trigger modal -->
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">发表信息</button></p>
				</div>
		</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">选择分类</h4>
      </div>
      <div class="modal-body trigger">
			  <p><a  class='btn btn-success btn-lg btn-block' href='/user/<?php echo $id;?>/A' >发布求租信息</a></p>
			  <blockquote>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			  </blockquote>
			  <p><a  class='btn btn-success btn-lg btn-block' href='/user/<?php echo $id;?>/B' >发布寻租信息</a></p>
			  <blockquote>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			  </blockquote>
			  <p><a  class='btn btn-success btn-lg btn-block' href='/user/<?php echo $id;?>/C' >发布房屋出租信息</a></p>
			  <blockquote>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			  </blockquote>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>
</article>
@endsection
