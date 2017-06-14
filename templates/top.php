<?php session_start();
	require_once('config/config.php');
	?>

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
		<?php
			if(isset($title)){
			echo $title;
			}
			else {
			echo "О котах";
			}?>
		</title>
		<meta name="description" content="<?=(isset($desc))?$desc:"Нужна ли кошка в квартире?";?>">
		<meta name="keywords" content="<?=(isset($keywords))?$keywords:"Нужна ли кошка в квартире?";?>">
		<link type="text/css" rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="media/css/style.css"/>
		<script src="/media/js/jquery-3.2.1.min.js"></script>
		<script src="/media/js/main.js"></script>
		<?php
			if($_SESSION['user_id']){
			?>
		<script src="/media/js/home.js"</script>
			<?php
			}
		?>
		<script src="/media/ckeditor/ckeditor.js"></script>
		
	</head>
	
	<body >
		<div class="header">
			<h1 class="logotext">Маленькие кошачьи радости</h1>
			<img src="media/img/logoo.gif" class="logo"/>
	
		</div>
		<br style="clear:both" />
		<nav class="menu">
			<a href="/" data-title="Главная">главная</a>
			<a href="#" data-title="Новости">новости</a>
			<a href="index.php?url=about" data-title="Описание">описание</a>
			<a href="#" data-title="Форум">форум</a>
			<a href="index.php?url=contacts" class="contacts" data-title="Контакты">контакты</a>
	<?php		
    if(isset($_SESSION['user_id'])){
	?>
	<a href="home.php" >Моя страница</a>
	<a href="logout.php" >Выход</a>
	<?php
	}else{
	?>
	<a href="register.php" >Регистрация</a>
	<a href="login.php" >Вход</a>
	<?php
	}
	?>

		</nav>
		<div class="boot">
			<div class="col-md-2">
				<a href="#" class="btn btn-success btn-block">Каталог пород кошек</a>
				<a href="#" class="btn btn-success btn-block">Содержание и уход за кошками</a>
				<a href="#" class="btn btn-success btn-block">Интерессное о кошках</a>
				<a href="#" class="btn btn-success btn-block">Фотографии</a>
				<a href="#" class="btn btn-success btn-block">Видиоприколы с котами</a>
				<a href="#" class="btn btn-success btn-block">Доска объявлений</a>
				
	
			</div>
			<div class="col-md-8">
			