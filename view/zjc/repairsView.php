<?php 
	session_start();
	$repairs = $_SESSION['repairs'];
	$count = $_SESSION['count'];
	$pageStr = $_SESSION['pageStr'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="GENERATOR" content="PHPEclipse 1.2.0" />
	<title>广东医学院</title>
</head>
<body>
	<table align="center">
		<tr>
			<td>序号</td>
			<td>部门</td>
			<td>报修人</td>
			<td>地点</td>
			<td>报修时间</td>
			<td>报修原因</td>
		</tr>
		<?php 
			foreach($repairs as $repair){
				echo "<tr>";
				echo "<td>".$repair->id."</td>";
				echo "<td>".$repair->dept."</td>";
				echo "<td>".$repair->submitter."</td>";
				echo "<td>".$repair->place."</td>";
				echo "<td>".$repair->reason."</td>";
				echo "<td>".$repair->submitTime."</td>";
				echo "</tr>";
			}
		?>
	<tr>
		<td colspan="6">
			<?php echo $pageStr."总记录数：".$count?>
		</td>
	</tr>
</table>

</body>
</html>