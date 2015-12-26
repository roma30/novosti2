<?php require_once('templates/top.php');
	require_once("config/config.php"); 
  	require_once ("class/Database.php"); 
$id=(int)$_GET['id'];
$database = new Database();
$query="SELECT * FROM statias WHERE showhide='show'";
$database->query($query);
$database->resultset();
print_r($query);

?>
<?php require_once("templates/bottom.php");?>