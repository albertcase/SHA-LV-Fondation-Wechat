<style type="text/css">
	body{
		background: #101311;
	}
</style>
<div class="page" id="langlang">
	<img src="imgs/qrcode_bg.jpg" class="bg" />
	<div class="con">
		<div class="headPortrait">
			<img src="imgs/langlang.png" width="100%" />
		</div>

		<div class="infoArea">
			<ul>
				<li>
					<img src="imgs/remind.png" />
					<p>提醒我</p>
				</li>
				<li>
					<img src="imgs/message.png" />
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

<script type="text/javascript">
	function timingFun(){
		$(".infoArea ul").hide();
		$("#timing").show();

		$(".telbtn span").addClass("connect").css({"background-color": "#d03035"});

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
			audioFun(0);
		}
	})




	var audioSrc = ["/wechat/audio/audio.m4a","/wechat/audio/audio.m4a"];
    var audio = document.createElement("audio");
    function audioFun(num){
        audio.src = audioSrc[num];
        audio.autoplay = true; //设置是否自动播放
        audio.loop = "loop";
        // audio.addEventListener('ended', function () { //循环播放
        //     audio.play();
        // }, false);
    }

    audioFun(0);

    document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);

// http://tympanus.net/Development/ElasticStack/
</script>