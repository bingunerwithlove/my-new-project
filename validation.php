<?php

include ('../dbconnect/db.php');

session_start();

if(isset($_POST['login'])){
	
	$email=$_POST['email'];
	$password=$_POST['password'];

	$select =$connnection->query("SELECT*FROM users WHERE email='{$email} && password='{$password}'"); 
	if(!empty($email) && !empty($password)){
		if(!$select){
			die("データベースはエラーになっています。");
		}else{
			header('location:../layout/login.php');

		}
	}
}

?>