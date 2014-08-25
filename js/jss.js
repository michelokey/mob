// JavaScript Document

$(document).on('pageinit',function(){
	$("#home").on("swiperight",function(){
		$("#leftpanel").panel( "open");
	});
	$("#home").on("swipeleft",function(){
		$("#rightpanel").panel( "open");
	});
	$("#home").on("swipeleft",function(){
		$("#about").panel( "open");
	});
	
});

$(function() {
  setTimeout(hideSplash, 5000);
});

function hideSplash() {
  $.mobile.changePage("#home", "fade");
}