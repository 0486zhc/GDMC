<?php
	session_start();
	if( !isset($_SESSION['userName']) ){
		die("<script>window.open('../../../view/zjc/login.php?mess=未登陆','_parent');</script>");
	}else{
		$url = "../view/main.php";
		header('Location:'.$url);
	}
	
	
	
	// 检查输入数据，防止注入式攻击
	function check_input($value){
		// 去前后空格
		$value = trim($value);
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
	
?>
