

<div id="wrapp">
    <div class="indexCon">
    	<a href="exhibition_list" class="enterBtn">
    		<img src="" sourcesrc="/vstyle/imgs/enter_exhibition.jpg" width="100%" />
    	</a>
    </div>
</div>



<script type="text/javascript">
var shareData = {
        title: '探索路易威登基金会“本土：变革中的中国艺术家”特展”',
        desc: '探索路易威登基金会“本土：变革中的中国艺术家”特展”',
        link: window.location.host + "/site/exhibition",
        imgUrl: 'http://' + window.location.host + '/vstyle/imgs/exhibition_share.jpg'
};


$("body").attr("id", "index");


var imgProArray = [
	"/vstyle/imgs/logo.jpg",
	"/vstyle/imgs/abstract.jpg",
	"/vstyle/imgs/arr.png",
	"/vstyle/imgs/backBtn.png",
	"/vstyle/imgs/enter_exhibition.jpg",
	"/vstyle/imgs/fdjIco.png",
	"/vstyle/imgs/moreBtn.png",
	"/vstyle/imgs/narrowIcon.png",
	"/vstyle/imgs/place.jpg",
	"/vstyle/imgs/zoomtips.png"
];


 // 当图片加载完成之后在添加进入页面            
LoadFn(imgProArray , function (){
	$("img").each(function(){ 
            $(this).attr("src",$(this).attr("sourcesrc"));
    })
       
} , function (p){
    console.log(p+"%");
});



</script>