<!DOCTYPE HTML>
<html>
<head>
	<title>路易威登基金会</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="format-detection" content="telephone=no">
	<!--禁用手机号码链接(for iPhone)-->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimum-scale=1.0,maximum-scale=1.0,minimal-ui" />
	<!--自适应设备宽度-->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!--控制全屏时顶部状态栏的外，默认白色-->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="Keywords" content="">
	<meta name="Description" content="...">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/css/swiper.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/css/style.css" />

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/jweixin.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/PxLoader.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/iscroll.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/public.js"></script>
    <script type="text/javascript">
    	var baseUrl = "<?php echo Yii::app()->request->baseUrl; ?>";
    </script>

</head>
<body>
	<div id="header">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/imgs/logo.jpg" width="100%" />
	</div>

	<?php echo $content; ?>


<!-- 横屏代码 -->
<div id="orientLayer" class="mod-orient-layer">
    <div class="mod-orient-layer__content">
        <i class="icon mod-orient-layer__icon-orient"></i>
        <div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
    </div>
</div>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/share.js"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71857298-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>

