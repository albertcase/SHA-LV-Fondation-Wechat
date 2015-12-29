<div class="arr">
	<img src="" sourcesrc="/vstyle/imgs/arr.png" width="100%" />
</div>
<div id="wrapp">
    <div id="scroller">

    	<div class="page" id="home">
    		<ul>
    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;"></a>
	    				<a href="javascript:;"></a>
	    			</div>
	    			<img src="" sourcesrc="/vstyle/imgs/c1.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
    					<div class="lileft">
		    				<a href="javascript:;"></a>
		    				<a href="javascript:;"></a>
		    			</div>
	    				<a href="javascript:;"></a>
	    			</div>
	    			<img src="" sourcesrc="/vstyle/imgs/c2.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;"></a>
	    				<div class="lileft">
		    				<a href="javascript:;"></a>
		    				<a href="javascript:;"></a>
		    			</div>
	    			</div>
	    			<img src="" sourcesrc="/vstyle/imgs/c3.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;"></a>
	    			</div>
	    			<img src="" sourcesrc="/vstyle/imgs/c4.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;"></a>
	    			</div>
	    			<img src="" sourcesrc="/vstyle/imgs/c5.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;"></a>
	    				<a href="javascript:;"></a>
	    			</div>
	    			<img src="" sourcesrc="/vstyle/imgs/c6.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;"></a>
	    				<a href="javascript:;"></a>
	    			</div>
	    			<img src="" sourcesrc="/vstyle/imgs/c7.jpg" width="100%" />
    			</li>

    			<li>
    				<div class="pli_con">
	    				<a href="javascript:;"></a>
	    				<a href="javascript:;"></a>
	    			</div>
	    			<img src="" sourcesrc="/vstyle/imgs/c8.jpg" width="100%" />
    			</li>
    			
    		</ul>
			
		</div>

	</div>
</div>




<script type="text/javascript">

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

	var myScroll = new IScroll('#wrapp', { 
	    preventDefault:false,
	    click:iScrollClick(), //调用判断函数
	    scrollbars: false, //有滚动条
	    fixedScrollbar: false,
	    // momentum: true,
	    //useTransition: true
	});
       
} , function (p){
    console.log(p+"%");
});

</script>