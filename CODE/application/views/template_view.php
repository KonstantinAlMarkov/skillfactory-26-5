<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Моё портфолио</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
		<script type="text/javascript">
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/services">Услуги</a></li>
						<li><a href="/portfolio">Портфолио</a></li>
						<li class="last"><a href="/contacts">Контакты</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Мои контакты</h3>
					<ul class="list">
						<li class="first">telegram: @DFSFDSF</li>
						<li class="last">email: kkk@gmail.com</li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>Общая информация</h3>
					<p>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat autem, pariatur placeat reprehenderit saepe necessitatibus blanditiis quia, nostrum quas temporibus esse, perferendis quis veritatis quasi. Laboriosam odit libero natus dignissimos?
					</p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/">Константин Марков</a> &copy; 2020</a>
		</div>
	</body>
</html>