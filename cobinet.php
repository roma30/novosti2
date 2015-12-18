<?php require_once('templates/top.php');
if ($_SESSION['id']){
$database = new Database();
$query="SELECT * FROM forms WHERE id=".$_SESSION['id']."";
$database->query($query);
$row=$database-> single();

?>
<br>
<div class="textt">ваш логин: <?=$row['login']?> </div>
<br>
<div class="textt">ваш адрес электронной почты: <?=$row['email']?> </div>
<?php 
}else{
echo 'ошибка входа';
}
?>

<?php 


$database = new Database();
$query="SELECT * FROM categoria ";
$database->query($query);
$cats=$database-> resultset();



	if($_POST){
	/* echo '<pre>';
	print_r ($_FILES);
	echo '</pre>'; */
			if($_FILES){
		
			
			$fan=explode ('.',$_FILES ['file_foto']['name']);
			
				if( end  ($fan) == 'jpg' or end  ($fan) == 'png' ||  end  ($fan) =='txt'){
				$real_name=date('y_m_d_h_i_s') . '.' .end($fan);
				$dir= $_SERVER ['DOCUMENT_ROOT'] . '/media/uploaded/'.$_SESSION['id'].'/';
				$path=$dir.$real_name;
				if (!is_file($dir)){
				@mkdir($dir,0777,true);
				}
				move_uploaded_file($_FILES['file_foto']['tmp_name'],$path);
				}
				else{
				$real_name='';
				echo 'незя';
				}

		}

		$database = new Database();
	$query = 'INSERT INTO statias (cat_id,user_id,name_categoria, editor1,file_foto,data_reg) VALUES ("'.$_POST['cat_id'].'","'.$_SESSION['id'].'","'.$_POST['name_categoria'].'","'.$_POST['editor1'].'","'.trim($real_name).'",NOW())';
	$database->query($query);
/*
		$database->bind(':cat_id', $_POST['cat_id']);
		$database->bind(':name-categoria', $_POST['name-categoria']);
		$database->bind(':editor1', $_POST['editor1']);
		$database->bind(':file_foto', $real_name);
		$database->bind(':user_id', $_SESSION['id']);*/
		$database->execute();
		?>
		<script>
		document.location.href='index.php?url=thankyoupage';
		</script>
		<?php
		
	}
?>







<form method='POST' action="cobinet.php" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="categoria">категория</label>

<select name='cat_id'>
<?php
foreach($cats as $key){
?>
<option value ='<?=$key['id']?>' >
<?=$key['name']?>
</option>
<?php
}
?>
</select>
  </div>
  <div class="form-group">
    <label for="name-categoria">название</label>
    <input type="name-categoria" class="form-control" id="name_categoria" placeholder="name_categoria" name="name_categoria">
  </div>
    <div class="form-group">
    <label for="text-categoria">статья</label>
	<textarea class="ckeditor" name="editor1"></textarea>
    </div>
   <div class="form-group">
    <label for="foto-categoria">фото</label>
    <input type="file" id="foto-categoria" name="file_foto">
  </div>
   <div class="form-group">
    <label for="table-categoria">таблица</label>
    <input type="file" id="table-categoria" name="file">
  </div>
    
	<button type="submit" class="btn btn-default">сохранить</button>
</form>


<script src='media/ckeditor/ckeditor.js'> </script>




<?php require_once("templates/bottom.php");?>