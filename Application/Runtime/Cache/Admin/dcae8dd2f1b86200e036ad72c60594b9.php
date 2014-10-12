<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SCT-后台系统</title>
<link href="style/authority/basic_layout.css" rel="stylesheet" type="text/css">
<link href="style/authority/common_style.css" rel="stylesheet" type="text/css">
</head>
<style>
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
	margin-left: 192px;
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
<body>
	<div id="container">
		<form action="/Admin/Index/addChk" method="post" enctype="multipart/form-data">  
    <table cellspacing="1" cellpadding="2" width="99%" align="center" border="0">  
        <tbody>  
            <tr>  
            <th align="left" colspan="2" height="25">填写信息</th>  
            </tr> 
            <tr>  
            <td class="left-in">网站标题:</td>  
            <td ><strong><input type="text" name="gamename" style="height: 20px;"/></strong></td>  
            </tr> 
            <tr>  
            <td class="left-in">公司名称:</td>  
            <td ><strong><input type="text" name="gamename" style="height: 20px;"/></strong></td>  
            </tr>
            <tr>  
            <td class="left-in">主管:</td>  
            <td ><strong><input type="text" name="gamename" style="height: 20px;"/></strong></td>  
            </tr>
            <tr>  
            <td class="left-in">电话:</td>  
            <td ><strong><input type="text" name="gamename" style="height: 20px;"/></strong></td>  
            </tr>
            <tr>  
            <td class="left-in">传真:</td>  
            <td ><strong><input type="text" name="gamename" style="height: 20px;"/></strong></td>  
            </tr>
            <tr>  
            <td class="left-in">QQ:</td>  
            <td ><strong><input type="text" name="gamename" style="height: 20px;"/></strong></td>  
            </tr>
            <tr>  
            <td class="left-in">邮编:</td>  
            <td ><strong><input type="text" name="gamename" style="height: 20px;"/></strong></td>  
            </tr>
            <tr>  
            <td class="left-in">厂址:</td>  
            <td ><strong><input type="text" name="gamename" style="height: 20px;"/></strong></td>  
            </tr>
            <tr>  
             <td class="left-in">公司简介:</td>  
            <td ><strong><textarea name="公司简介" id="" cols="30" rows="10"></textarea></strong></td>  
            </tr>
            <tr> 
            <td  colspan="2" ><input type="submit" value="添加" class="btn"/>      
            </tr>  
        </tbody>  
        </table>  
</form> 
	</div>

</body>
</html>