<?php require_once('templates/top.php');
?>
	
<?php 

 if ($_POST){
/* 	echo "<pre>";
	print_r($_POST);
	echo "</pre>"; */
	 $err=array();
	if(empty($_POST['email'])){
													$err[]= 'не указан email';
												}
		if(empty($_POST['login'])){
													$err[]= 'не указан login';
												}											
		if(empty($_POST['password'])){
													$err[]= 'не указан password';
												}
		if(empty($_POST['password_two'])){
													$err[]= 'не указан password_two';
												}	
		if(count($err)>0){
	echo "<pre>";
	print_r($err);
	echo "</pre>";	
}else{										
$database = new Database();

$database->query('INSERT INTO forms (email, login, password, datareg, lastvisit) VALUES (:email, :login, :password, NOW(), NOW())');

$database->bind(':email', $_POST['login']);
$database->bind(':login', $_POST['email']);
$database->bind(':password', $_POST['password']);

$database->execute();
?>
<script>
	document.location.href='index.php?url=thankyoupage';
	</script>
<?php
}
}
?>



<form method='POST' action="reg.php">
  <div class="form-group">
    <label for="login">login</label>
    <input type="login" class="form-control" id="login" placeholder="login" name="login">
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="email" class="form-control" id="email" placeholder="email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">повторить Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_two">
  </div>
  

  <button type="submit" class="btn btn-default">Submit</button>
</form>



<?php require_once('templates/bottom.php');
?>