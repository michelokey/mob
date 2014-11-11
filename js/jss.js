// JavaScript Document
 $(document).ready(function() {
     
    $("#owl-demo").owlCarousel({
     
    navigation : false, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
     
    // "singleItem:true" is a shortcut for:
    // items : 1,
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
     itemsMobile : false
     
    });
     
    }); 




  $(document).ready(function() {
                // $(window).resize() est appelée chaque fois que la fenêtre est redimensionnée par l'utilisateur.
                $(window).resize(function() {
                    $("#monbloc").css({
                        position:'absolute',
                        left:($(window).width() - $("#monbloc").outerWidth()) / 2,
                        top:($(window).height() - $("#monbloc").outerHeight()) / 2
                    });
                });
				 
            });

            $(window).load(function() {
                // au chargement complet de la page, la fonction resize() est appelée une fois pour initialiser le centrage.
                $(window).resize();
            });
			
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
  $.mobile.changePage("home.php#home", "fade");
}

 
$(function(){
    $('#inner-content-div').slimScroll({
        height: 'auto'
    });
}); 

$(function(){
    $('#inner-content-div2').slimScroll({
        height: 'auto'
    });
});    

$(function(){
    $('#inner-content-div3').slimScroll({
        height: 'auto',
		 
    });
});
   

      