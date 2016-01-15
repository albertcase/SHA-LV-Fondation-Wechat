<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/jquery.zoombie.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/swiper.min.js"></script>
<div class="arr">
	<img src="" sourcesrc="/vstyle/imgs/arr.png" width="100%" />
</div>


<div class="imgInfo workDetailed">
		<a href="javascript:;" class="backBtn">
			返回
		</a>

    	<div class="gallerySlide">
	    	<h1>-</h1>
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
    	</div>

    	<div class="photoInfo">
                <h2>
					作品简介
				</h2>

				<div class="photoInfo_con">
					<!-- Swiper -->
				    <div class="swiper-container">
				        <div class="swiper-wrapper">
				            <div class="swiper-slide" id="g_intro">

					        </div>
					        </div>

					    </div>
				</div>
			
		</div>


    	<div class="introFooter">
    		<a href="javascript:;" class="moreBtn">
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

var infoArr = {
	"e1": "<p><b>曹斐，《陌生人》，2015年， </b></p><p>在《陌生人》中，曹斐——这位在现今国际艺术舞台上崛起的中国新锐艺术家——巧妙运用了可供世界各地素不相识的网友快速虚拟交友的网站，改变了其首要功能。艺术家将其改造成表达艺术语言的工具。 </p><p>她让视频中的对话者大吃一惊，她向他呈现窗前的剪影，摄影机中微笑的佛像，入睡状态的人，甚至直接拍摄于屏幕前的形象。大吃一惊的被动观众将不停地更换频道，更换对话者，以期找到更为行之有效的沟通交流。然而，曹斐的行为令人好奇。</p><p>艺术家以犹如纪录片般的论证口吻评价和揭露一个充满变数的国家的运作和转变，在这个国度，交友有时被纳入了消费范畴。这部影片反映了现今中国社会所承受的快速变化。</p>",
	"e2": "",
	"e3": "",
	"e4": "<p><b>胡向前，《镜头前的女人》，2015年， </b></p><p>胡向前于2007年从广州美术学院毕业，是一位以从现实、流行文化或自己的个人经历汲取灵感表达艺术主张和创作视频而著称的艺术家。他在视频中展现了一位六十多岁的女性随着珊蔻·娜赤娅克（Sainkho Namtchylak）哼唱的《Like Transparent Shadow》翩翩起舞。她在一处广场上挥舞着丝巾，看起来像是一位“广场舞大妈”，广场舞是深受中国年轻人批判的集体活动，因为它看起来就像是一种无意识的群体活动。 </p><p>然而，仔细观看视频会发现，这位女性并非普通的“广场舞大妈”。她的表情和动作皆充满发自内心的真挚情感。她早已忘记公众的存在，因舞蹈而找回自我，如此出众。 </p><p>胡向前乐于表现荒诞不经，有悖常理的现象，擅长体现社会中的对比与矛盾，将微小的末梢细节放大为寓意深刻的社会主基调。对于他而言，最有趣的莫过于隐藏在日常生活平凡表面之下的人生真谛。</p>",
	"e5": "",
	"e6": "",
	"e7": "",
	"e8": "",
	"e9": "<p><b>邱志杰，《地图》，2015年， </b></p><p>自2012年起，邱志杰创作了体现当代社会各种地域、各种事件和各种现象的水墨地图。他在基金会绘制了一幅地图壁画，超越之前一切作品，如二十一世纪地图、乌托邦地图、总体艺术地图、中国历史地图、长江地图。在上述作品中，阡陌纵横，河川九曲回肠，各种联系与关联为我们提供了看待历史的全新视角。地图是艺术家思想活跃的体现，说明他乐于设计出向不同方向拓展的道路。 </p><p>地图属于一种“总体艺术”实践，“总体艺术”是邱志杰于2003年开创的艺术形式，在西方语言中译为“ Art Total”。艺术家认为，艺术创作不可将其历史和文化背景排除在外，因此他并不拘泥于艺术形式，而是将社会学、人类学、哲学、心理学和其他人文学科包括在内。他经常使用“关联艺术”（art connecté）一词，强调艺术属于日常生活的一部分，旨在将个人行为与社会责任联系在一起，邀请观众缔造自己的关系与关联。</p>",
	"e10": "",
	"e11": "",
	"e12": ""
}


var imgProArray = [
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
	    //click:iScrollClick(), //调用判断函数
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
		$(".workDetailed h1").html(curname);
		$("#zoom").attr("src", "/vstyle/imgs/exhibition/big/" + curw + ".jpg").zoombieLens();
		$("#g_intro").html(infoArr["e"+curw]);
	}
}


var swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    slidesPerView: 'auto',
    mousewheelControl: true,
    freeMode: true
});

$(".moreBtn").click(function(){
	$(".photoInfo").show();
	swiper.update();
})





</script>