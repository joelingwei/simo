<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<meta name="keywords" content="思陌,思陌广告,企业形象,企业形象定制,微电影,思陌官方网站,成都思陌,成都思陌广告有限责任公司"/>
		<meta name="description" content="成都思陌广告有限责任公司是一家从事企业形象定制的专业机构。"/>

		<title>思陌广告</title>
		<link rel="shortcut icon" href="/Public/style/images/logo.ico" type="image/x-icon">
		<link rel="stylesheet" href="/Public/style/css/pro.css" type="text/css" />
		<script language="javascript"> document.oncontextmenu=function(){return false} </script>
		<script>
			var _hmt = _hmt || [];
			(function() {
			  var hm = document.createElement("script");
			  hm.src = "https://hm.baidu.com/hm.js?034f5b27098691b302ec9e4ea02f1c5e";
			  var s = document.getElementsByTagName("script")[0]; 
			  s.parentNode.insertBefore(hm, s);
			})();
		</script>
		<div id='wx_pic' style='margin:0 auto;display:none;'>
			<img src='/Public/style/images/share.jpg' />
		</div>
	</head>
<body>
	<div id="header">
	<div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/Public/style/images/simo_logo_header.png" /></a></div>
	<div class="nav">
		<ul class="navlist">
			<li class="<?php echo ($ui["c"]); ?>"><a href="<?php echo U('Index/commercial');?>" title="商业相关">commercial</a></li>
			<li class="<?php echo ($ui["m"]); ?>" style="width:21%;"><a href="<?php echo U('Index/movie');?>" title="影视相关">movie</a></li>
			<li class="<?php echo ($ui["a"]); ?>" style="width:21%;"><a href="<?php echo U('Index/about');?>" title="自在思陌">about</a></li>
			<li class="<?php echo ($ui["co"]); ?>" style="width:21%;"><a href="<?php echo U('Index/contact');?>" title="往来思陌">contact</a></li>
		</ul>
	</div>
</div>
<!-- <script type="text/javascript" src="/Public/style/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
	$(".navlist li a").click(function(){
	    $(".navlist li").removeClass("bg");
	    $(this).parent().addClass("bg");
	})
</script> -->
	<div id="main">
		<div class="fjx"></div>
		<div class="nr">
			<div class="about"> ABOUT US</div>
			<div class="us">
				 <?php echo ($ab["count"]); ?>
			</div>
		</div>
	</div>
	<div id="footer">
	Copyright © 2016 <a href="http://www.simo-ad.com/" style="color:#B9ABA3;">Simo.</a> All rights reserved.
</div>
</body>
</html>