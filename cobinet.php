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
?>
<select name='cat'>
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








<form method='POST' action="cobinet.php">
  <div class="form-group">
    <label for="categoria">категория</label>
	    <input type="categoria" class="form-control" id="categoria" placeholder="categoria" name="categoria">
  </div>
  <div class="form-group">
    <label for="name-categoria">название</label>
    <input type="name-categoria" class="form-control" id="name-categoria" placeholder="name-categoria" name="name-categoria">
  </div>
    <div class="form-group">
    <label for="text-categoria">статья</label>
	<textarea class="ckeditor" name="editor1"></textarea>
    </div>
   <div class="form-group">
    <label for="foto-categoria">фото</label>
    <input type="file" id="foto-categoria">
  </div>
   <div class="form-group">
    <label for="table-categoria">таблица</label>
    <input type="file" id="table-categoria">
  </div>
    
	<button type="submit" class="btn btn-default">сохранить</button>
</form>


<script src='media/ckeditor/ckeditor.js'> </script>




<?php require_once("templates/bottom.php");?>