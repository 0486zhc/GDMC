<?php
	include_once("../../model/pager.class.php");
	require_once("../../model/user.class.php");
	define('pageSize',2);     // 定义页面  显示记录数
	
	$CurrentPage = isset ($_GET['page']) ? $_GET['page'] : 1;   
	
	$users = User::getUsersPage( ($CurrentPage-1) * pageSize , pageSize);   // 获得用户对象
	$usersCount = User::getUsersCount();         						    // 获得记录数
	$myPage = new pager($usersCount, intval($CurrentPage),pageSize);   
	$pageStr = $myPage->GetPagerContent();									// 尾页值

	// 放入 session 中	
	session_start();
	$_SESSION['users'] = $users ;
	$_SESSION['usersCount'] = $usersCount ;
	$_SESSION['pageStr'] = $pageStr;
	
	$url = "../../../view/zjc/usersView.php";
	header('Location:'.$url);
	
?>   
