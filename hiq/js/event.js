$(document).ready(function(){

$.fn.Show = function(id,size) {
        
        for(i=1;i<=size;i++){
        	if(i != id){
        		$('#'+i).css("display","none");
        	}else{
        		$('#'+id).css("display","block");
        	}
        }
        $("html, body").animate({ scrollTop: 0 }, "slow");
    };

});