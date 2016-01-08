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
    	
    	<div class="page photo" colorify-lazy-reveal id="home">

    		<ul>
    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="1" data-name="CAO Fei <br /> Live in RMB City"></a>
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="2" data-name="CAO Fei <br /> RMB CITY a second life city planning"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/collection/c1.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
    					<div class="lileft">
		    				<a href="javascript:;" onclick="detailedFun(this)" data-id="3" data-name="HUANG Yongping <br /> L'arc de saint gilles"></a>
		    				<a href="javascript:;" onclick="detailedFun(this)" data-id="5" data-name="Isaac Julien <br /> Ten Thousand Waves"></a>
		    			</div>
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="4" data-name="HUANG Yongping <br /> 50 bras de buddhag"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/collection/c2.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="7" data-name="XU Zhen <br /> New"></a>
	    				<div class="lileft">
		    				<a href="javascript:;" onclick="detailedFun(this)" data-id="6" data-name="TAO Hui <br /> The Dusk of Teheran"></a>
		    				<a href="javascript:;" onclick="detailedFun(this)" data-id="8" data-name="YAN Peiming <br /> All Crows Under the Sun are Black"></a>
		    			</div>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/collection/c3.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="9" data-name="YANG Fudong <br /> The colored sky"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/collection/c4.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="10" data-name="ZHANG Huan <br /> Great leap forward"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/collection/c5.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="11" data-name="ZHANG Huan <br /> Long island Buddha"></a>
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="12" data-name="ZHANG Huan <br /> Sudden Awakening"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/collection/c6.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="13" data-name="ZHANG Huan <br /> National Day"></a>
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="14" data-name="ZHANG Xiaogang <br /> My Ideal Job"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/collection/c7.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="15" data-name="ZHOU Tao <br /> Chiken speaks to duck, pig speaks to dog 02"></a>
	    				<a href="javascript:;" onclick="detailedFun(this)" data-id="16" data-name="ZHOU Tao <br /> One Two Three Four"></a>
	    			</div>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/collection/c8.jpg" width="100%" />
    			</li>
    			
    		</ul>
			
		</div>

	</div>
</div>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/colorify.js"></script>


<script type="text/javascript">

var imgProArray = [
	"/vstyle/imgs/logo.jpg",
	"/vstyle/imgs/collection/c1.jpg",
	"/vstyle/imgs/collection/c2.jpg",
	"/vstyle/imgs/collection/c3.jpg",
	"/vstyle/imgs/collection/c4.jpg",
	"/vstyle/imgs/collection/c5.jpg",
	"/vstyle/imgs/collection/c6.jpg",
	"/vstyle/imgs/collection/c7.jpg",
	"/vstyle/imgs/collection/c8.jpg",
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
	workPic.src = "/vstyle/imgs/collection/big/" + curw + ".jpg";
	workPic.onload = function(){
		$(".imgInfo").fadeIn();
		$(".workDetailed h2").html(curname);
		$("#zoom").attr("src", "/vstyle/imgs/collection/big/" + curw + ".jpg").zoombieLens();
	}
}







</script>