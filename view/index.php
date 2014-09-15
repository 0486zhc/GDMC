<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>广东医学院</title>
<meta name="viewport"
	content="width=device-width,user-scalable=no, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../css/index.css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="../js/g.base.js"></script>
<script type="text/javascript" src="../js/iscroll.js"></script>
<script type="text/javascript" src="../js/alert.js"></script>
<script type="text/javascript" src="../js/common.js"></script>
<script type="text/javascript">
	var myScroll;
	function loaded() {
		myScroll = new iScroll(
				'wrapper',
				{
					snap : true,
					momentum : false,
					hScrollbar : false,
					onScrollEnd : function() {
						document.querySelector('#indicator > li.active').className = '';
						document.querySelector('#indicator > li:nth-child('
								+ (this.currPageX + 1) + ')').className = 'active';
					}
				});
	}
	document.addEventListener('DOMContentLoaded', loaded, false);
</script>
</head>

<body>
	<header>
		<div class="banner">
			<div id="wrapper" style="overflow: hidden;">
				<div id="scroller">
					<ul id="thelist">
						<li><p></p>
							<a href="#"><img src="../img/zjc/1.jpg" /></a></li>
						<li><p></p>
							<a href="#"> <img src="../img/zjc/2.jpg" /></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="nav">
			<div id="prev" onclick="javascript:myScroll.scrollToPage('prev', 0);"></div>
			<ul id="indicator">
				<li class="active"></li>
				<li></li>
			</ul>
			<div id="next"
				onclick="javascript:myScroll.scrollToPage('next', 0, 400, 2);"></div>
		</div>
		<div class="clr"></div>
	</header>
	<script>
		var count = document.getElementById("thelist").getElementsByTagName(
				"img").length;
		for (i = 0; i < count; i++) {
			document.getElementById("thelist").getElementsByTagName("img")
					.item(i).style.cssText = " width:"
					+ document.body.clientWidth + "px";
		}
		document.getElementById("scroller").style.cssText = " width:"
				+ document.body.clientWidth * count + "px";
		setInterval(function() {
			myScroll.scrollToPage('next', 0, 400, count);
		}, 3500);
		window.onresize = function() {
			for (i = 0; i < count; i++) {
				document.getElementById("thelist").getElementsByTagName("img")
						.item(i).style.cssText = " width:"
						+ document.body.clientWidth + "px";
			}
			document.getElementById("scroller").style.cssText = " width:"
					+ document.body.clientWidth * count + "px";
		};
	</script>
	<div class="main">
		<div>
			<a
				href="http://www.gdmc.edu.cn/index2.php">
				<p class="img"
					style="background: url(http://www.wiying.com/upload/img/xctxwlb/20131029/13830140047187.png) no-repeat; background-size: contain;"></p>
				<p class="text">学校官网</p>
			</a>
		</div>
		<div>
			<a
				href="index.php@g=Wap&m=Index&a=lists&classid=497&token=xctxwlb&wecha_id=o0LVquEUQZAJWEkbfRgk47XcQIUk&loveU=mp.weixin.qq.com">
				<p class="img"
					style="background: url(http://www.wiying.com/upload/img/xctxwlb/20131029/1383014031703.png) center no-repeat; background-size: contain;"></p>
				<p class="text">活动列表</p>
			</a> <a
				href="./zjc/repair.php">
				<p class="img"
					style="background: url(http://www.wiying.com/upload/img/xctxwlb/20131029/13830140513607.png) center no-repeat; background-size: contain;"></p>
				<p class="text">报修中心</p>
			</a>
		</div>
		
	</div>
	<div class="footer">
		<p class="footer-bottom" data-role="none">
			&COPY;2014 广东医学院版权所有
		</p>
	</div>
</body>
</html>