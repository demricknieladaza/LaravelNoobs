$('#range').on("change", function() {
		if($(this).val() == 1){
	    	$('.output').val(this.value +" Tenders" );
	    	$(".discount5").show();
	    	$(".discount10").hide();
	    	$(".discount15").hide();
	    	$(".discount20").hide();
	    	$(".discount25").hide();
	    	$(".plan5").show();
	    	$(".plan10").hide();
	    	$(".plan15").hide();
	    	$(".plan20").hide();
	    	$(".plan25").hide();
	    }else if($(this).val() == 2){
	    	$('.output').val(this.value +" Tenders" );
	    	$(".discount10").show();
	    	$(".discount5").hide();
	    	$(".discount15").hide();
	    	$(".discount20").hide();
	    	$(".discount25").hide();
	    	$(".plan10").show();
	    	$(".plan5").hide();
	    	$(".plan15").hide();
	    	$(".plan20").hide();
	    	$(".plan25").hide();
	    }else if($(this).val() == 3){
	    	$('.output').val(this.value +" Tenders" );
	    	$(".discount15").show();
	    	$(".discount5").hide();
	    	$(".discount10").hide();
	    	$(".discount20").hide();
	    	$(".discount25").hide();
	    	$(".plan15").show();
	    	$(".plan10").hide();
	    	$(".plan5").hide();
	    	$(".plan20").hide();
	    	$(".plan25").hide();
	    }else if($(this).val() == 4){
	    	$('.output').val(this.value +" Tenders" );
	    	$(".discount20").show();
	    	$(".discount5").hide();
	    	$(".discount10").hide();
	    	$(".discount15").hide();
	    	$(".discount25").hide();
	    	$(".plan20").show();
	    	$(".plan10").hide();
	    	$(".plan15").hide();
	    	$(".plan5").hide();
	    	$(".plan25").hide();
	    }else if($(this).val() == 5){
	    	$('.output').val(this.value +" Tenders" );
	    	$(".discount25").show();
	    	$(".discount5").hide();
	    	$(".discount10").hide();
	    	$(".discount15").hide();
	    	$(".discount20").hide();
	    	$(".plan25").show();
	    	$(".plan10").hide();
	    	$(".plan15").hide();
	    	$(".plan20").hide();
	    	$(".plan5").hide();
	    }else{
	    	$('.output').val("Pay per Tender" );
	    	$('.discount0').show();
	    	$(".discount5").hide();
	    	$(".discount10").hide();
	    	$(".discount15").hide();
	    	$(".discount20").hide();
	    	$(".discount25").hide();
			$(".plan0").show();
	    	$(".plan5").hide();
	    	$(".plan10").hide();
	    	$(".plan15").hide();
	    	$(".plan20").hide();
	    	$(".plan25").hide();
	    }
    }).trigger("change");