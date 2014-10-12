<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hhhkj - 系统信息</title>
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
</head>
<body>
	<div id="container">
		<div class="alert">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong>欢迎回来 ! <?php echo session('user_name');?> 您上次登录的IP为<?php echo ($user_info["last_login_ip"]); ?> 时间是 <?php echo date('Y-m-d H:i:s', $user_info['last_login_time']);?></strong>
		</div>
		<table class="table">
		<tr class="warning">
			<td>来访IP</td>
			<td><?php echo $_SERVER['REMOTE_ADDR'];?></td>
		</tr>
		<tr class="warning">
			<td>服务器IP</td>
			<td><?php echo $_SERVER['SERVER_ADDR'];?>:<?php echo $_SERVER['SERVER_PORT'];?></td>
		</tr>
		<tr class="warning">
			<td>网站域名</td>
			<td><?php echo $_SERVER['HTTP_HOST'];?></td>	
		</tr>
		<tr class="warning">
			<td>Web服务器</td>
			<td><?php echo $_SERVER['SERVER_SOFTWARE'];?> <?php echo $_SERVER['SERVER_PROTOCOL'];?></td>
		</tr>
		<tr class="warning">
			<td>服务器目录</td>
			<td><?php echo $_SERVER['DOCUMENT_ROOT'];?></td>
		</tr>

		<tr class="warning">
			<td>浏览器识别</td>
			<td><?php echo $_SERVER['HTTP_USER_AGENT'];?></td>
		</tr>
		</table>
	</div>
</body>
</html>