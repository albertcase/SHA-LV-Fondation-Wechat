if(self == top){
    document.documentElement.style.display = 'block';
}else{
    top.location = self.location;
}




function GetQueryString(name){
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if(r!=null)return unescape(r[2]); return null;
}

function ajaxfun(ajaxType, ajaxUrl, ajaxData, ajaxDataType, ajaxCallback){
    $.ajax({
        type: ajaxType,
        url: ajaxUrl,
        data: ajaxData,
        dataType: ajaxDataType
    }).done(function(data){
        ajaxCallback(data)
    })
}


document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);

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


// editShare();



















