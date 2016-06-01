$(document).ready(function(){

$.fn.Show = function(id,size) {

	/*$("#btn_"+id).removeClass("btn-info").addClass("btn-default");*/
        
        for(i=1;i<=size;i++){
        	if(i != id){
        		/*if($('#btn_'+i).hasClass('btn-default')){*/
        		$("#btn_"+i).removeClass("btn-danger").addClass("btn-info");
        		$('#'+i).css("display","none");
        	}else{
        		$("#btn_"+id).removeClass("btn-info").addClass("btn-danger");
        		$('#'+id).css("display","block");
        	}
        }
        $("html, body").animate({ scrollTop: 0 }, "slow");
    };

});