<?php
	require_once("../Filter.php");
	include_once("../../model/pager.class.php");
	require_once("../../model/user.class.php");
	require_once("../../model/repair.class.php");
	
	define('pageSize',2);     // 定义页面  显示记录数
	
	$CurrentPage = isset ($_GET['page']) ? $_GET['page'] : 1;   
	$type = $_GET["type"];
	if( $type==1 ){  // 用户
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
	}
	
	if( $type==2 ){{  // 报修
		$repairs = Repair::getRepairsPage(($CurrentPage-1) * pageSize , pageSize);
		$count = Repair::getRepairsCount();
		$myPage = new pager($count, intval($CurrentPage),pageSize);
		$pageStr = $myPage->GetPagerContent();									// 尾页值
	
		// 放入 session 中	
		session_start();
		$_SESSION['repairs'] = $repairs ;
		$_SESSION['count'] = $count ;
		$_SESSION['pageStr'] = $pageStr;
		
		$url = "../../../view/zjc/repairsView.php";
		header('Location:'.$url);
	}

}	
?>   
