<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/swiper.min.js"></script>
<div class="arr">
	<img src="" sourcesrc="/vstyle/imgs/arr.png" width="100%" />
</div>


<div class="imgInfo workDetailed gallery_info">
		<a href="javascript:;" class="backBtn">
			返回
		</a>

		<div class="gallerySlide">

		    <div class="bShowImg">
		           <img src="" id="galleryPhoto" />
		    </div>

		</div>

		<div class="photoInfo">
		                <h2>
							作品简介
						</h2>

						<div class="photoInfo_con" id="g_intro">
	
						</div>
			
		</div>

    	<div class="introFooter">
    		<a href="javascript:;" class="moreBtn">
    			<span>更多<br />信息</span>
    			<img src="" sourcesrc="/vstyle/imgs/moreBtn.png" />
    		</a>
    	</div>

	</div>


<div id="wrapp">
    <div id="scroller">
    	
    	<div class="page gallery" colorify-lazy-reveal id="home">

    		<ul>
    			<li>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/commande/g1.jpg" width="100%" />
    			</li>

    			<li>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/commande/g2.jpg" width="100%" />
    			</li>

    			<li>
	    			<img colorify src="" sourcesrc="/vstyle/imgs/commande/g3.jpg" width="100%" />
    			</li>

    			<li>
	    				<img colorify src="" sourcesrc="/vstyle/imgs/commande/g4.jpg" width="100%" />
    			</li>
    		</ul>
			
		</div>

	</div>
</div>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vstyle/js/colorify.js"></script>


<script type="text/javascript">
var shareData = {
        title: '探索路易威登基金会尊享藏品，对话弗兰克·盖里立梦建筑”',
        desc: '探索路易威登基金会尊享藏品，对话弗兰克·盖里立梦建筑”',
        link: window.location.host + "/site/commande",
        imgUrl: 'http://' + window.location.host + '/vstyle/imgs/commande_share.jpg'
};


var infoArr = {
	"g0": "<p>这件雕塑作品的题目，“奴隶生活的地方”（Where the Slaves Live），源自“ vernaculaire ”（“乡土”）的拉丁语词根“ verna ”（意为“奴隶”）。这件作品的外形颇为神秘，好似蓄水池，这也是安德里昂·维拉尔·若加斯（Adrian Villar Rojas）惯用的题材。带着一种超越时间的奇艺色彩，这件作品被设计成一个着陆在地球上的“小小星球”，不着痕迹地将考古学与科幻合为一体。</p><p>“奴隶生活的地方”由若干层来自世界各地的有机和无机材料（泥土、颜料、植物、蔬菜、石头、炭渣、水泥、青草、化石、珊瑚、面包、水果、衣物、鞋履等）构 成，堪称是一件“活的雕塑”，随着时间的流转而不断变化。在这个生态系统中，艺术家在雕塑中嵌入了个人痕迹，令人不禁想到人类的存在。人类成为大自然及其 演化不可分割的部分，和大自然一道经历着从未停止过的嬗变。</p>",
	"g1": "<p>这件声音雕塑运用有形与无形，将手工技艺与数字工具相结合，由 20 根透明的玻璃笛子组成，笛子又由长长的管子延续至一个保留了原貌的风箱。这些笛子 形成悬空的椭圆，在不同的高度层层排列，每一根笛子按照艺术家呼应建筑结构所创作的乐曲奏响一个音调。不断振动的音轨交错相交。</p><p>赛瑞斯·维恩·埃文斯（Cerith Wyn Evans，1958 年，英国）在伦敦生活和工作。</p>",
	"g2": "<p>艾尔华斯·凯利（Ellsworth Kelly），国际艺术舞台最重要的角色之一，完成了一次独有、全面和永久的参与。黄色、红色、蓝色、绿色和紫色，5 个搭配舞台幕布的单色板在空间中营造 出纯净而跳跃的色调。由 12 快板构成的幕布与缤纷的色彩相映成趣。这件作品是凯利以自己的大型系列绘画“ Spectrum ”为素材而创作的，该系列的第一 幅画作于 1953 年在巴黎完成。作品的设计构思与弗兰克·盖里（Frank Gehry）的建筑交相呼应，灵活运用线条、体积和尺寸突出展示了建筑物的结构。艺术、建筑与音乐在演播厅里互动共鸣，缔造了一次绝无仅有的体验。 </p>",
	"g3": "<p>埃利亚松的作品好似一只沿着池塘边岩洞走廊的巨型万花筒，由 43 根粗细不一的三角棱柱组成。明亮的内部两面覆盖镜面，第三面覆盖黄色吹制玻璃镶嵌画。漫步于其中的来宾进入了一个无穷无尽的投影游戏。</p><p>奥拉弗尔·埃利亚松（Olafur Eliasson）在哥本哈根和柏林生活和工作。</p>"
}


var imgProArray = [
	"/vstyle/imgs/commande/g1.jpg",
	"/vstyle/imgs/commande/g2.jpg",
	"/vstyle/imgs/commande/g3.jpg",
	"/vstyle/imgs/commande/g4.jpg"
];


 // 当图片加载完成之后在添加进入页面            
LoadFn(imgProArray , function (){
	$("img").each(function(){ 
            $(this).attr("src",$(this).attr("sourcesrc"));
    })

    $("#home").show();

	colorify({
	  container: 'colorify-lazy-reveal',
	  attr: 'colorify', 
	  accuracy: 20,
	  color: true,
	  gradient: true,
	  gradientDirection: 'to top right',
	  lazyReveal: {
	   transition: 0.6, 
	   delay: 0.3,
	   steps: true
	  }
	});

	var myScroll = new IScroll('#wrapp', { 
	    preventDefault:false,
	    scrollbars: false, //有滚动条
	    fixedScrollbar: true,
	    momentum: true,
	    useTransition: true
	});
       
} , function (p){
    console.log(p+"%");
});



var swiper;
$(".gallery li").click(function(){
	swiper = null;
	var curIndex = $(this).index(),
		curImgSrc = $(this).find("img").attr("src");
	$("#galleryPhoto").attr("src", curImgSrc);
	$(".imgInfo").show();

	$("#g_intro").html('<div class="swiper-container"><div class="swiper-wrapper"><div class="swiper-slide">'+infoArr["g"+curIndex]+'</div></div></div>');	
	
})


$(".backBtn").click(function(){
	if($(".photoInfo").is(":hidden")){
		$(".imgInfo").hide();
	}else{
		$(".photoInfo").hide();
	}   
})


$(".moreBtn").click(function(){
	$(".photoInfo").fadeIn();
	
	swiper = new Swiper('.swiper-container', {
	    direction: 'vertical',
	    slidesPerView: 'auto',
	    autoHeight: 'true'
	});
	
	swiper.update();
})

</script>