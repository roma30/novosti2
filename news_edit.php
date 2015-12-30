<?php require_once('templates/top.php');
require_once("config/config.php"); 
  require_once ("class/Database.php"); 

if($_SESSION['id']){


if($_POST){
		
		$err = array();
		if(empty($_POST['name_categoria'])){
			$err[] = 'Не указан заголовок!';
		}
		if(empty($_POST['editor1'])){
			$err[] = 'Заполните поле "Текст"!';
		}
	if(count($err)<1){
		
		$database = new Database();
		$query="UPDATE statias SET name_categoria='".$_POST['name_categoria']."', editor1='".$_POST['editor1']."', update1 = NOW() WHERE id=".$_GET['id'];
		$database->query($query);
		$result = $database->execute();
		if($result){
			?>
		<script>
			document.location.href='cobinet.php';
		</script>
		<?php
		}
	}
		else{
		print_r($err);	
		}
}


	$database = new Database();
	$query = "SELECT*FROM statias WHERE id = ".$_GET['id']."";
	$database->query($query);
	$result = $database->single();?>
	
	<div class="textt"><h2>Форма редактирования новости</h2>
<form method="post" enctype='multipart/form-data'>
<div class="form-group1">
    <label for="exampleInputTitle1">Название новости</label>
    <input type="name_categoria" class="form-control" id="exampleInputTitle1" name="name_categoria" placeholder="name_categoria" value="<?php echo $result['name_categoria'];?>"/>
  </div><br/>
    <div class="form-group1">
    <label for="exampleInputTextarea1">Текст новости</label>
   <textarea  class="ckeditor" name="editor1" placeholder="text"><?php echo $result['editor1'];?></textarea>
  </div><br/>
  <div class="form-group1">
    <label for="exampleInputFile">Прикрепить файл</label>
    <input type="file" id="exampleInputFile" name="file_foto">
    </div><br/>  
		<br/>  
   <button type="submit" class="btn btn-default">Обновить</button><br/>
</form>	
</div><?php
}else{
echo "незя, авторизируйтесь";
}
?>


<?php require_once('templates/bottom.php');?>
<script type="text/javascript" src="media/ckeditor/ckeditor.js"></script>
