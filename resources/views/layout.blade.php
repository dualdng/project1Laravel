<!DOCTYPE html>
<head>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<title>@yield('title')</title>
		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
		<!-- 新 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<!-- 可选的Bootstrap主题文件（一般不用引入） -->
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="/css/main.css">
		<script src="/js/jquery.masonry.min.js"></script>
<!-- 百度编辑器引用 --!>
		<link href="/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" charset="utf-8" src="/umeditor/umeditor.config.js"></script>
		<script type="text/javascript" charset="utf-8" src="/umeditor/umeditor.min.js"></script>
		<script type="text/javascript" src="/umeditor/lang/zh-cn/zh-cn.js"></script>

		<script src="/js/main.js"></script>

</head>
<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src='/image/hezubeilogo.png' /></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
										<li class="divider"></li>
										<li><a href="#">One more separated link</a></li>
								</ul>
								</li>
						</ul>
						<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
										<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
						</form>
						@yield('nav')
				</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
		<div id='progress'>
		</div>
		</nav>
		<header>
				@yield('header')
		</header>
		<div class='container'>
				@yield('content')
		</div>
		<div class='container'>
				@yield('comment')
		</div>
</body>
<footer class='container-fluid'>

		<div class='container'>
				<div class='row'>
						<div class='col-md-3'>
								<h4>关于网站</h4>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
						</div>
						<div class='col-md-3'>
								<h4>常用链接</h4>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
						</div>
						<div class='col-md-3'>
								<h4>关注我们</h4>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
						</div>
						<div class='col-md-3'>
								<h4>内容许可</h4>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
								<p><a href='#'>测试链接</a></p>
						</div>
				</div>
		</div>

</footer>

