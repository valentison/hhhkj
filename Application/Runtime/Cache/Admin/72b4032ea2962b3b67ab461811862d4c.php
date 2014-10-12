<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>产品列表</title>
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
</head>
<style>
	.test    {float: right;margin-bottom:3%;}
	.test a  {margin-left: 3px; border-radius: 15px;}
	.current {margin-left: 3px; margin-right: 0px;border-radius: 15px}
</style>
<body>
		<div class="alert">
		  <strong>产品内容</strong>
		</div>
		<table class="table table-striped">
		<tr>
			<td>ID</td>
			<td>产品名称</td>
			<td>产品图片</td>
			<td>发布时间</td>
			<td>操作</td>
		</tr>
		<?php if(is_array($products)): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($product["id"]); ?></td>
				<td><?php echo ($product["title"]); ?></td>
				<td><img src="/Public/Uploads/<?php echo ($product["picture"]); ?>" alt="<?php echo ($product["title"]); ?>" width="125px" height="129px"></td>
				<td><?php echo (date('Y-m-d H:i:s', $product["pubtime"])); ?></td>
				<td>
				<a href="javascript:void(0)" onclick="
				if(confirm('确定要删除吗?')){
				location.href ='<?php echo U('Admin/Index/delProduct', array('id' => $product['id']));?>';}
				" class="btn btn-primary">删除</a>
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<?php if(!empty($page)): ?><div class="test"><?php echo ($page); ?></div><?php endif; ?>
</body>
</html>