$('#range').on("input change", function(event) {
		// event.stopPropagation();
		if($(this).val() == 0){
	    	$('.output').val(1 +" Tender" );
	    	$('.output').css("top", "495px");
	    	$('.output').css("left", "23px");
	    	

	    	$(".discount5").show(200);
	    	$('.discount5').css("top"," 443px" );
	    	$('.anp').text('Annual Plan 2.0%');
	    	$('.mop').text('Monthly Plan 1.0%');
	    }else if($(this).val() == 1){
	    	$('.output').val(2 +" Tenders" );
	    	$('.output').css("top"," 471px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(200);
	    	$('.discount5').css("top"," 416px" );
	    	$('.anp').text('Annual Plan 3.0%');
	    	$('.mop').text('Monthly Plan 1.5%');

	    }else if($(this).val() == 2){
	    	$('.output').val(3 +" Tenders" );
	    	$('.output').css("top"," 451px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(200);
	    	$('.discount5').css("top"," 416px" );
	    	$('.anp').text('Annual Plan 4.0%');
	    	$('.mop').text('Monthly Plan 2.0%');

	    }else if($(this).val() == 3){
	    	$('.output').val(4 +" Tenders" );
	    	$('.output').css("top","427px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 390px" );
	    	$('.anp').text('Annual Plan 5.0%');
	    	$('.mop').text('Monthly Plan 2.5%');

	    }else if($(this).val() == 4){
	    	$('.output').val(5 +" Tenders" );
	    	$('.output').css("top"," 401px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 367px" );
	    	$('.anp').text('Annual Plan 6.0%');
	    	$('.mop').text('Monthly Plan 3.0%');

	    }else if($(this).val() == 5){
	    	$('.output').val(10 +" Tenders" );
	    	$('.output').css("top"," 377px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 341px" );
	    	$('.anp').text('Annual Plan 8.0%');
	    	$('.mop').text('Monthly Plan 4.0%');

	    }else if($(this).val() == 6){
	    	$('.output').val(15 +" Tenders" );
	    	$('.output').css("top"," 353px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 316px" );
	    	$('.anp').text('Annual Plan 10.0%');
	    	$('.mop').text('Monthly Plan 5.0%');

	    }else if($(this).val() == 7){
	    	$('.output').val(20 +" Tenders" );
	    	$('.output').css("top"," 350px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 311px" );
	    	$('.anp').text('Annual Plan 12.0%');
	    	$('.mop').text('Monthly Plan 6.0%');

	    }else if($(this).val() == 8){
	    	$('.output').val(25 +" Tenders" );
	    	$('.output').css("top"," 330px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 289px" );
	    	$('.anp').text('Annual Plan 15.0%');
	    	$('.mop').text('Monthly Plan 7.5%');

	    }else if($(this).val() == 9){
	    	$('.output').val(30 +" Tenders" );
	    	$('.output').css("top"," 307px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 268px" );
	    	$('.anp').text('Annual Plan 18.0%');
	    	$('.mop').text('Monthly Plan 9.0%');

	    }else if($(this).val() == 10){
	    	$('.output').val(35 +" Tenders" );
	    	$('.output').css("top"," 290px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 253px" );
	    	$('.anp').text('Annual Plan 21.0%');
	    	$('.mop').text('Monthly Plan 10.5%');

	    }else if($(this).val() == 11){
	    	$('.output').val(40 +" Tenders" );
	    	$('.output').css("top"," 267px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 229px" );
	    	$('.anp').text('Annual Plan 24.0%');
	    	$('.mop').text('Monthly Plan 12.0%');

	    }else if($(this).val() == 12){
	    	$('.output').val(50 +" Tenders" );
	    	$('.output').css("top"," 247px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 213px" );
	    	$('.anp').text('Annual Plan 26.0%');
	    	$('.mop').text('Monthly Plan 13.0%');

	    }else if($(this).val() == 13){
	    	$('.output').val(60 +" Tenders" );
	    	$('.output').css("top"," 228px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 187px" );
	    	$('.anp').text('Annual Plan 28.0%');
	    	$('.mop').text('Monthly Plan 14.0%');

	    }else if($(this).val() == 14){
	    	$('.output').val(70 +" Tenders" );
	    	$('.output').css("top"," 207px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 168px" );
	    	$('.anp').text('Annual Plan 30.0%');
	    	$('.mop').text('Monthly Plan 15.0%');

	    }else if($(this).val() == 15){
	    	$('.output').val(80 +" Tenders" );
	    	$('.output').css("top"," 189px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 153px" );
	    	$('.anp').text('Annual Plan 32.0%');
	    	$('.mop').text('Monthly Plan 16.0%');

	    }else if($(this).val() == 16){
	    	$('.output').val(90 +" Tenders" );
	    	$('.output').css("top"," 165px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 129px" );
	    	$('.anp').text('Annual Plan 34.0%');
	    	$('.mop').text('Monthly Plan 17.0%');

	    }else if($(this).val() == 17){
	    	$('.output').val(100 +" Tenders" );
	    	$('.output').css("top"," 143px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 105px" );
	    	$('.anp').text('Annual Plan 36.0%');
	    	$('.mop').text('Monthly Plan 18.0%');

	    }else if($(this).val() == 18){
	    	$('.output').val(125 +" Tenders" );
	    	$('.output').css("top"," 126px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 86px" );
	    	$('.anp').text('Annual Plan 38.0%');
	    	$('.mop').text('Monthly Plan 19.0%');

	    }else if($(this).val() == 19){
	    	$('.output').val(150 +" Tenders" );
	    	$('.output').css("top"," 106px" );
	    	$('.output').css("left","0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 69px" );
	    	$('.anp').text('Annual Plan 40.0%');
	    	$('.mop').text('Monthly Plan 20.0%');

	    }else if($(this).val() == 20){
	    	$('.output').val(175 +" Tenders" );
	    	$('.output').css("top"," 84px" );
	    	$('.output').css("left"," 0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 45px" );
	    	$('.anp').text('Annual Plan 42.0%');
	    	$('.mop').text('Monthly Plan 21.0%');

	    }else if($(this).val() == 21){
	    	$('.output').val(200 +" Tenders" );
	    	$('.output').css("top"," 64px" );
	    	$('.output').css("left"," 0" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 25px" );
	    	$('.anp').text('Annual Plan 44.0%');
	    	$('.mop').text('Monthly Plan 22.0%');

	    }else if($(this).val() == 22){
	    	$('.output').val(250 +" Tenders" );
	    	$('.output').css("top"," 42px" );
	    	$('.output').css("left"," -50px" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," 12px" );
	    	$('.anp').text('Annual Plan 50.0%');
	    	$('.mop').text('Monthly Plan 25.0%');

	    }else if($(this).val() == 23){
	    	$('.output').val("Unlimited" +" Tenders" );
	    	$('.output').css("top"," 23px" );
	    	$('.output').css("left"," -27px" );

	    	$(".discount5").show(1000);
	    	$('.discount5').css("top"," -12px" );
	    	$('.discount5').css("width"," 162px" );
	    	$('.anp').text('Annual Plan --');
	    	$('.mop').text('Monthly Plan --');

	    }else{
	    	$('.output').val("Pay per Tender" );
	    	$(".discount5").hide(400);
	    	$('.discount0').show(1000);
	    	$('.output').css("top", "495px");
	    	$('.output').css("left", "-34px");
	    }
    }).trigger("change");