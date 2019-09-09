$(function () {
	'use strict';
	//hide placeholder on form focus
	$("[placeholder]").focus(function () {
		$(this).attr('data-text',$(this).attr('placeholder'));
		$(this).attr('placeholder','');
	}).blur(function() {
		$(this).attr('placeholder',$(this).attr('data-text'));
	});

/////////////////////////////////////////////////////////////

	$(".confirm").click(function(){
		return confirm('are you sure?');
	});

/////////////////////////////////////////////////////////////

	$('.logPage h1 span').click(function(){
		$(this).addClass('selected').siblings().removeClass('selected');
		$('.logPage form').hide();
		//$($(this).data('class')); 	
		$('.' + $(this).data('class')).fadeIn(); 	
	});

/////////////////////////////////////////////////////////////

	$('.live').keyup(function(){
		$($(this).data('class')).text("$ " + $(this).val());
	});


/////////////////////////////////////////////////////////////

/*
** Scroll Button
**
*/
	$('#up').click(function(){
		$('html,body').animate({scrollTop:0},600);
	});

});

/////////////////////////////////////////////
/*
** paralax home page 
** it work in home page in welcome section an map 
*/

$(window).scroll(function(){
	var scrooltop=$(this).scrollTop();

	console.log(scrooltop);
	$('#welcome .welcome').css('top',-(scrooltop)+'px');
	$('.map iframe').css('max-height',(scrooltop)+'px');
	$('#under').css('top',-(scrooltop)+'px');
	$('.under').css('top',-(scrooltop)+'px');
	//$('.top').css('bottom',-(scrooltop)-'px');
	
});

/////////////////////////////////////////////////////////////

$(window).scroll(function(){
	var up = $('#up');
		
	console.log($(this).scrollTop());

	if ($(this).scrollTop()>=600 ) {
		up.fadeIn(1000);
		console.log('function');
	}else{
		up.fadeOut(1000);
	}
	if ($(this).scrollTop()>=400 && $(this).innerWidth()<=320 ||  $(this).scrollTop()>600) {
		$("#head .top p").fadeOut(1000);
	}else{
		$("#head .top p").fadeIn(1000);
	}
	//////////////////////////////   store section in about us
	if ($(this).scrollTop()>900) {
		$("#story").fadeOut(1000);
	}else{
		$("#story").fadeIn(1000);
	}
//////////////////////////////////////////////

/*
** couunt values innews page
**
*/

	if ($(this).scrollTop()>2400) {

		$('.counter').each(function () {
		    $(this).prop('Counter',0).animate({
		        Counter: $(this).text()
		    }, {
		        duration: 4000,
		        easing: 'swing',
		        step: function (now) {
		            $(this).text(Math.ceil(now));
		        }
		    });
		});

	}
/////////////////////////////////////////////
	//var windoWidth=window.innerWidth;//=320 hight 400
	



});
/////////////////////////////////////////////////////////////

















