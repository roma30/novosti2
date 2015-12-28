<?php require_once('templates/top.php');
	require_once("config/config.php"); 
  	require_once ("class/Database.php"); 
	
	

$database = new Database();
$query="SELECT * FROM statias WHERE showhide='show'";
$database->query($query);
$all = $database->resultset();
foreach($all as $one){
 echo "<div class='art'><a href='#' data_id='".$one['id']."'>".$one['name_categoria']."</a></div>";
}



?>
<script src='media/js/gallery.js'></script>
<?php require_once("templates/bottom.php");?>

