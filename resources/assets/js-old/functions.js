// JavaScript Document
$(document).ready(function() {

	if($("#owl-carousel").length){
		
		var owl = $("#owl-carousel");
		
		owl.owlCarousel({
		  items : 4, //10 items above 1000px browser width
		  itemsDesktop : [1000,3], //5 items between 1000px and 901px
		  itemsDesktopSmall : [900,3], // betweem 900px and 601px
		  itemsTablet: [650,2], //2 items between 600 and 0
		  itemsMobile : [480,1], // itemsMobile disabled - inherit from itemsTablet option	
		});
		
		// Custom Navigation Events
		$(".next").on('click',function(){
			owl.trigger('owl.next');
		})
		$(".prev").on('click',function(){
			owl.trigger('owl.prev');
		});
	}
});

