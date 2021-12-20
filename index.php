<!DOCTYPE html>
<html>
	<head>
		<title>Наш сайт</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<div id="header">
			<!-- Верхняя часть страницы -->
			<!--<span class="slogan">Знания - сила</span>-->
			<? include 'inc/top.inc.php'; ?>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">	
		<?php 
			include 'inc/data.inc.php';
			include 'inc/lib.inc.php'; 
			include 'inc/cookie.inc.php';
		?>		
		<?php
				switch($id) {
					case 'about': include 'about.php'; break;
					case 'contact': include 'contact.php'; break;
					case 'table': include 'table.php'; break;
					default: include 'inc/index.inc.php'; break;
				}
			?>
		</div>
		<div id="nav">
			<!-- Навигация -->
			<? include 'inc/menu.inc.php'; ?>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<? include 'inc/bottom.inc.php' ?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>