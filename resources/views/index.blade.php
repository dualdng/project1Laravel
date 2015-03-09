@extends('layout')

@section('title')
首页
@endsection
@section('header')
<div class='container-fluid content'>
		<div class='header-bar'>
				<h1>发布合租信息!</h1>
				<h4>这是一条测试信息这是一条测试信息这是一条测试信息这是一条测试信息这是一条测试信息这是一条测试信息这是一条测试信息这是一条测试信息</h4>
				<a class='btn btn-info btn-lg' href='/user/<?php echo $id;?>/A'>发布</a>
		</div>
</div>
@endsection
@section('nav')
<?php if ($id>0) {?>
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
<?php } else {?>
						<ul class="nav navbar-nav navbar-right">
								<li><a  href="/auth/login">登录</a></li>
								<li><a  href="/auth/register">注册</a></li>
						</ul>
<?php }?>
@endsection

@section('content')
<script>
		$(function(){
				var $container = $('#masonry');
				$container.imagesLoaded( function(){
						$container.masonry({
								itemSelector : '.box',
								gutterWidth : 20,
								isAnimated: true,
						});
				});
		});
</script>
<div class='row'>
		<div class='col-md-10'>
				<ul class="nav nav-tabs tabs" id='nav-tabs'>
<?php if($type==1) {?>
						<li role='presentation' ><a href='/'>首页</a></li>
						<li role='presentation' class='active'><a href='/home/A'>求合租</a></li>
						<li role="presentation"><a href='/home/B'>寻合租</a></li>
						<li role="presentation"><a href='/home/C'>寻整租</a></li>
<?php }else if($type==2) {?>
						<li role='presentation' ><a href='/'>首页</a></li>
						<li role='presentation' ><a href='/home/A'>求合租</a></li>
						<li role="presentation" class='active'><a href='/home/B'>寻合租</a></li>
						<li role="presentation"><a href='/home/C'>寻整租</a></li>
<?php } else if($type==3){?>
						<li role='presentation' ><a href='/'>首页</a></li>
						<li role='presentation' ><a href='/home/A'>求合租</a></li>
						<li role="presentation"><a href='/home/B'>寻合租</a></li>
						<li role="presentation" class='active'><a href='/home/C'>寻整租</a></li>
<?php } else {?>
						<li role='presentation' class='active' ><a href='/'>首页</a></li>
						<li role='presentation' ><a href='/home/A'>求合租</a></li>
						<li role="presentation"><a href='/home/B'>寻合租</a></li>
						<li role="presentation"><a href='/home/C'>寻整租</a></li>
<?php }?>
				</ul>
				<div id="masonry" class='masonry'><!-- 瀑布流开始 -->
<?php 
foreach ($post as $values) {
		$location=explode(',',$values['location']);
		echo '<div class=\'box\'>';
		echo '<a href=\'/post/'.$values['id'].'\'>';
		echo $values['content'];
		echo '<div class=\'masonry-tab\'>';
		echo '<span class=\'label label-warning\'>'.$values['price'].'</span>';
		if ($values['post_type']==1) {
				echo '<span class=\'label label-success\'>'.$values['age'].'</span>&nbsp';
				echo '<span class=\'label label-success\'>'.$values['sex'].'</span>&nbsp';
				echo '<span class=\'label label-success\'>'.$values['job'].'</span>&nbsp';
		} else if ($values['post_type']==2) {
				echo '<span class=\'label label-success\'>'.$values['direction'].'</span>&nbsp';
				echo '<span class=\'label label-success\'>'.$values['square'].'平米</span>&nbsp';
				switch($values['dress']) {
				case '0':
				echo '<span class=\'label label-success\'>豪装</span>&nbsp';
				break;
				case '1':
				echo '<span class=\'label label-success\'>精装</span>&nbsp';
				break;
				case '2':
				echo '<span class=\'label label-success\'>中等装修</span>&nbsp';
				break;
				case '3':
				echo '<span class=\'label label-success\'>一般装修</span>&nbsp';
				break;
				case '4':
				echo '<span class=\'label label-success\'>毛坯</span>&nbsp';
				break;
				}
		} else {
				echo '<span class=\'label label-success\'>'.$values['square'].'平米</span>&nbsp';
				switch($values['dress']) {
				case '0':
				echo '<span class=\'label label-success\'>豪装</span>&nbsp';
				break;
				case '1':
				echo '<span class=\'label label-success\'>精装</span>&nbsp';
				break;
				case '2':
				echo '<span class=\'label label-success\'>中等装修</span>&nbsp';
				break;
				case '3':
				echo '<span class=\'label label-success\'>一般装修</span>&nbsp';
				break;
				case '4':
				echo '<span class=\'label label-success\'>毛坯</span>&nbsp';
				break;
				}
				switch($values['type']) {
				case '0':
				echo '<span class=\'label label-success\'>两室</span>&nbsp';
				break;
				case '1':
				echo '<span class=\'label label-success\'>三室</span>&nbsp';
				break;
				case '2':
				echo '<span class=\'label label-success\'>四室及以上</span>&nbsp';
				break;
				case '3':
				echo '<span class=\'label label-success\'>单间</span>&nbsp';
				break;
				}

		}
		echo '<span class=\'label label-success\'>'.$location['3'].'</span><br />';
		echo '<span>'.$values['title'].'</span>';
		echo '</div></div>';
		echo '</a>';
}
?>
				</div><!-- 瀑布流结束 -->
<div id='load-more'>
<?php if ($type==1) {?>
				<a class='btn btn-success load-more' href='/home/A?page=<?php echo $page+1;?>'>加载更多</a>
<?php } else if ($type==2) {?>
				<a class='btn btn-success load-more' href='/home/B?page=<?php echo $page+1;?>'>加载更多</a>
<?php } else if ($type==3) {?>
				<a class='btn btn-success load-more' href='/home/C?page=<?php echo $page+1;?>'>加载更多</a>
<?php } else {?>
				<a class='btn btn-success load-more' href='/?page=<?php echo $page+1;?>'>加载更多</a>
<?php }?>
</div>
		</div>

		<div class='col-md-2'>
		</div>
</div>
@endsection

