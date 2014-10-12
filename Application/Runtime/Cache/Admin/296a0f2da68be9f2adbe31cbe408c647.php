<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forum</title>
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
</head>
<style>
	.test    {float: right;}
	.test a  {margin-left: 3px; border-radius: 15px;}
	.current {margin-left: 3px; margin-right: 0px;border-radius: 15px}
</style>
<body>
		<div class="alert">
		  <strong>留言内容</strong>
		</div>
		<table class="table table-striped">
		<tr>
			<td>ID</td>
			<td>姓名</td>
			<td>电话</td>
			<td>手机</td>
			<td>QQ</td>
			<td>留言时间</td>
			<td>操作</td>
		</tr>
		<?php if(is_array($messages)): $i = 0; $__LIST__ = $messages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$message): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($message["id"]); ?></td>
				<td><?php echo ($message["name"]); ?></td>
				<td><?php echo ($message["tel"]); ?></td>
				<td><?php echo ($message["mobile"]); ?></td>
				<td><?php echo ($message["qq"]); ?></td>
				<td><?php echo (date('Y-m-d H:i:s', $message["pubtime"])); ?></td>
				<td>
				<a href="javascript:void(0)" onclick="
				if(confirm('确定要删除吗?')){
				location.href ='<?php echo U('Admin/Index/delMsg', array('id' => $message['id']));?>';}
				" class="btn btn-danger">删除</a>
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<div class="alert alert-success test"><?php echo ($page); ?></div>
</body>
</html>