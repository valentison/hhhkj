<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forum</title>
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
</head>
<body>
		<div class="alert">
		  <strong>首页幻灯片替换 (此幻灯片只允许jpg格式图片)</strong>
		</div>
			<table class="table table-bordered">
				<tr class="success">
					<td>
						<span class="badge badge-important">1</span>
					</td>
					<td>
					<form action="<?php echo U('Foundation/Picture/upload');?>" method="POST" enctype="multipart/form-data">
						<input type="file" name="photo1">
						<input type="hidden" name="type" value="advertise">
						<input type="hidden" name="num" value="1">
						<input type="submit" class="btn btn-warning" value="替换">
					</form>
					</td>
				</tr>
				<tr class="error">
					<td>
						<span class="badge badge-important">2</span>
					</td>
					<td>
					<form action="<?php echo U('Foundation/Picture/upload');?>" method="POST" enctype="multipart/form-data">
						<input type="file" name="photo2">
						<input type="hidden" name="type" value="advertise">
						<input type="hidden" name="num" value="2">
						<input type="submit" class="btn btn-primary" value="替换">
					</form>
					</td>
				</tr>
				<tr class="warning">
					<td>
						<span class="badge badge-important">3</span>
					</td>
					<td>
					<form action="<?php echo U('Foundation/Picture/upload');?>" method="POST" enctype="multipart/form-data">
						<input type="file" name="photo3">
						<input type="hidden" name="type" value="advertise">
						<input type="hidden" name="num" value="3">
						<input type="submit" class="btn btn-danger" value="替换">
					</form>
					</td>
				</tr>
			</table>
		<div class="alert">
		  <strong>首页产品上传</strong>
		</div>
		<form action="<?php echo U('Foundation/Picture/upload');?>" method="POST" enctype="multipart/form-data">
			<table class="table table-bordered">
				<tr class="success">
					<td>
						<span class="label label-important">产品名称</span>
					</td>
					<td>
						<div class="input-prepend">
							<span class="add-on"><i class="icon-th-large"></i></span>
							<input type="text" name="title">
						</div>
					</td>
				</tr>
				<tr class="error">
					<td>
						<span class="label label-important">产品图片</span>
					</td>
					<td>
						<input type="file" name="photo">
					</td>
				</tr>
					<tr class="info">
					<td colspan="2">
						<input type="hidden" name="type" value="products">
						<input type="submit" class="btn btn-info" style="position: relative; left: 22%;" value="上传">
					</td>
				</tr>
			</table>
		</form>
</body>
</html>