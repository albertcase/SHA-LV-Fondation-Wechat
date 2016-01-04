



(function ($) {
    $.fn.zoombieLens = function (options) {

        var defaults = {
            Size: 300,
            borderSize: 0,
            borderColor: "#888"
        };
        var options = $.extend(defaults, options);
        var lensType = "background-position: 0px 0px;width: " + String(options.Size) + "px;height: " + String(options.Size)
            + "px;float: left;display: none;border-radius: " + String(options.Size / 2 + options.borderSize)
            + "px;border: " + String(options.borderSize) + "px solid " + options.borderColor
            + ";background-repeat: no-repeat;position: absolute;z-index:9;";

        return this.each(function () {
            obj = $(this);

            var offset = $(this).offset();

            // Creating lens
            var target = $("<div style='" + lensType + "' class='" + options.lensCss + "'>&nbsp;</div>").appendTo($(this).parent());
            var targetSize = target.size();

            // Calculating actual size of image
            var imageSrc = options.imageSrc ? options.imageSrc : $(this).attr("src");
            var imageTag = "<img style='display:none;' src='" + imageSrc + "' />";

            var widthRatio = 0;
            var heightRatio = 0;

            $(imageTag).load(function () {
                widthRatio = $(this).width() / obj.width();
                heightRatio = $(this).height() / obj.height();
            }).appendTo($(this).parent());

            target.css({ backgroundImage: "url('" + imageSrc + "')" });

            target.on("touchmove", setImage);
            $(this).on("touchmove", setImage);

            target.on("touchend", function(){
                target.hide();
            });
            $(this).on("touchend", function(){
                target.hide();
                $(".zoomStatus").show();
            });

            $(".zoomStatus").on("touchstart", function(){
                $(this).hide();
            });

            // target.mousemove(setImage);
            // $(this).mousemove(setImage);

            function setImage(e) {
                $(".zoomtips").fadeOut();
                $(".introFooter").fadeIn();

            	var touch = e.originalEvent.changedTouches[0];

                var leftPos = parseInt(touch.pageX - offset.left);
                var topPos = parseInt(touch.pageY - offset.top);

                if (leftPos < 0 || topPos < 0 || leftPos > obj.width() || topPos > obj.height()) {
                    target.hide();
                }else {
                    target.show();

                    leftPos = String(((touch.pageX - offset.left) * widthRatio - target.width() / 2) * (-1));
                    topPos = String(((touch.pageY - offset.top) * heightRatio - target.height() / 2) * (-1));
                    target.css({ backgroundPosition: leftPos + 'px ' + topPos + 'px' });

                    leftPos = String(touch.pageX - target.width() / 2);
                    topPos = String(touch.pageY - target.height() / 2 + parseInt(obj.css("margin-top")) - offset.top);
                    target.css({ left: leftPos + 'px', top: topPos + 'px' });
                }
            }
        });
    };
})(jQuery);














