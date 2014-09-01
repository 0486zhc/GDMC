<?php
	header("Content-Type:text/html;charset=utf-8");
	session_start();
	$userName =  $_SESSION['userName'];
	
	if( isset($userName) ){
		echo "欢迎你，".$userName;
	}else{
		echo "失败：".$userName;
	}
	
 
 
 
?>
