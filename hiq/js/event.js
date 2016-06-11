$(document).ready(function(){


$.fn.Show = function(id,size) {
        
    for(i=1;i<=size;i++){
    	if(i != id){
    		/*if($('#btn_'+i).hasClass('btn-default')){*/
    		$("#btn_"+i).removeClass("btn-danger").addClass("btn-info");
    		$('#'+i).css("display","none");
            $("#symp_id").val("");
            $("#btn_submit").css("display","block");
    	}else{
    		$("#btn_"+id).removeClass("btn-info").addClass("btn-danger");
    		$('#'+id).css("display","block");
    	}
    }
    $("html, body").animate({ scrollTop: 0 }, "slow");
};

$.fn.Symp = function(i,j,size){
    console.log("Button ID : btn_"+i+"_"+j);
    $("#symp_id").val($("#btn_"+i+"_"+j).attr("name"));
    for(k=1;k<=size;k++){
        if(k == j){
            $("#btn_"+i+"_"+j).removeClass("btn-warning").addClass("btn-danger");
            /*$("#btn_submit").css("display","block");*/
        }else{
            $("#btn_"+i+"_"+k).removeClass("btn-danger").addClass("btn-warning");
        }
    }
};


});