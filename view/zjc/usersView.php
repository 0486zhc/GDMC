<?php 
	session_start();
	$users = $_SESSION['users'];
	$usersCount = $_SESSION['usersCount'];
	$pageStr = $_SESSION['pageStr'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="GENERATOR" content="PHPEclipse 1.2.0" />
	<title>用户</title>
</head>
<body>
	<table align="center">
		<tr>
			<td>序号</td>
			<td>账号</td>
			<td>真实姓名</td>
			<td>性别</td>
			<td>手机号</td>
			<td>微信id</td>
			<td>注册时间</td>
			<td>备注</td>
			
		</tr>
		<?php 
			foreach($users as $user){
				echo "<tr>";
				echo "<td>".$user->id."</td>";
				echo "<td>".$user->userName."</td>";
				echo "<td>".$user->name."</td>";
				echo "<td>".$user->sex."</td>";
				echo "<td>".$user->mobile."</td>";
				echo "<td>".$user->webChat_id."</td>";
				echo "<td>".$user->register_time."</td>";
				echo "<td>".$user->info."</td>";
				echo "</tr>";
			}
		?>
	<tr>
		<td colspan="7">
			<?php echo $pageStr."总记录数：".$usersCount?>
		</td>
	</tr>
</table>

</body>
</html>