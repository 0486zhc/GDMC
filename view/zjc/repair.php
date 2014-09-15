
<!DOCTYPE html>
<html>
<head><title>
	报修
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
 <a href="" class="home">
            <span class="header-icon header-icon-home"></span>
            <span class="header-name">主页</span>
</a>
<div class="title" id="titleString">报修</div>
<a href="javascript:history.go(-1);" class="back">
            <span class="header-icon header-icon-return"></span>
            <span class="header-name">返回</span>
        </a>
 </div>

        
    <div class="container width80 pt20">
 <form name="aspnetForm" method="post" action="../../app/controller/zjc/repairAction.php" id="aspnetForm" class="form-horizontal">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTE4MTUwOTMzMA9kFgJmD2QWAgIBD2QWAgIBD2QWAgILDxYCHgRocmVmBSwvUmVnLmFzcHg/UmV0dXJuVXJsPSUyZk1lbWJlciUyZkRlZmF1bHQuYXNweGQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JTYXZlQ29va2ll5P758eqt18XT06y04yVxkKJyzYw=" />
</div>


	<div>
		<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBQLZmqilDgLJ4fq4BwL90KKTCAKqkJ77CQKI+JrmBdPJophKZ3je4aKMtEkXL+P8oASc" />
	</div>
  <div class="control-group">
      部门：<input name="dept" type="text" id="ctl00_ContentPlaceHolder1_txtUserName" class="input width100 " style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="请输入手机号/身份证/会员卡号" />
  </div>
  <div class="control-group">
      提交人：<input name="submitter" type="text" id="ctl00_ContentPlaceHolder1_txtPassword" class="width100 input" style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="默认密码为证件号后4位" />
  </div>
  <div class="control-group">
      地点：<input name="place" type="text" id="ctl00_ContentPlaceHolder1_txtPassword" class="width100 input" style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="默认密码为证件号后4位" />
  </div>
  <div class="control-group">
      报修原因：<input name="reason" type="text" id="ctl00_ContentPlaceHolder1_txtPassword" class="width100 input" style="background: none repeat scroll 0 0 #F9F9F9;padding: 8px 0px 8px 4px" placeholder="默认密码为证件号后4位" />
  </div>
     <div class="control-group">
       <span class="red"></span>
   </div>
  <div class="control-group">
         <button onclick="__doPostBack('ctl00$ContentPlaceHolder1$btnOK','')" 
         			id="ctl00_ContentPlaceHolder1_btnOK" class="btn-large green button width100">提交</button>
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
