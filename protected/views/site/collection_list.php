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

var infoArr = {
	"c1": "<p><b>艾未未，《树》，2010年</b></p><p>这棵大树巍峨高耸（高7米），树冠庞大，仿佛运至展厅时就是如此。然而，仔细观察会发现，这棵大树是由从中国南方山区搜集以及由艺术家在江西省景德镇市场上购买而来的枯树干和枯树枝组装而成的。这件作品由细木工匠耗费长时间采用传统工艺精心制作而成，暗喻当代中国的现状：一个看起来统一的民族国家，实际上由拥有不同语言、文化和宗教传统的五十多个民族构成，其中一些民族时至今日还在争取独立。<br />艾未未通过这一简单意象，提出了如何看待现今中国国家和民族身份的问题，也可被诠释为一种对未来充满希望的讯息，预示着根植于过去，化腐朽为神奇，尽可能缔造一个全新的中国。</p>",
	"c2": "<p><b>曹斐，《人民城寨：“第二人生”（Second Life）城市规划项目》，2007年，</b></p><p>“人民城寨”（RMB City）是艺术家曹斐在“第二人生”（Second Life）虚拟平台上设计的城市名称，“第二人生”虚拟平台让她得以探索一切可能。“人民城寨”的设计犹如实验室，从不同艺术家和合作者的项目中汲取养分。 </p><p>视频向我们展示了这座城市中空无一人的建筑综合体。每座建筑都具有一种功能，一个现实世界的参照物，及其相互之间的关联性，北京的人民英雄纪念碑顶上安装了一个自行车轮，状如巨大的观光摩天轮。曹斐喜欢玩味中国社会的特色元素，并将其与消费和大众流行文化理念相结合。她诙谐戏谑的方式模拟出没有任何具体意义，仅仅以经过篡改的象征符号为基础的未来大都会，</p><p>与现实世界平行的“人民城寨”生活，让她得以体现中国社会的演进与发展。</p>",
	"c3": "<p><b>黄永砯，《圣吉尔之弓》，2015年，</b></p><p>《圣吉尔之弓》表现了源自雅各·德·佛拉金（Jacques de Voragine）创作的《黄金传说》（La légende dorée）（1261年至1266年之间撰写）中关于圣吉尔（Saint-Gilles）隐修士事迹的所有构成元素。被一分为二的动物标本，犹如人类以残暴手法杀死在祭坛上的牺牲品，黄永砯以此诠释人类的原始天性。而使用金箔则体现极具西方特色的中世纪绘画传统。弓箭是猎人（国王：世俗权力的象征）手中的暴力工具，从亚洲文化汲取灵感。</p><p>这座雕塑作品让参观者得以在周围四处查看，极具动感与震撼力，无论从任何角度欣赏皆能获得截然不同的感觉。 </p><p>黄永砯将神学作品主题与东、西方文化元素相糅合，质疑并探讨当代世界，这个变化万千，拥有不同视角和观点的社会。</p>",
	"c4": "<p><b>黄永砯，《50佛手》，1997-2013年， </b></p><p>《50佛手》在一个金属架构上放置了以塑料和聚酯制作的假手，每只手上通常都拿着一件物品。这件作品是法籍华裔艺术家黄永砯历经16年的反思与努力的呕心之作，其灵感源于其个人经历。</p><p>在前往（德国慕尼黑）圣吕克（Saint Luc）东正教堂时，艺术家被一个带耶稣像的十字架所吸引，在这个十字架上的耶稣缺少手臂，而说明文字这样写道：“我所有的，不过是你的双手。”这位艺术家由此深受启发，创作了一系列大小各异的装置，在一个架构上安放了许多佛手，架构形如传统酒瓶架，令人想起马塞尔·杜尚（Marcel Duchamp）（1914年）设计的酒瓶架。 </p><p>源自亚洲绘画艺术的佛像，揭示了所谓的“无形无色者，是为无相”，象征着瞬息万变的大千世界。而酒瓶架本身则是西方文化的化身，对于艺术家而言具有重要意义。在他的作品中，黄永砯让亚洲艺术对话西方艺术，探寻文化身份和文化交融的理念。</p>",
	"c5": "<p><b>伊萨克·朱利恩（ISAAC JULIEN），《浪》（Ten thousand waves），2010年</b></p><p>《浪》（Ten thousand waves）是以充满诗意的方式将当代中国文化与古老传说相糅合的视频装置，目前正在世界各地巡展。英国艺术家伊萨克·朱利恩从2004年发生在英国莫克姆湾（Baie de Morecambe）的“拾贝惨案”获得启发。在这场惨案中，二十多位中国非法劳工在拾贝时被迅速上涨的海潮所淹没，命殒异国他乡。这让他联想到了中国福建省所崇拜的妈祖女神，而福建恰恰是莫克姆湾拾贝惨案中遇难者的故乡。 </p><p>伊萨克·朱利恩让由置身于当代上海的女星张曼玉所扮演的妈祖女神，与纸醉金迷的“十里洋场”以及引人深思的中国风景交替出现。 </p><p>这位艺术家试图从社会、心理学和伦理道德的角度解读这场惨案，激发公众探讨全球化和后殖民时代问题。</p>",
	"c6": "<p><b>陶辉，《德黑兰的黄昏》，2014年，</b></p><p>《德黑兰的黄昏》是由一位端坐在汽车后座的女性念出的一段引人深思的独白。这部作品巧妙地将虚拟和现实相糅合，从香港歌星梅艳芳与歌迷之间真挚感人的对白汲取灵感。在这位歌星去世前一个月，她身穿婚纱站在舞台上，与听众分享自己的难圆之梦。</p><p>陶辉将这一场景转换至另一背景之下，由一位伊朗女演员在极为私密的空间中重新演绎梅艳芳的对白，与司机的沉默寡言形成鲜明对比。 </p><p>这部作品由艺术家在德黑兰居住期间创作，在缅怀已逝世的香港歌星梅艳芳的同时，探讨在那些传统家庭模式一成不变的国家中女性的地位。艺术家由此令伊朗和香港形成类比，在伊朗，女性结婚必须承受巨大的压力；而在香港，女性知道如何从保守的社会观念中解脱出来，追求自己想要的生活。从更为全面的视角看来，《德黑兰的黄昏》对极权政府统治下的个人自由进行探讨。</p>",
	"c7": "<p><b>徐震，《新》，2013年，</b></p><p>这幅七彩作品体现了头戴王冠的观音形象，象征着观音在极乐世界中的尊贵地位。这尊立像脚踏一朵祥云，采用不锈钢制作，高达4米多。观音的衣纹褶皱和脚踏的祥云造型采用了明代（十三至十六世纪）“中国白”，即德化白瓷观音像的风格特色。 </p><p>彩虹七色在西方是和平与同性恋文化的象征，而在这件作品中，其所体现的市场营销意图远远超过精神意境，旨在吸引参观者的目光。徐震的这种“挑衅艺术”可被视为中国波普艺术的一种形式。 </p><p>艺术家藉此探讨中国新社会的发展，在此过程中，宗教信仰的回归与大众消费社会的出现并存。</p>",
	"c8": "<p><b>严培明，《天下乌鸦一般黑》，2012年，</b></p><p>严培明以创作黑白肖像画而著称，他从戈雅（Goya）的作品汲取灵感，从自己的角度探讨人性的阴暗面，向我们展示了一幅世界末日般的场景。这件作品以一句中国谚语为题，“天下乌鸦一般黑”的意思是“无论来自何处，每个人都是相似的”。 </p><p>严培明以深沉而阴暗的灰色调，将新闻实事、希腊经济危机以及历史相结合，向我们展现了对未来的悲观看法。位于画作中央，被视为西方民主与文明摇篮的雅典卫城看起来受到了威胁。乌鸦象征着死亡，也渲染出大屠杀的意境。艺术家激发我们探讨即将发生的惨剧，质疑我们身为个人该如何应对时代变换的能力。 </p><p>与其说是专注于独特题材的再现，不如说是探讨和质疑我们的历史。他通过绘画的方式，展现了事件与艺术家视角之间所存在的空间。 </p>",
	"c9": "<p><b>杨福东，《今晚的月亮》，2000年，</b></p><p>参观者可在这一视频装置之间随意走动穿行，这一视频装置由二十多个小屏幕构成了一张大屏幕，两侧还分别设有三台显示器。被显示器环绕的参观者，被一组音响以及梦幻而感性的画面所包围。他向参观者展现了苏州园林，在中国文化中以自然之美体现玄学的重要性。 </p><p>在这一装置中，杨福东希望展现他对理想与梦想的看法，氛围看似和谐柔美，但这种理想与当代元素相遇之后，产生了令人不安的不和谐感。他的作品诠释了文革之后出生的新一代所面临的挑战与焦虑，他们试图在一个瞬息万变的社会中，在传统与现代之间找到自己的位置。</p>",
	"c10": "<p><strong>张洹，《大跃进》，2007年</strong></p><p>《大跃进》展示了正在大肆修建大运河的劳工，令人想起毛泽东在1958年至1960年发起的农业和工业改革，而这一时期，也爆发了上个世纪最为严重的灾荒。</p>",
	"c11": "<p><strong>张洹，《长岛佛》，2010-2011年</strong></p><p>在2005年的一次西藏之旅中，张洹发现并收集了在毛泽东体制下被破坏和损毁的香灰佛像，他从这场旅行汲取灵感，创作了这件宏伟的铜雕像，复制出巨大的佛头，直接放置于地面上。这件作品上的焊接痕迹清晰可辨，表面或多或少出现氧化现象，静谧祥和，令人想起稍纵即逝的人生。</p>",
	"c12": "<p><strong>张洹，《突然的觉醒》，2006年</strong></p><p>《突然的觉醒》运用香灰复制出面容安详的闭眼佛头，这是世间睿智与觉醒的化身。 </p><p>艺术家介绍，“香灰并非尘埃，并非一种物质，而是某种灵魂，回忆，集体祝福。”</p>",
	"c13": "<p><b>张洹，《国庆1959》，2009年，</b></p><p>这幅油画作品分为3幅，展现了1959年10月1日中华人民共和国成立10周年时俯瞰天安门广场时的场景。这幅作品以政府发布的宣传摄影作品为蓝本，艺术家从上世纪50和80年代出版的官方报纸中搜集而来。 </p><p>香灰的颗粒质感令人想起老照片的纹理。相互交叠的薄薄香灰营造出深浅不一的色调和层次，赋予这幅作品一种真挚感人的怀旧情调，游走于历史现实与集体梦想的不安回忆之间。 </p><p>张洹以香灰为媒介缔造出过往与现状之间难以捉摸的联系。</p>",
	"c14": "<p><b>张晓刚，《我的理想》，2008年，</b></p><p>《我的理想》是张晓刚于2008年创作的一件装置作品，由一幅绘画和多件青铜雕塑组成。绘画作品上再现了毛泽东时代令儿童深受启发的五个楷模形象：工、农、兵、学、商。</p><p>“画布上这些人物的面孔安详如水。但表象之下则是波澜起伏的情感冲突，”这位艺术家这样说道。 </p><p>红色在中国象征着权力与共产主义，令画布中央的主要人物更为突出。一条细细的红线体现了这些人之间的联系，谁都不能拆散的联系。 </p><p>张晓刚的肖像作品探讨个人在中国家庭和社会中的地位，描绘了社会的一致性，在这样的社会里，集体利益高于个人利益，有时甚至有损个人利益。</p>",
	"c15": "<p><b>周涛，《鸡同鸭讲，猪同狗说》，2005年， </b></p>在这部以夜视效果拍摄的作品中，周涛以诙谐戏谑的方式描述了某种形式的现实。周涛通过《鸡同鸭讲，猪同狗说》体现了中国城市与农村人口之间的重大差距，由于生活方式的不同，城市人与农村人已无法沟通交流。 </p><p>围绕在一棵树下的中国农民正在相互交谈。而交谈的话语却被模仿动物的叫声所取代，变成了一只母鸡、一只公鸡、一只鸭子、一头猪、一只狗、一头绵羊和一只蝗虫之间颇具超现实主义意味的对话。 </p><p>这种隐喻重现了《通天塔》的传说，同时还借鉴了童话世界中能够讲话交流的动物形象，从令人讶异的视角看待中国不同群体之间的人际关系现实。</p>",
	"c16": "<p><strong>周涛，《一二三四》，2008年</strong></p><p>表演专业出身的周涛，将电影视为一种专注于身体及其动作，对个人或集体经验的记录。视频《一二三四》专为第7届上海双年展而创作，拍摄了四十多个商家和企业团队的晨练活动。这些身穿制服的团队，在企业歌曲的伴奏下作出整齐划一的动作。渐趋高潮的蒙太奇手法对形式主义进行滑稽的模仿。</p>"
}


var imgProArray = [
	"/vstyle/imgs/collection/c1.jpg",
	"/vstyle/imgs/collection/c2.jpg",
	"/vstyle/imgs/collection/c3.jpg",
	"/vstyle/imgs/collection/c4.jpg",
	"/vstyle/imgs/collection/c5.jpg",
	"/vstyle/imgs/collection/c6.jpg",
	"/vstyle/imgs/collection/c7.jpg",
	"/vstyle/imgs/collection/c8.jpg"
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
	workPic.src = "/vstyle/imgs/collection/big/" + curw + ".jpg";
	workPic.onload = function(){
		$(".imgInfo").fadeIn();
		$(".workDetailed h1").html(curname);
		$("#zoom").attr("src", "/vstyle/imgs/collection/big/" + curw + ".jpg").zoombieLens();
		$("#g_intro").html(infoArr["c"+curw]);
	}
}


$(".moreBtn").click(function(){
	$(".photoInfo").fadeIn();
	var swiper = new Swiper('.swiper-container', {
	    direction: 'vertical',
	    slidesPerView: 'auto',
	    mousewheelControl: true,
	    freeMode: true
	});
	swiper.onResize();
})



</script>