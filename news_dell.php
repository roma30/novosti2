<?php require_once("config/config.php"); 
  require_once ("class/Database.php"); 

 
$id=(int)$_GET['id'];
$database = new Database();
$query="SELECT * FROM statias WHERE id='$id'";
$database->query($query);
$value=$database->single();
$dir='media/uploaded/'.$value['user_id'].'/'.$value['file_foto'];
if(file_exists($dir)){
unlink ($dir);
}

$database = new Database();
$query="DELETE FROM statias where id='$id'";
$database->query($query);
$database->execute();
header('location:cobinet.php');
