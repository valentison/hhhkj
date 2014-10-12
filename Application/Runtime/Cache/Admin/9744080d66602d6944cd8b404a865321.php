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
	border-radius: 2px;
}
div {
	border-bottom: 2px solid #C5D2DE;
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
	-webkit-appearance: none;
	border-style: solid;
	border-width: 0;
	cursor: pointer;
	font-family: inherit;
	font-weight: bold;
	line-height: normal;
	position: relative;
	text-decoration: none;
	text-align: center;
	display: inline-block;
	padding: 7px 18px;
	margin-left: 260px;
	margin-top: 5px;
	font-size: 16px;
	background-color: #2daebf;
	border-color: #238896;
	color: white;
}
.left-in {
	width: 80px;
}
</style>	
</head>
<body>
<form action="" method="">
	<div>
		<input type="file" name="image-one"><span>  请上传jpg图片</span>
	</div>
	<div>
		<input type="file" name="image-two"><span>  请上传jpg图片</span>
	</div>
	<div>
		<input type="file" name="image-three"><span> 请上传jpg图片</span>
	</div>
	<div>
		<input type="submit" value="提交" class="btn">
	</div>
</form>
<form action="/index.php/Admin/Index/addChk" method="post" enctype="multipart/form-data">  
    <table cellspacing="1" cellpadding="2" width="99%" align="center" border="0">  
        <tbody>  
            <tr>  
            <th align="left" colspan="2" height="25">添加商品</th>  
            </tr>  
            <tr>  
            <td class="left-in">商品名称:</td>  
            <td ><strong><input type="text" name="gamename" style="height: 20px;"/></strong></td>  
            </tr>  
            <tr>  
            <td class="left-in" >商品图片:</td>  
            <td ><input type="file" name="gameimg"/></td>  
            </tr>  
            <tr>  
            <td  colspan="2" ><input type="submit" value="添加" class="btn"/>      
            </tr>  
        </tbody>  
        </table>  
</form>  

</body>
</html>