$(function(){
    var $select = $(".1-50");
    for (i=1;i<=50;i++){
        $select.append($('<option></option>').val(i).html(i))
    }
});


$( function() {
  $( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      console.log(ui.values);

    }
  });


  $( "#amount" ).val( "₹" + $( "#slider-range" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range" ).slider( "values", 1 ) );


 

  $( "#slider-range1" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount1" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
 
     
    }
  });


  $( "#amount1" ).val( "₹" + $( "#slider-range1" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range1" ).slider( "values", 1 ) );

  


 
  $( "#slider-range2" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount2" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
   
     
    }
  });


  $( "#amount2" ).val( "₹" + $( "#slider-range2" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range2" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range3" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount3" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
  
     
    }
  });


  $( "#amount3" ).val( "₹" + $( "#slider-range3" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range3" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range4" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount4" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
    
     
    }
  });


  $( "#amount4" ).val( "₹" + $( "#slider-range4" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range4" ).slider( "values", 1 ) );
  


////

 
  $( "#slider-range5" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount5" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );

     
    }
  });


  $( "#amount5" ).val( "₹" + $( "#slider-range5" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range5" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range6" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount6" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );

     
    }
  });


  $( "#amount6" ).val( "₹" + $( "#slider-range6" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range6" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range7" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount7" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
   
     
    }
  });


  $( "#amount7" ).val( "₹" + $( "#slider-range7" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range7" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range8" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount8" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      
    }
  });


  $( "#amount8" ).val( "₹" + $( "#slider-range8" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range8" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range9" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount9" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
    
     
    }
  });


  $( "#amount9" ).val( "₹" + $( "#slider-range9" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range9" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range10" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount1" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );

     
    }
  });


  $( "#amount10" ).val( "₹" + $( "#slider-range10" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range10" ).slider( "values", 1 ) );
  


////

 
  $( "#slider-range11" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount11" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
       
     
    }
  });


  $( "#amount11" ).val( "₹" + $( "#slider-range11" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range11" ).slider( "values", 1 ) );
  


////

 
  $( "#slider-range12" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount12" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
       
    }
  });


  $( "#amount12" ).val( "₹" + $( "#slider-range12" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range12" ).slider( "values", 1 ) );
  
  

////

 
  $( "#slider-range13" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount13" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
  
     
    }
  });


  $( "#amount13" ).val( "₹" + $( "#slider-range13" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range13" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range14" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount14" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      
     
    }
  });


  $( "#amount14" ).val( "₹" + $( "#slider-range14" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range14" ).slider( "values", 1 ) );
  


////

 
  $( "#slider-range15" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount15" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
  
     
    }
  });


  $( "#amount15" ).val( "₹" + $( "#slider-range15" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range15" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range16" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount16" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
 
     
    }
  });


  $( "#amount16" ).val( "₹" + $( "#slider-range16" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range16" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range17" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount17" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
 
     
    }
  });


  $( "#amount17" ).val( "₹" + $( "#slider-range17" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range17" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range18" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount18" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
     
    }
  });


  $( "#amount18" ).val( "₹" + $( "#slider-range18" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range18" ).slider( "values", 1 ) );


////

 
  $( "#slider-range19" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount19" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
       
     
    }
  });


  $( "#amount19" ).val( "₹" + $( "#slider-range19" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range19" ).slider( "values", 1 ) );
  
 
////

 
  $( "#slider-range20" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount20" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      
     
    }
  });


  $( "#amount20" ).val( "₹" + $( "#slider-range20" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range20" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range21" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount21" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      
     
    }
  });


  $( "#amount21" ).val( "₹" + $( "#slider-range21" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range21" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range22" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount22" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      
     
    }
  });


  $( "#amount22" ).val( "₹" + $( "#slider-range22" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range22" ).slider( "values", 1 ) );
  
 

////

 
  $( "#slider-range23" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount23" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      
     
    }
  });


  $( "#amount23" ).val( "₹" + $( "#slider-range23" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range23" ).slider( "values", 1 ) );
  


////

 
  $( "#slider-range24" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount24" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      
     
    }
  });


  $( "#amount24" ).val( "₹" + $( "#slider-range24" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range24" ).slider( "values", 1 ) );
  


////

 
  $( "#slider-range25" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount25" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
     
     
    }
  });


  $( "#amount25" ).val( "₹" + $( "#slider-range25" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range25" ).slider( "values", 1 ) );
  


////

 
  $( "#slider-range26" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount26" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      
     
    }
  });


  $( "#amount26" ).val( "₹" + $( "#slider-range26" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range26" ).slider( "values", 1 ) );
  


////

 
  $( "#slider-range27" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount27" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
   
     
    }
  });


  $( "#amount27" ).val( "₹" + $( "#slider-range27" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range27" ).slider( "values", 1 ) );
  
  
////

 
  $( "#slider-range28" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount28" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
       console.log(ui.values);
     
    }
  });


  $( "#amount28" ).val( "₹" + $( "#slider-range28" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range28" ).slider( "values", 1 ) );
  
  

////

 
  $( "#slider-range29" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount29" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
    
     
    }
  });


  $( "#amount29" ).val( "₹" + $( "#slider-range29" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range29" ).slider( "values", 1 ) );
  


////

 
  $( "#slider-range30" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount30" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
    
     
    }
  });


  $( "#amount30" ).val( "₹" + $( "#slider-range30" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range30" ).slider( "values", 1 ) );
 

////

 
  $( "#slider-range31" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount31" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      
     
    }
  });


  $( "#amount31" ).val( "₹" + $( "#slider-range31" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range31" ).slider( "values", 1 ) );
  


////

 
  $( "#slider-range32" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $( "#amount32" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
    
     
    }
  });


  $( "#amount32" ).val( "₹" + $( "#slider-range32" ).slider( "values", 0 ) +
    " - ₹" + $( "#slider-range32" ).slider( "values", 1 ) );
  
  });

////

 
