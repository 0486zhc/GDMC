<!DOCTYPE html>
<html>
<head>
<title>广东医学院</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<link href="../../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../css/NewGlobal.css" rel="stylesheet" />

	<script type="text/javascript" src="../../js/zepto.js"></script>
	<script type="text/javascript" src="../../js/index.js"></script>
	<script type="text/javascript" src="../../js/my.js"></script>
</head>

<body>
	<div class="header">
		<a href="../main.php" class="home"> <span
			class="header-icon header-icon-home"></span> <span
			class="header-name">主页</span> </a>
		<div class="title" id="titleString">绑定个人信息</div>
		<a href="javascript:history.go(-1);" class="back"> <span
			class="header-icon header-icon-return"></span> <span
			class="header-name">返回</span> </a>
	</div>

	<div class="container width80 pt20">
		<form name="register" method="post"
			action="../../app/controller/zjc/registerAction.php"
			id="aspnetForm" class="form-horizontal" onsubmit = "checkRegister();">
			<div>
				<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET"
					value="" /> <input type="hidden" name="__EVENTARGUMENT"
					id="__EVENTARGUMENT" value="" /> <input type="hidden"
					name="__VIEWSTATE" id="__VIEWSTATE"
					value="/wEPDwUKLTE4MTUwOTMzMA9kFgJmD2QWAgIBD2QWAgIBD2QWAgILDxYCHgRocmVmBSwvUmVnLmFzcHg/UmV0dXJuVXJsPSUyZk1lbWJlciUyZkRlZmF1bHQuYXNweGQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JTYXZlQ29va2ll5P758eqt18XT06y04yVxkKJyzYw=" />
			</div>
	
			<input type="hidden" name="webChatId" id="webChatId" placeholder="id" value="<?php echo $_GET['webChatId'] ?>">
			
			<div class="control-group" name = "a">
				账号：<input name="userName" type="text"
					id="userName" class="input width100 "
					style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px"
					placeholder="请输入您的11位学号" onblur="checkUserName()"/>
			</div>
			<div  id="userNameError" align = "center" style="color:#F00" > </div>  
			
			<div class="control-group">
				密码：<input name="password" type="password"
					id="password" class="width100 input"
					style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px"
					placeholder="请输入密码" onblur="checkPassword()"/>
			</div>
			<div  id="passwordError" align = "center" style="color:#F00" > </div>
			
			<div class="control-group">
				真实姓名：<input name="name" type="text"
					id="name" class="width100 input"
					style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px"
					placeholder="请输入真实姓名" onblur = "checkName()"/>
			</div>
			<div  id="nameError" align = "center" style="color:#F00" > </div>
			
			<div class="control-group">
				性别：&nbsp;&nbsp;<input name="sex" type="radio"
					id="sex" class="width100 input"
					style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" value="男" checked/>男
					&nbsp;&nbsp;&nbsp;
					<input name="sex" type="radio"
					id="sex" class="width100 input"
					style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" value="女" checked/>女
			</div>
			
			<div class="control-group">
				联系方式：<input name="mobile" type="text"
					id="mobile" class="width100 input"
					style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px"
					placeholder="请输入手机号码" onblur = "checkMobile()"/>
			</div>
			<div  id="mobileError" align = "center" style="color:#F00" > </div>
			
			<div class="control-group">
				<span class="red"></span>
			</div>
			
			<div class="control-group">
				<button onclick="__doPostBack('ctl00$ContentPlaceHolder1$btnOK','')"
					id="ctl00_ContentPlaceHolder1_btnOK"
					class="btn-large green button width100" onClick="checkRegister()">立即绑定</button>
			</div>
			
		</form>
	</div>


	<div class="footer">
	  <div class="gezifooter">
	    <p style="color:#bbb;">&COPY;2014 广东医学院版权所有</p>
	  </div>
    </div>

</body>
</html>