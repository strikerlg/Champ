<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title><?=$title?> | Чемпионат Красивый футбол!</title>
	<?=html::stylesheet(array(
			'templates/template/css/reset',
			'templates/template/css/main',
			'templates/template/css/form',
		));?>
	<?=html::script(array(
			'templates/template/js/jquery',
			'templates/template/js/main',
		));?>
</head>
<body>
	<div id="center">
		<div id="head" onClick="window.location='/'" style="cursor:pointer">
			
		</div>
<!--		<div id="menu">
			<div id="menu_left"></div>
			<div id="menu_center">
				<a href="/" class="menu_button">Главная</a>
				<a href="/match/" class="menu_button">Матчи</a>
				<a href="/team/" class="menu_button">Команды</a>
				<a href="/tournaments/" class="menu_button">Турниры</a>
			</div>
			<div id="menu_right"></div> 
		</div>-->
		
		<div id="middle">
			<div id="container">
				<div id="content">
					<?=$content?>
				</div>
			</div>
			<div id="sidebar" class="sl">
				<?=Widget::factory('menu', FALSE)->render()?>
			</div>
		</div>
		<div id="footer">
		
		</div>
	</div>
	
</body>
</html>