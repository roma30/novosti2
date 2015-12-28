<?php require_once("config/config.php"); 
  	require_once ("class/Database.php"); 


$database = new Database();
$query="SELECT * FROM statias WHERE id='".$_POST['id']."'";
$database->query($query);
$all = $database->single();
echo "<h2>".$all['name_categoria']."</h2>";
echo $all['editor1'];	
echo $all['file_foto'];
	if ($all['file_foto']){
		$pict="<img src= '/media/uploaded/".trim($all['user_id'])."/".trim($all['file_foto'])."' width='300px' /></a>";
		}
		else{
		$pict="<img src = '/media/uploaded/i.jpg' width='300px' /></a>";
		}
echo $pict;