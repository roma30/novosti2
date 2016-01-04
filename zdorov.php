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
<a href='#' class='google_search'>найти изображение</a>
<div id='result'></div>
<script>
$(function(){
$.ajaxSetup({ url:"google_search.php",
type:"POST",
beforeSend:function(){
	$('#result').html("<img src='media/img/loader.gif'/>");
	},
success:function(data){
	$('#result').html(data);
	},
error:function(msg){
	$('#result').html(msg);
	}
});
$('.google_search').click(function(){
	$.ajax({data:'q=1'});
		});
	});
</script> 


<?
?>
<script src='media/js/gallery.js'></script>
<?php require_once("templates/bottom.php");?>

