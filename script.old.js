// JavaScript Document
window.onscroll = fadeHeader;

function fadeHeader() {
	$('.header').css('background', 
		'linear-gradient(to bottom, rgba(33,150,243,1) 0%,rgba(33,150,243,'
		+  ($(window).scrollTop() / 8 / 100)
		+ ') 100%)'
	);
}

function floating(title) {
	if(title == "achieve") {
		$("div.floating div.card").html('<i class="material-icons" onClick="floatingHide()">arrow_back</i>' + achieveContent);
		$("div.floating").css('display', 'block');
		$("body").css('height', '100vw').css('overflow', 'hidden')
	}
	if(title == "event") {
		$("div.floating div.card").html('<i class="material-icons" onClick="floatingHide()">arrow_back</i>' + eventContent);
		$("div.floating").css('display', 'block');
		$("body").css('height', '100vw').css('overflow', 'hidden')
	}
}

function floatingHide() {
	$("div.floating div.card").html('<i class="material-icons" onClick="floatingHide()">arrow_back</i>');
	$("div.floating").css('display', 'none');
	$("body").css('height', 'auto').css('overflow', 'auto')
}