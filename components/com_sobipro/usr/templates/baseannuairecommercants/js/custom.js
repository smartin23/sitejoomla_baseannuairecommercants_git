function changeStackingOrder() {

}

function addBootstrapTags() {

	//Ajout du style btn sur les boutons
	jQuery('input.button').addClass('btn');
	jQuery('button').addClass('btn');
	
	//Carousel : on affiche les boutons de navigation Carousel si il y a des résultats!
	/*if  (jQuery('#spdecarousel .carousel-inner').children('div').length>1) {
		jQuery('#spdecarousel .carousel-control').show();
	}*/

}

jQuery(document).ready(function() {

	//Réorganisation de l'ordre des blocs selon la résolution		
	changeStackingOrder();
		
	//Ajout des tags Bootstrap (hors des templates et views modifiables)
	addBootstrapTags();
	
	//Tabs & accordion
	jQuery(".tabbable.responsive").resptabs({
    maxSmallWidth: 1200,
    slideTime: 300
	}); 

	//Entry social share
	//Share entry
	jQuery('.SPDetails #entryshareme').sharrre({
		share: {
		googlePlus: true,
		facebook: true,
		twitter: true,
		digg: false,
		delicious: false,
		stumbleupon: false,
		linkedin: false,
		pinterest: false
		},
		buttons: {
		googlePlus: {size: 'tall', lang: 'fr-FR'},
		facebook: {layout: 'box_count', lang: 'fr-FR'},
		twitter: {count: 'vertical', lang: 'fr-FR'},
		digg: {type: 'DiggMedium'},
		delicious: {size: 'tall'},
		stumbleupon: {layout: '5'},
		linkedin: {counter: 'top'},
		pinterest: {media: 'http://sharrre.com/img/example1.png', description: jQuery('#entryshareme').data('text'), layout: 'vertical'}
		},
		enableHover: false,
		enableCounter: false,
		enableTracking: true
	});
	
	//Si le formulaire de direction est affiché, on gélocalise...
	googlemapdirections();
});
 
jQuery(window).load(function(){ 
 

});