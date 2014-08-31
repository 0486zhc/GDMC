<?php
	header("Content-Type:text/html;charset=utf-8");
	require_once("../../model/user.class.php");
	
	$userName = $_POST["userName"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$sex = $_POST["sex"];
	$mobile = $_POST["mobile"];
	$webChatId =  $_POST["webChatId"];
	
	echo "webChatId = ".$webChatId;
	$user = new User($userName,$password,$name,$sex,$mobile,$webChatId);
	$result =  $user->insert();
	
	if($result == 1){
		$url = "../../../view/zjc/success.php?mess=注册成功";
			Header("Location: $url");  
	}else{
			$url = "../../../view/zjc/fail.php?mess=注册失败";
			Header("Location: $url");  
	}
	
	
//	$users = User::getAllUser();
//	
//	echo "总页数".User::getUsersCount();
//	
//	foreach($users as $u){
////		echo $u->userName;
//		echo $u->webChatId;
//		echo "<br/>".$u->userName."<br/>".$u->password."<br/>".$u->name."<br/>".$u->sex."<br/>".$u->mobile."<br/>"; 
//	}
?>
