<?php
	header("Content-Type:text/html;charset=utf-8");
	require_once("../../model/user.class.php");
	session_start();
	$userName =  $_SESSION['userName'];
	
	if( isset($userName) ){
		echo "欢迎你，".$userName;
	}else{
		echo "失败：".$userName;
	}
	
	echo "<br/>";
 	$user = User::getUserByName(3);
 	$user = $user[0];
 	
 	$_SESSION['user'] =$user;
 	echo "册数=".$user->userName;
 	
 	$url = "./test2.php";
 	header('Location:'.$url);
 
?>
