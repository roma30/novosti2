<?php require_once("config/config.php"); 
  require_once ("class/Database.php"); 
  
$id=(int)$_GET['id'];
$database = new Database();
$query="UPDATE statias SET showhide='hide'  WHERE id='$id'";
$database->query($query);
$database->execute();
header('location:new_news.php');