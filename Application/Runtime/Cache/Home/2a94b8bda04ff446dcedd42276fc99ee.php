<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php echo ($title); ?>">
<meta name="description" content="<?php echo ($title); ?>">
<link href="/Public/Index/Css/bdsstyle.css" rel="stylesheet" type="text/css">
<link href="/Public/Index/Css/common_MD.css" rel="styl   esheet" type="text/css">
<link href="/Public/Index/Css/tags.css" rel="stylesheet" type="text/css">
<link href="/Public/Index/Css/fenzhan.css" rel="stylesheet" type="text/css">
<link href="/Public/Index/Css/index.css" rel="stylesheet" type="text/css">
<link href="/Public/Index/Css/other.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/Public/Index/Js/common.js" ></script>
<script type="text/javascript" src="/Public/Index/Js/tab.js" ></script>
<script type="text/javascript" src="/Public/Index/Js/jquery.js"></script>
<script type ="text/javascript" src="/Public/Index/Js/jcarousellite.min.js"></script>
<script type="text/javascript" src="/Public/Index/Js/lanrentuku.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#cpzsm").jCarouselLite({
btnPrev: "#prev",
btnNext: "#next",
auto: 5000, //图片停留时间
scroll: 3, //每次滚动覆盖的图片个数
speed: 1000, //设置速度，0是不动。其次就是数字越大 ，移动越慢。
vertical: false, //横向（true），竖向（false）
visible: 5, //显示的数量
circular: true //是否循环
});
});
</script>
<script charset="utf-8" src="/Public/Index/Js/v.js"></script>
<script src="/Public/Index/Js/logger.js">
</script><link href="/Public/Index/Css/bdsstyle(1).css" rel="stylesheet" type="text/css">
</head>
    <body><iframe frameborder="0" style="display: none;"></iframe>
        <div class="container">
            <div class="top">
                <div class="logo_box">
                    <div style="height:92px;">
                        <img src="/Public/Index/Images/2.png" alt="" width="485" height="92">
                    </div>
                </div>
            </div>
            <div class="banenr">
                <div id="imgPlay" style="z-index: -999;">
                    <object type="application/x-shockwave-flash" data="http://www.xiaomaodxdl.com/Skins/chp028/Content/Object/bcastr4.swf?xml=%20%20%20%20%20%20%20%20%3Cdata%3E%20%20%20%20%20%20%20%20%3Cchannel%3E%20%20%20%20%20%20%20%20%3Citem%3E%20%20%20%20%20%20%20%20%3Clink%3E%3C/link%3E%20%20%20%20%20%20%20%20%3Cimage%3Ehttp://<?php echo $_SERVER['HTTP_HOST'];?>/Public/Uploads/<?php echo ($web_infos["9"]["value"]); ?>%3C/image%3E%20%20%20%20%20%20%20%20%3Ctitle%3E%3C/title%3E%20%20%20%20%20%20%20%20%3C/item%3E%20%20%20%20%20%20%20%20%3Citem%3E%20%20%20%20%20%20%20%20%3Clink%3E%3C/link%3E%20%20%20%20%20%20%20%20%3Cimage%3Ehttp://<?php echo $_SERVER['HTTP_HOST'];?>/Public/Uploads/<?php echo ($web_infos["10"]["value"]); ?>%3C/image%3E%20%20%20%20%20%20%20%20%3Ctitle%3E%3C/title%3E%20%20%20%20%20%20%20%20%3C/item%3E%20%20%20%20%20%20%20%20%3Citem%3E%20%20%20%20%20%20%20%20%3Clink%3E%3C/link%3E%20%20%20%20%20%20%20%20%3Cimage%3Ehttp://<?php echo $_SERVER['HTTP_HOST'];?>/Public/Uploads/<?php echo ($web_infos["11"]["value"]); ?>%3C/image%3E%20%20%20%20%20%20%20%20%3Ctitle%3E%3C/title%3E%20%20%20%20%20%20%20%20%3C/item%3E%20%20%20%20%20%20%20%20%3C/channel%3E%20%20%20%20%20%20%20%20%3C/data%3E" height="350" width="100%" id="vcastr3">
                    <param name="movie" value="/Skins/chp028/Content/Object/bcastr4.swf?xml=
                    &lt;data&gt;
                    &lt;channel&gt;
                    &lt;item&gt;
                    &lt;link&gt;&lt;/link&gt;
                    &lt;image&gt;http://<?php echo $_SERVER['HTTP_HOST'];?>/Public/Uploads/<?php echo ($web_infos["9"]["value"]); ?>&lt;/image&gt;
                    &lt;title&gt;&lt;/title&gt;
                    &lt;/item&gt;
                    &lt;item&gt;
                    &lt;link&gt;&lt;/link&gt;
                    &lt;image&gt;http://<?php echo $_SERVER['HTTP_HOST'];?>/Public/Uploads/<?php echo ($web_infos["10"]["value"]); ?>&lt;/image&gt;
                    &lt;title&gt;&lt;/title&gt;
                    &lt;/item&gt;
                    &lt;item&gt;
                    &lt;link&gt;&lt;/link&gt;
                    &lt;image&gt;http://<?php echo $_SERVER['HTTP_HOST'];?>/Public/Uploads/<?php echo ($web_infos["11"]["value"]); ?>&lt;/image&gt;
                    &lt;title&gt;&lt;/title&gt;
                    &lt;/item&gt;
                    &lt;/channel&gt;
                    &lt;/data&gt;
                    ">
                    <param name="wmode" value="Opaque">
                    </object>
                </div>
            </div>
        </div>
        <div class="center">
            <div class="center_left">
            </div>
            <div class="center_middle">
                <div class="left">
                    <div class="products">
                        <h2>
                        公司简介</h2>
                        <ul>
                            <li>
                                <?php echo ($web_infos["8"]["value"]); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="lxwm">
                        <div style="font-family: Verdana, Arial, Helvetica, sans-serif; color: rgb(80, 80, 80); ">&nbsp;
                            <h3><?php echo ($web_infos["1"]["value"]); ?></h3>
                            <br>业务主管：<?php echo ($web_infos["2"]["value"]); ?><br>电&nbsp;&nbsp;&nbsp;&nbsp;话：<?php echo ($web_infos["3"]["value"]); ?>
                        </div>
                        <div style="font-family: Verdana, Arial, Helvetica, sans-serif; color: rgb(80, 80, 80); ">
                        传&nbsp;&nbsp;&nbsp;&nbsp;真：<?php echo ($web_infos["4"]["value"]); ?>
                        <br>
                        Q&nbsp;&nbsp;&nbsp;&nbsp;Q：<?php echo ($web_infos["5"]["value"]); ?>
                        <br>
                        邮&nbsp;&nbsp;&nbsp;&nbsp;编：<?php echo ($web_infos["6"]["value"]); ?>
                        <br>
                        <a href="#" target="_blank" title="厂">厂</a>&nbsp;&nbsp;&nbsp;&nbsp;址：<?php echo ($web_infos["7"]["value"]); ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="right">
                    <div class="">
                        <h2 class="h_two">
                        <span>
                        <!--当前位置 end--></span>汇海恒科技产品</h2>
                        <div class="cont">
                            <div class="MD">
                                <ul style="width: auto; padding-left: 25px; padding-top: 10px; padding-bottom: 10px">
                                    深圳市汇海恒科技有限公司,欢迎你光临到此
                                </ul>
                            </div>
                    <ul class="pro_xl" style="padding-top: 5px;">
                        <?php if(is_array($products)): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product): $mod = ($i % 2 );++$i;?><li><a href="#">
                                <img src="/Public/Uploads/<?php echo ($product["picture"]); ?>" alt="<?php echo ($product["title"]); ?>"></a>
                                <p><?php echo ($product["title"]); ?></p>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
<div style="clear: both;">
</div>
<div class="page">

<?php if(!empty($page)): ?><div class="alert alert-info test"><?php echo ($page); ?></div><?php endif; ?>
</div>
<div class="clear">
</div>

<div class="relation" id="i_relation">
<form action="<?php echo U('Home/Index/message');?>">
<ul>
<a href=""> <span class="relation-X" id="relation-X"></span></a>
<h2>留言</h2>
<li><label for="">姓名：</label><input type="text" name="name" /></li>
<li><label for="">手机：</label><input type="text" name="mobile" /></li>
<li><label for="">QQ：</label><input type="text" name="qq" /></li>
<li><label for="">留言：</label><textarea name="content" id=""></textarea></li>
<li class="submit-input"><input type="submit" value="提交" /></li>
</ul>
</form>
</div>
<!-- Baidu Button BEGIN -->
<script type="text/javascript">
document.getElementById("relation-X").onclick = function() {
document.getElementById("i_relation").style.display="none";
return false;
}
</script>
<!-- Baidu Button END --></body></html>