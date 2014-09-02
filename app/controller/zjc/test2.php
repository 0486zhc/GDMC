<?php
	session_start();
	$user = $_SESSION['user'];
	echo $user->userName;
	echo $user->sex;
?>
