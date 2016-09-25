(function() {
	
	var animatingSvg = Snap('#animated-bot'),
		botFace = animatingSvg.select('#botface'),
		botMouth = animatingSvg.select('#botmouth'),
		talkBox = animatingSvg.select('#talkbox'),
		botText = animatingSvg.select('#hello');


	initLoading();	

	function initLoading() {


		animateFace();
		

	}


    /* bot animation js */
  
	function animateFace(){
		document.getElementById('botface').style.display = "block";
		botFace.addClass('animated fadeIn');
		//document.getElementById('botface').style.animation = '2s';
		setTimeout(function(){
			document.getElementById('botmouth').style.display = "block";
			botMouth.addClass(' bounce');
		}, 1000);

		setTimeout(function(){
			document.getElementById('talkbox').style.display = "block";
			talkBox.addClass('animated fadeIn');
		}, 2000);

		setTimeout(function(){
			document.getElementById('hello').style.display = "block";
			botText.addClass('animated fadeIn infinite');
		},2000);
	}



})();
