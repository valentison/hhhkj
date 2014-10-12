<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台系统</title>
<link href="style/authority/basic_layout.css" rel="stylesheet" type="text/css">
<link href="style/authority/common_style.css" rel="stylesheet" type="text/css">
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
</head>

<body>
    <form class="form-horizontal" action="" method="post">
    <br>
    <div class="alert alert-info">
      <strong>网站信息</strong>
    </div>
    <div class="alert alert-info">
        <div class="control-group">
            <label class="control-label" for="inputEmail">网站标题</label>
            <div class="controls">
                <input type="text" name="title" value="<?php echo ($info["0"]["value"]); ?>" placeholder="网站标题">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputEmail">公司名称</label>
            <div class="controls">
                <input type="text" name="name" value="<?php echo ($info["1"]["value"]); ?>" placeholder="公司名称">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">主管</label>
            <div class="controls">
                <input type="text" name="manager" value="<?php echo ($info["2"]["value"]); ?>" placeholder="主管">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">电话</label>
            <div class="controls">
                <input type="text" name="tel" value="<?php echo ($info["3"]["value"]); ?>" placeholder="电话">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">传真</label>
            <div class="controls">
                <input type="text" name="fax" value="<?php echo ($info["4"]["value"]); ?>" placeholder="传真">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">QQ</label>
            <div class="controls">
                <input type="text" name="qq" value="<?php echo ($info["5"]["value"]); ?>" placeholder="QQ">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">邮编</label>
            <div class="controls">
                <input type="text" name="zipcode" value="<?php echo ($info["6"]["value"]); ?>" placeholder="邮编">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">厂址</label>
            <div class="controls">
                <input type="text" name="address" value="<?php echo ($info["7"]["value"]); ?>" placeholder="厂址">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">公司简介</label>
            <div class="controls">
                <textarea name="introduce" rows="4" placeholder="公司简介"><?php echo ($info["8"]["value"]); ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-primary">修改</button>
            </div>
        </div>
    </form>
</body>
</html>