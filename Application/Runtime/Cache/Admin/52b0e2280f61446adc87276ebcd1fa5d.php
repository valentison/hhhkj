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
<title>信息管理系统</title> 

<style>
input {
	margin-top: 10px;
	margin-bottom: 10px;
	border: 1px solid #abcdef;
	border-radius: 3px;
}
div {
	border-bottom: 2px solid #C5D2DE;
}
span {
	font-size: 17px;
}
.btn {
	-webkit-animation-name: bluePulse;
	-webkit-animation-duration: 4s;
	-webkit-animation-iteration-count: infinite;
	margin-right: 0.5em;
	border-radius: 4px;
	box-shadow: none;
	display: inline-block;
	-webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.5) inset;
	box-shadow: 0 1px 0 rgba(255,255,255,0.5) inset;
	-webkit-transition: background-color 300ms ease-out;
	-moz-transition: background-color 300ms ease-out;
	transition: background-color 300ms ease-out;
	padding-top: 0.8125em;
	padding-bottom: 0.75em;
	-webkit-appearance: none;
	border-style: solid;
	border-width: 0;
	cursor: pointer;
	font-family: inherit;
	font-weight: bold;
	line-height: normal;
	margin: 0 0 1.25em;
	position: relative;
	text-decoration: none;
	text-align: center;
	display: inline-block;
	padding: 7px 18px;
	margin-left: 160px;
	margin-top: 5px;
	font-size: 16px;
	background-color: #2daebf;
	border-color: #238896;
	color: white;
}
</style>	
</head>
<body>
<form action="" method="">
	<div><span>旧密码:&nbsp;&nbsp;</span><input type="password" name="image-one"></div>
	<div><span>&nbsp;&nbsp;&nbsp;密码:&nbsp; </span><input type="password" name="image-two"></div>
	<div><span>新密码:&nbsp;&nbsp;</span><input type="password" name="image-three"/></div>
	<input class="btn" type="submit" value="提交">
</form>
</body>
</html>