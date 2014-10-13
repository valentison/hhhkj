<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style/authority/basic_layout.css" rel="stylesheet" type="text/css">
<link href="style/authority/common_style.css" rel="stylesheet" type="text/css">
<link href="style/authority/zTreeStyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="scripts/jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="scripts/zTree/jquery.ztree.core-3.2.js"></script>
<script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="style/authority/jquery.fancybox-1.3.4.css" media="screen"/></link>
<script type="text/javascript" src="scripts/artDialog/artDialog.js?skin=default"></script>
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
<title>信息管理系统</title> 
</head>
<body>
<form class="form-horizontal" action="" method="post">
	<br>
	<div class="alert alert-info">
	  <strong>修改密码</strong>
	</div>
	<div class="alert alert-info">
		<div class="control-group">
			<label class="control-label" for="inputEmail">原始密码</label>
			<div class="controls">
				<input type="password" name="password" placeholder="原始密码">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">新密码</label>
			<div class="controls">
				<input type="password" name="new_password" placeholder="新密码">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">确认密码</label>
			<div class="controls">
				<input type="password" name="confirm_password" placeholder="确认密码">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary">确认修改</button>
			</div>
		</div>
  </div>
</form>
</body>
</html>