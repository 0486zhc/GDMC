<?php
	header("Content-Type:text/html;charset=utf-8");
	require_once("../Filter.php");
	require_once("../../model/repair.class.php");
	// 报修
	$dept = check_input($_POST["dept"]);
	$submitter = check_input($_POST["submitter"]);	
	$place = check_input($_POST["place"]);
	$reason = check_input($_POST["reason"]);
	
	echo $dept;
	echo $submitter;
	echo $place;
	echo $reason;
	
	$repair = new repair($dept,$submitter,$place,$reason);
	$state = $repair->insert();
	
	if($state){
		echo "成功啦";
	}else{
		echo "失败啦";	
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
