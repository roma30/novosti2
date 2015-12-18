<?php require_once('templates/top.php');
?>
<?php

$database = new Database();
	$query="SELECT * FROM statias";
	
	$database->query($query);
	$rows = $database->resultset();
		foreach ($rows as $key=>$value){
		if ($value['file_foto']){
		$pict="<img src= '/media/uploaded/".trim($value['user_id'])."/".trim($value['file_foto'])."' width='300px' class='pic'/></a>";
		}
		else{
		$pict="<img src = '/media/uploaded/i.jpg' width='900px' class='pic'/></a>";
		}
		echo $pict;
		echo  $value[name_categoria];
		echo $value[editor1];
		}
		
?>
	