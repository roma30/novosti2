<?php require_once("templates/top.php");
if  ($_GET['url']){
$file=$_GET['url'];
}else{
$file='index';
}
$obj=new database();
$query= "select * from maintexts where url='$file'";
$obj->query($query);
$row=$obj-> single();



//$text=mysql_fetch_array($adr); //формирует массив полей // $text ['name']
?>
<h2><?echo $row['name'];?></h2>
		<?echo $row['body'];?>

<?php require_once("templates/bottom.php");?>

/*script>
 $(function(){
$('a').attr('href','http://mysite.com');
}); 
script>*/
