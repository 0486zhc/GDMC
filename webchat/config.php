<?php
	header("Content-Type: text/html;charset=utf-8");
	$SAE_MYSQL_HOST_M= 'w.rdc.sae.sina.com.cn';  //主库域名
	$SAE_MYSQL_USER = '4jy4kl5xoo';  //用户名 ，汇总信息那里可以查看
	$SAE_MYSQL_PASS = '0wy01jxk355ijxlkkkx5ziwwzkk4ixwiy0xy2mi5';// 密码
	$SAE_MYSQL_PORT = '3307';   //端口
	$SAE_MYSQL_DB = 'app_gdmc12580';   // 数据库名 ,即项目名
	//连接主库
	$link=mysql_connect($SAE_MYSQL_HOST_M.':'.$SAE_MYSQL_PORT,$SAE_MYSQL_USER,$SAE_MYSQL_PASS);
	$connet = mysql_select_db(SAE_MYSQL_DB,$link);
           
?>