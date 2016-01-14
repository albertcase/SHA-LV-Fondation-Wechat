<style type="text/css">
	body{
		background: #101311;
	}
	#langlang{
		opacity: 0;
	}
</style>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/wechat/js/PxLoader.js"></script>
<div class="page" id="langlang">
	<img src="" sourcesrc="imgs/qrcode_bg.jpg" class="bg" />
	<div class="con">
		<div class="headPortrait">
			<img src="" sourcesrc="imgs/langlang.png" width="100%" />
		</div>

		<div class="infoArea">
			<ul>
				<li>
					<img src="" sourcesrc="imgs/remind.png" />
					<p>提醒我</p>
				</li>
				<li>
					<img src="" sourcesrc="imgs/message.png" />
					<p>信息</p>
				</li>
			</ul>
			<div id="timing">00:00</div>
		</div>

		<div class="infoFooter">
			<div class="telbtn">
				<span></span>
				<p>接听</p>
			</div>
		</div>

	</div>
</div>

<audio id="audio0" src="/wechat/audio/ring.mp3" loop ></audio>
<audio id="audio1" src="/wechat/audio/langlang_LV_Foundation.aac" loop ></audio>

<script type="text/javascript">
	/* 图片加载 */
	function LoadFn ( arr , fn , fn2){
	        var loader = new PxLoader();
	        for( var i = 0 ; i < arr.length; i ++)
	        {
	            loader.addImage(arr[i]);
	        };
	        
	        loader.addProgressListener(function(e) {
	                var percent = Math.round( e.completedCount / e.totalCount * 100 );
	                if(fn2) fn2(percent)
	        }); 
	        
	        
	        loader.addCompletionListener( function(){
	            if(fn) fn();    
	        });
	        loader.start(); 
	}


	var imgProArray = [
		"/wechat/audio/langlang_LV_Foundation.aac",
		"/wechat/audio/ring.mp3"
	];


	 // 当图片加载完成之后在添加进入页面            
	LoadFn(imgProArray , function (){
		$("img").each(function(){ 
	        $(this).attr("src",$(this).attr("sourcesrc"));
	    })
	    $("#langlang").stop().animate({"opacity": 1}, 300);
	    document.getElementById('audio0').play();     
	} , function (p){
	    console.log(p+"%");
	});


	function timingFun(){
		$(".infoArea ul").hide();
		$("#timing").show();

		$(".telbtn span").addClass("connect").css({"background-color": "#d03035"});
		$(".telbtn p").html("挂断");

		var HH = 0;
		var mm = 0;
		var ss = 0;
		var str = '';
		var timer = setInterval(function(){
			str = "";

			if(++ss==60){
				if(++mm==60){
					HH++;
					mm=0;
				}
				ss=0;
			}

			//str+=HH<10?"0"+HH:HH;
			//str+=":";
			str+=mm<10?"0"+mm:mm;
			str+=":";
			str+=ss<10?"0"+ss:ss;
			document.getElementById("timing").innerHTML = str;
		},1000);
	};

	$(".telbtn").click(function(){
		if($(this).find("span").hasClass("connect")){
			window.location.href = "qrcode";
		}else{
			timingFun();
			document.getElementById('audio0').pause(); 
			document.getElementById('audio1').play();   
		}
	})



    document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);

// http://tympanus.net/Development/ElasticStack/
</script>