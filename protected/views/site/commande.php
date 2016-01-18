

<div id="wrapp">
    <div class="indexCon">
    	<a href="commande_list" class="enterBtn">
    		<img src="" sourcesrc="/vstyle/imgs/enter_commande.jpg" width="100%" />
    	</a>
    </div>
</div>



<script type="text/javascript">
$("body").attr("id", "index");


var imgProArray = [
	"/vstyle/imgs/logo.jpg",
	"/vstyle/imgs/abstract.jpg",
	"/vstyle/imgs/arr.png",
	"/vstyle/imgs/backBtn.png",
	"/vstyle/imgs/enter_commande.jpg"
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