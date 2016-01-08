

<div id="wrapp">
    <div class="indexCon">
    	<a href="collection" class="enterBtn">
    		<img src="" sourcesrc="/vstyle/imgs/enter_collection.jpg" width="100%" />
    	</a>
    </div>
</div>



<script type="text/javascript">
$("body").attr("id", "index");


var imgProArray = [
	"/vstyle/imgs/logo.jpg",
	"/vstyle/imgs/c1.jpg",
	"/vstyle/imgs/c2.jpg",
	"/vstyle/imgs/c3.jpg",
	"/vstyle/imgs/c4.jpg",
	"/vstyle/imgs/c5.jpg",
	"/vstyle/imgs/c6.jpg",
	"/vstyle/imgs/c7.jpg",
	"/vstyle/imgs/c8.jpg",
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