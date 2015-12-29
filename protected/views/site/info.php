
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/jquery.zoombie.js"></script>


<script type="text/javascript" language="javascript">
$(function () {

    $("#zoom").zoombieLens();
    
}); 
</script>

<div id="wrapp">
    <div id="scroller">

    	<div class="zoomArea">
    		<img id="zoom" src="/vstyle/imgs/place.jpg" width='100%' />
    	</div>
    	

	</div>
</div>




<script type="text/javascript">

var myScroll = new IScroll('#wrapp', { 
	    preventDefault:false,
	    //click:iScrollClick(), //调用判断函数
	    scrollbars: false, //有滚动条
	    fixedScrollbar: false,
	    // momentum: true,
	    //useTransition: true
	});


</script>