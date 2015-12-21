<?php session_start();?>
<?php require_once("config/config.php");?>
<?php require_once ("class/Database.php");?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Новости</title>
<meta name="description" content="Поехали">
<meta name="keywords" content=" ">
<meta name="outher" content="mikhalkevich@yo.ru">
<link type ="text/css " href="media/css/style.css" rel="stylesheet"/>
<link type ="text/css " href="media/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<body>


<header  id="header">
<img class="logo"  src="media/img/logo.png"/>
<h1>нОвОсТи</h1>

</header>
<nav class="topmenu">
<!--a href="index.php "> Главная</a-->
<a href="#" class="btn btn-success btn-block"> Спорт</a>
<a href="#" class="btn btn-success btn-block"> Здоровье</a>
<a href="#" class="btn btn-success btn-block"> Два</a>
<a href="#" class="btn btn-success btn-block"> Три</a>
<a href="#" class="btn btn-success btn-block"> Четыре</a>
<!--a href="index.php?url=contact"> Контакты</a-->
</nav>
<?php 
if ($_SESSION['id']){
?>
<div class="vih"><a href="logout.php" class="btn btn-success btn-block">выход</a></div>
<div class="cob"><a href="cobinet.php" class="btn btn-success btn-block">кабинет</a></div>
<div class="new"> <a href="new_news.php" class="btn btn-success btn-block">мои статьи</a></div>
<?php
} else{
?>
<div class="registr"> <a href="reg.php" class="btn btn-success btn-block">регистрация</a></div>
<div class="avtor"> <a href="login.php" class="btn btn-success btn-block">авторизация</a></div>
<?php
};
?>
<!--div class="registr"> <a href="reg.php" class="btn btn-success btn-block">регистрация</a></div>
<div class="avtor"> <a href="login.php" class="btn btn-success btn-block">авторизация</a></div-->

<div class="content">
<div class="col-md-3"><h2> меню</h2> 
<!--a href="index.php?url=risynok" class="btn btn-success btn-block"> Раз</a-->

<?php
$obj=new database();
$query="SELECT * FROM maintexts WHERE showhide='show'";
$obj->query($query);
$rows = $obj->resultset();
if ($_SESSION['id']){
echo $_SESSION['id'];
} else{?>
<div class="textt"> авторизация не прошла</div>
<?php
}

foreach($rows as $one){


?>
  <a href="index.php?url=<?=$one['url']?>" class="btn btn-success btn-block"> <?=$one['name']?></a> 
   <?php
}

// $obj=$res->query($query);
// while ($row=$res->fetch()){
  // 
// }
?>
</div>


<div class="col-md-6">


