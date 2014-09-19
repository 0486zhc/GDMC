
<!DOCTYPE html>
<html>
<head><title>
	广东医学院
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<link href="../../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../css//NewGlobal.css" rel="stylesheet" />
    <script type="text/javascript" src="../../js/zepto.js"></script>
</head>
<body>
 <div class="header">
 <a href="../main.php" class="home">
            <span class="header-icon header-icon-home"></span>
            <span class="header-name">主页</span>
</a>
<div class="title" id="titleString">登陆</div>
<a href="javascript:history.go(-1);" class="back">
            <span class="header-icon header-icon-return"></span>
            <span class="header-name">返回</span>
        </a>
 </div>

        
    <div class="container width80 pt20">
 <form name="aspnetForm" method="post" action="../../app/controller/zjc/loginAction.php" id="aspnetForm" class="form-horizontal">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTE4MTUwOTMzMA9kFgJmD2QWAgIBD2QWAgIBD2QWAgILDxYCHgRocmVmBSwvUmVnLmFzcHg/UmV0dXJuVXJsPSUyZk1lbWJlciUyZkRlZmF1bHQuYXNweGQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JTYXZlQ29va2ll5P758eqt18XT06y04yVxkKJyzYw=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBQLZmqilDgLJ4fq4BwL90KKTCAKqkJ77CQKI+JrmBdPJophKZ3je4aKMtEkXL+P8oASc" />
</div>
  <div class="control-group">
      <input name="userName" type="text" id="ctl00_ContentPlaceHolder1_txtUserName" class="input width100 " 
      			style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="请输入学号" />
  </div>
  <div class="control-group">
      <input name="password" type="password" id="ctl00_ContentPlaceHolder1_txtPassword" class="width100 input" 
      		style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="默认密码" />
  </div>
  
  <div class="control-group" align = "center">
		<span class="red">
			<?php  
  			if( isset($_GET["mess"]) ){
  				echo $_GET["mess"];
  			}  
  		?>
		</span>
  </div>

  <div class="control-group">
   
      <label class="checkbox fl">
          <input name="ctl00$ContentPlaceHolder1$cbSaveCookie" type="checkbox" id="ctl00_ContentPlaceHolder1_cbSaveCookie" 
          		 style="float: none;margin-left: 0px;" /> 记住账号
      </label>
     <a class="fr" href="GetPassword.aspx">忘记密码？</a>
 
  </div>
     <div class="control-group">
       <span class="red"></span>
   </div>
  <div class="control-group">
         <button onclick="__doPostBack('ctl00$ContentPlaceHolder1$btnOK','')" 
         			id="ctl00_ContentPlaceHolder1_btnOK" class="btn-large green button width100">立即登陆</button>
  </div>
    <div class="control-group">
         还没账号？<a href="register.php" id="ctl00_ContentPlaceHolder1_RegBtn">立即免费注册</a>
  </div>
  <div class="control-group">
        或者使用合作账号一键登录：<br/>
        <a class="servIco ico_qq" href="qlogin.aspx"></a>
        <a class="servIco ico_sina" href="default.htm"></a>
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
