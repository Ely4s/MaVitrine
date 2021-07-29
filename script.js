//Démarrage du script après chargement de la page 
$(document).ready(function(){
//	Récuperation du cookie correspondant au motif de fond sauvegardé
	var motif = jQuery.jCookie('background');
//	Gestion du clic sur le bouton du menu de gauche
	$('#btn').click(function(){
		$("#page").toggleClass('push');
		$("#entete").toggleClass('push');
		$("body").toggleClass('push');
		$(this).toggleClass('push');
	});
//	Gestion du clic sur le bouton du menu de droite
	$('#btn2').click(function(){
		$("#page").toggleClass('push2');
		$("#entete").toggleClass('push2');
		$("body").toggleClass('push2');
		$(this).toggleClass('push2');
	});
//	Changement de motif de fond selon la selection faite au clic
	$('#bg1').click(function(){
		var motif = 1;
		$("#bg_select").addClass('transition');
		$("#page").css({"background": "url('bg/escheresque.png')"});
		$("#bg_select").css({"left": "12px"});
		jQuery.jCookie('background','1',360);
	});
	$('#bg2').click(function(){
		var motif = 2;
		$("#bg_select").addClass('transition');
		$("#page").css({"background": "url('bg/swirl_pattern.png')"});
		$("#bg_select").css({"left": "62px"});
		jQuery.jCookie('background','2',360);
	});
	$('#bg3').click(function(){
		var motif = 3;
		$("#bg_select").addClass('transition');
		$("#page").css({"background": "url('bg/hypnotize.png')"});
		$("#bg_select").css({"left": "112px"});
		jQuery.jCookie('background','3',360);
	});
//	Chargement de motif de fond à l'ouverture de la page en fonction du cookie
	if(motif==1){
		$("#page").css({"background": "url('bg/escheresque.png')"});
		$("#bg_select").css({"left": "12px"});
	}
	if(motif==2){
		$("#page").css({"background": "url('bg/swirl_pattern.png')"});
		$("#bg_select").css({"left": "62px"});
	}
	if(motif==3){
		$("#page").css({"background": "url('bg/hypnotize.png')"});
		$("#bg_select").css({"left": "112px"});
	}
//	Animation des diaporamas
	$(function(){
		  setInterval(function(){
			 $(".slideshow ul").animate({marginLeft:-458},1600,function(){
				$(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
			 })
		  }, 3500);
	   });
});