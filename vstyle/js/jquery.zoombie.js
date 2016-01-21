



(function ($) {
    $.fn.zoombieLens = function (options) {

        var defaults = {
            Size: 270,
            borderSize: 0,
            borderColor: "#888",
            lensCss: 'mirror'
        };
        var options = $.extend(defaults, options);
        var lensType = "background-color:#fff;background-position: 0px 0px;width: " + String(options.Size) + "px;height: " + String(options.Size)
            + "px;float: left;display: none;overflow:hidden;border: " + String(options.borderSize) + "px solid " + options.borderColor
            + ";background-repeat: no-repeat;border-radius: " + String(options.Size / 2 + options.borderSize)
            + "px;position: absolute;z-index:9;";

        return this.each(function () {
            obj = $(this);

            var offset = $(this).offset();

            // Creating lens
            var target = $("<div style='" + lensType + "' class='" + options.lensCss + "'>&nbsp;</div>").appendTo($(this).parent());
            var targetSize = target.size();

            // Calculating actual size of image
            var imageSrc = options.imageSrc ? options.imageSrc : $(this).attr("src");
            
            var imageTag = new Image();
                imageTag.src = imageSrc;

            var widthRatio = 0;
            var heightRatio = 0;

            imageTag.onload = function(){
                console.log(this.width);
                widthRatio = this.width / obj.width();
                heightRatio = this.height / obj.height();
            }


            target.css({ backgroundImage: "url('" + imageSrc + "')" });

            target.on("touchmove", setImage);
            $(this).on("touchstart", setImage);
            $(this).on("touchmove", setImage);

            target.on("touchend", function(){
                //target.hide();
                //console.log(target.css("display"));
                if(target.css("display") != "none"){
                    $(".narrowIcon").show();
                }else{
                    $(".zoomStatus").show();
                }; 
            });
            $(this).on("touchend", function(){
                //target.hide();
                //console.log(target.css("display"));
                if(target.css("display") != "none"){
                    $(".narrowIcon").show();
                }else{
                    $(".zoomStatus").show();
                };

                
            });

            $(".zoomStatus").on("touchstart", function(){
                $(this).hide();
            });

            $(".narrowIcon").on("touchstart", function(){
                $(this).hide();
                target.hide();
                $(".zoomStatus").show();
            });

            // target.mousemove(setImage);
            // $(this).mousemove(setImage);

            function setImage(e) {
                $(".zoomtips").hide();
                $(".introFooter").show();
                $(".narrowIcon").hide();

            	var touch = e.originalEvent.changedTouches[0];

                var leftPos = parseInt(touch.pageX - offset.left);
                var topPos = parseInt(touch.pageY - offset.top);

                if (leftPos < 0 || topPos < 0 || leftPos > obj.width() || topPos > obj.height()) {
                    target.hide();
                    $(".zoomStatus").show();
                }else {
                    target.show();

                    $(".zoomStatus").hide();
 
                    leftPos = String(((touch.pageX - offset.left) * widthRatio - target.width() / 2) * (-1));
                    topPos = String(((touch.pageY - offset.top) * heightRatio - target.height() / 2) * (-1));

                    target.css({ backgroundPosition: leftPos + 'px ' + topPos + 'px' });
                    // if(leftPos * (-1) >= 0 && leftPos * (-1) <= target.width()*2 - target.offset().left*2){
                    //     target.css({ backgroundPosition: leftPos + 'px ' + topPos + 'px' });
                    // }

                    // if(leftPos * (-1) >= 0 && leftPos * (-1) <= target.width()*2 - target.offset().left*2 && topPos * (-1) >= 0 && topPos * (-1) <= target.height()){
                    //     target.css({ backgroundPosition: leftPos + 'px ' + topPos + 'px' });
                    // }
                    
                    leftPos = String(touch.pageX - target.width() / 2);
                    topPos = String(touch.pageY - target.height() / 2 + parseInt(obj.css("margin-top")) - Math.floor(offset.top));
                    target.css({ left: leftPos + 'px', top: topPos + 'px' });
                    //target.css({ left: '50%', top: '50%', "margin-top": -parseInt(options.Size/2), "margin-left": -parseInt(options.Size/2) });
                }
            }

            $(".backBtn").click(function(){

                    $(".imgInfo").hide();
                    $(".mirror").remove();
                    $(".zoomtips").show();
                    $(".introFooter").hide();
                    $(".zoomStatus").show();
                    $(".narrowIcon").hide();
 
            })
        });
    };

})(jQuery);














