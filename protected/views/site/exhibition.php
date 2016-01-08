<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/jquery.zoombie.js"></script>

<div class="arr">
	<img src="" sourcesrc="/vstyle/imgs/arr.png" width="100%" />
</div>


<div class="imgInfo workDetailed">
		<a href="javascript:;" class="backBtn">
			返回
		</a>

    	<h2>-</h2>
    	<div class="zoomArea">
    		<img id="zoom" src="" sourcesrc="/vstyle/imgs/place.jpg" width='100%' />
    		<div class="zoomStatus">
    			<img src="" sourcesrc="/vstyle/imgs/fdjIco.png" width='100%' />
    		</div>

    		<a href="javascript:;" class="narrowIcon">
    			<img src="" sourcesrc="/vstyle/imgs/narrowIcon.png" width='100%' />
    		</a>
    	</div>

    	<div class="zoomtips">
    		<img src="" sourcesrc="/vstyle/imgs/zoomtips.png" />
    	</div>
    	<div class="introFooter">
    		<a href="javascript:;">
    			<img src="" sourcesrc="/vstyle/imgs/moreBtn.png" />
    		</a>
    	</div>

	</div>


<div id="wrapp">
    <div id="scroller">
    	
    	<div class="page photo" colorify-lazy-reveal id="exhibition">

    		<ul>
    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="1" data-name="CAO Fei <br /> Strangers"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/exhibition/e1.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
    					<a href="javascript:;" onclick="detailedFun(this)" data-id="2" data-name="HAO Liang <br /> The Virtuose Being"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/exhibition/e2.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="3" data-name="HU Xiangqian <br /> Speech at the edge of the world"></a>
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="4" data-name="HU Xiangqian <br /> The woman in front of the camera"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/exhibition/e3.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="5" data-name="LIU Chuang <br /> BBR"></a>
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="6" data-name="LIU Shiyuan <br /> From Happiness to Whatever"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/exhibition/e4.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="7" data-name="LIU Wei <br /> Purple Air"></a>
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="8" data-name="LIU Xiaodong <br /> Bent Rib"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/exhibition/e5.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
    					<div class="lileft">
    						<a href="javascript:;" onclick="detailedFun(this)" data-id="9" data-name="QIU Zhijie <br /> Map of the Third World"></a>
	    					<a href="javascript:;" onclick="detailedFun(this)" data-id="10" data-name="XU-Qu-Currency <br /> Wars-Low"></a>
    					</div>
    					<div class="liright">
    						<a href="javascript:;" onclick="detailedFun(this)" data-id="11" data-name="TAO Hui <br /> 1 Character & 7 Materials"></a>
	    					<a href="javascript:;" onclick="detailedFun(this)" data-id="12" data-name="XU Zhen <br /> Physique of Consciousness"></a>
    					</div>
	    				
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/exhibition/e6.jpg" width="100%" />
    			</li>

    		</ul>
			
		</div>

	</div>
</div>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/colorify.js"></script>


<script type="text/javascript">

var imgProArray = [
	"/vstyle/imgs/logo.jpg",
	"/vstyle/imgs/exhibition/e1.jpg",
	"/vstyle/imgs/exhibition/e2.jpg",
	"/vstyle/imgs/exhibition/e3.jpg",
	"/vstyle/imgs/exhibition/e4.jpg",
	"/vstyle/imgs/exhibition/e5.jpg",
	"/vstyle/imgs/exhibition/e6.jpg"
];


 // 当图片加载完成之后在添加进入页面            
LoadFn(imgProArray , function (){
	$("img").each(function(){ 
            $(this).attr("src",$(this).attr("sourcesrc"));
    })

	colorify({
	  container: 'colorify-lazy-reveal',
	  attr: 'colorify', 
	  accuracy: 20,
	  color: true,
	  gradient: true,
	  gradientDirection: 'to top right',
	  lazyReveal: {
	   transition: 1.6, 
	   delay: 0.4,
	   steps: true
	  }
	});

	var myScroll = new IScroll('#wrapp', { 
	    preventDefault:false,
	    click:iScrollClick(), //调用判断函数
	    scrollbars: false, //有滚动条
	    fixedScrollbar: true,
	    momentum: true,
	    useTransition: true
	});
       
} , function (p){
    console.log(p+"%");
});



function detailedFun(obj){
	var curw = obj.getAttribute("data-id");
	var curname = obj.getAttribute("data-name");
	var workPic = new Image();
	workPic.src = "/vstyle/imgs/exhibition/big/" + curw + ".jpg";
	workPic.onload = function(){
		$(".imgInfo").fadeIn();
		$(".workDetailed h2").html(curname);
		$("#zoom").attr("src", "/vstyle/imgs/exhibition/big/" + curw + ".jpg").zoombieLens();
	}
}







</script>