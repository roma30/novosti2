<?php

class Auth{
	var $err=array();
	var $login;
	var $email;
	var $password;
	var $password_two;

	public function __construct($login, $email, $password, $password_two) {
	$this->login=$login;
	$this->emaiI=$emaiI;
	$this->password=$password;
	$this->password_two=$password_two;
	
	if(empty($login)){
	$this->err[]='не указан login';
	}
	if(empty($email)){
	$this->err[]='не указан emaI';
	}
	if(empty($password)){
	$this->err[]='не указан password';
	}
	if(empty($password_two)){
	$this->err[]='не указан password_two';
	}

	if(count($this->err)>0){
	
	//print_r($this->err);
	}
	else{
return true;
	}
	}
	public function reg(){
	$query="insert into forms values(NULL,' ".$this->email."','".$this->login."','".$this->password."',NOW(),NOW(),'unblock')";
 
	return $query;
	}
	public function prlog(){
	$query="select * from forms where login= '".$_POST['login']."'";
	$res=$db->query($query);
	$row=$res-> fetch(PDO::FETCH_ASSOC);
	return $query;
	}
}