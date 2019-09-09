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





});