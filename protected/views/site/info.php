
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/jquery.zoombie.js"></script>


<script type="text/javascript" language="javascript">
var worksInfo = {
	"1":{
		"name": "CAO Fei <br /> Live in RMB City"
	},
	"2":{
		"name": "CAO Fei <br /> RMB CITY a second life city planning"
	},
	"3":{
		"name": "HUANG Yongping <br /> L'arc de saint gilles"
	},
	"4":{
		"name": "HUANG Yongping <br /> 50 bras de buddhag"
	},
	"5":{
		"name": "Isaac Julien <br /> Ten Thousand Waves"
	},
	"6":{
		"name": "TAO Hui <br /> The Dusk of Teheran"
	},
	"7":{
		"name": "XU Zhen <br /> New"
	},
	"8":{
		"name": "YAN Peiming <br /> All Crows Under the Sun are Black"
	},
	"9":{
		"name": "YANG Fudong <br /> The colored sky"
	},
	"10":{
		"name": "ZHANG Huan <br /> Great leap forward"
	},
	"11":{
		"name": "ZHANG Huan <br /> Long island Buddha"
	},
	"12":{
		"name": "ZHANG Huan <br /> Sudden Awakening"
	},
	"13":{
		"name": "ZHANG Huan <br /> National Day"
	},
	"14":{
		"name": "ZHANG Xiaogang <br /> My Ideal Job"
	},
	"15":{
		"name": "ZHOU Tao <br /> Chiken speaks to duck, pig speaks to dog 02"
	},
	"16":{
		"name": "ZHOU Tao <br /> One Two Three Four"
	}
}


$(function () {

    $("#zoom").zoombieLens();
    
}); 
</script>

<div id="wrapp">
    <div id="scroller">
    	<div class="imgInfo">
	    	<h2>杨福东<br />New Women II, 2015 </h2>
	    	<div class="zoomArea">
	    		<img id="zoom" src="/vstyle/imgs/place.jpg" width='100%' />
	    		<div class="zoomStatus">
	    			<img src="/vstyle/imgs/fdjIco.png" width='100%' />
	    		</div>
	    	</div>

	    	<div class="zoomtips">
	    		<img src="/vstyle/imgs/zoomtips.png" />
	    	</div>
	    	<div class="introFooter">
	    		<a href="javascript:;">
	    			<img src="/vstyle/imgs/moreBtn.png" />
	    		</a>
	    	</div>

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