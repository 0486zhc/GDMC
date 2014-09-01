<?php
	header("Content-Type:text/html;charset=utf-8");
	require_once("../../model/user.class.php");

//	$userName = check_input($_POST["userName"]);
//	$password = check_input($_POST["password"]);
//	
////	$flag = $_POST["flag"];
//	echo "账号=".$userName;
//	echo "密码=".$password;
	
	session_start();
	if( !isset($_SESSION['userName']) ){                 // 没session
		$userName = check_input($_POST["userName"]);
		$password = check_input($_POST["password"]);
		
		if(!empty($userName) && !empty($password)){      // 非空
			echo "1";
			$user = new user($userName,$password);
			$userName = $user->login();
			if( $userName != null){
				$_SESSION['userName'] = $userName;
			}
			$url = "test.php";
			header('Location:'.$url);	
		}else{
			echo "2";
			$url = "../../../view/zjc/fail.php?mess=请重新登录";
		}
		header('Location:'.$url);		
	}else{
		echo "3";
		$url = "../../../view/zjc/success.php?mess=已登录";
		header('Location:'.$url);
	}
	
	
	// 检查输入数据，防止注入式攻击
	function check_input($value){
		// 去除斜杠
		if (get_magic_quotes_gpc()) {
		 	 $value = stripslashes($value);
		}
		
		// 如果不是数字则加引号
		if (!is_numeric($value)) {
		 	 $value = "'" . mysql_real_escape_string($value) . "'";
		}
		return $value;
	}
	
	
	
	
//	if( $userName==null || $password == null ){
//		echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
//	}else{
//		$user = new User($userName,$password);
//		$userName = $user->login();
//		if( $userName == null ){
//			$url = "../../../view/zjc/fail.php?mess=登录失败";
//			Header("Location: $url");  
//		}else{
//			$url = "../../../view/zjc/success.php?mess=".$userName;
//			Header("Location: $url");  
//		}
//		
//		
//	}

	

//	
//	$userName =  $_POST["userName"];
//	$pwd =  $_POST["password"];
//
//	echo $userName;
//	echo $pwd;
//	
//	
//    $user = $_POST["userName"];  
//    $psw = $_POST["password"];  
//    if($user == "" || $psw == "")  
//    {  
//        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
//    }  
//    else  
//    {  
//    	if(!$con){
//    		echo "链接错误";
//    	}
//    	$sql = "select * from user where name = $userName and password = $pwd";
//    	$result = mysql_query($sql) OR die ("<br/>ERROR：".mysql_error()."<br/>产生问题的SQL:".$sql);
//    	$row = mysql_fetch_array($result,MYSQL_ASSOC);
//    	if($row){
//    		echo $row['sex'];
//    	}
//    	
//    }  
//  
//	$user = new User("HellWorld","123");
//	$user->insert();
//	
//	$users = User::getAllUser();
//	
//	
//	foreach($users as $u){
//		echo "<br/>".$u->name."<br/>".$u->password."<br/>"; 
//	}
	
	
?>
