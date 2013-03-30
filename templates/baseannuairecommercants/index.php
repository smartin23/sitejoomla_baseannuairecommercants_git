<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Get the user
$user =& JFactory::getUser();

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
 <head>
 
	<meta charset="utf-8">
 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">

   	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/min?g=generalcss">
			
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/fontawesome/css/font-awesome.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/fontface.css" type="text/css" media="screen" />
		   
	<!-- Le touch icons -->
	<link rel="apple-touch-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icons/apple-touch-icon-114x114.png">
	
	<script src="<?php echo $this->baseurl ?>/min/g=basejs"></script>	  
	<script type='text/javascript'>
		jQuery.noConflict();
	</script>
	<!--[if IE 9]>
	  <script src="/min/g=ielte9js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
	  <script src="/min/g=ielte8js"></script>
	<![endif]-->
	
	
	<jdoc:include type="head" />
	
	
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
 
</head>
<body class="site <?php echo $option . " view-" . $view . " layout-" . $layout . " task-" . str_replace('.','-',$task ). " itemid-" . $itemid . " ";?> <?php if ($this->params->get('fluidContainer')) { echo "fluid"; } ?>">

<div class="topborder"></div>

<div class="background"><img src="<?php echo $this->baseurl ?>/images/deco/background.png"></div>

<div class="sheet ">

		<header>
			<div class="header row-fluid">

				<div class="navbar">	
					<div class="container">
								
						<a class="brand" href="<?php echo JURI::root(); ?>"><?php echo $app->getCfg('sitename'); ?></a>							
						<a class="custombtn" data-toggle="collapse" data-target=".nav-collapse">
						
							<span id="bar1" class="custombar"></span>
							<span id="bar2" class="custombar"></span>
							<span id="bar3" class="custombar"></span>
							<span id="bar4" class="custombar">						
								<span class="first icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>	
							</span>
						</a>

						<div class="nav-collapse collapse pull-right">
							<jdoc:include type="modules" name="navigation" style="none" />				
						</div>
											
					</div>
				  
				</div>
			</div>	
			
			<div class="introduction row-fluid">

						<div class="introduction-titre ">
						
								<div class="page-header">
									<jdoc:include type="modules" name="header"/>
								</div>
				
						</div>
						<?php if ( $this->countModules( 'search' )){ ?>
						<div class="introduction-recherche">	
						
									<div class="search-bloc">						
										<jdoc:include type="modules" name="search" style="standard"/>
									</div>
									
									<div class="search2-bloc">
										<jdoc:include type="modules" name="search2" style="standard"/>
									</div>
						
						</div>
						<?php } ?>
			</div>	
		</header>
				
		<div class="centre row-fluid">
	
				<div id="col1" class="span3 pull-left">	
					<?php if ($task=='category.view') { ?>
						<div class="mapgrip">
							<jdoc:include type="modules" name="map1" style="standard" />
						</div>
					<?php } ?>
					
					<?php if ($task=='search.results') { ?>
						<div class="mapgrip">
							<jdoc:include type="modules" name="map2" style="standard" />
						</div>
					<?php } ?>

					<?php if ( $this->countModules( 'left' )) { ?>
						<div class="sidebar1">
							<jdoc:include type="modules" name="left" style="standard" />
						</div>
					<?php } ?>
				</div>
			
				<div id="col2" class="span6 middle">
					<jdoc:include type="modules" name="breadcrumbs" />
					
					<div class="contenu lifted"><jdoc:include type="component" /></div>
																	
					<div class="liens1 row-fluid">

						<?php $counter=0; 
						if ( $this->countModules( 'bottom1-left' )) $counter++;
						if ( $this->countModules( 'bottom1-right' )) $counter++;
						if ($counter>0) {
						?>
				
							<?php if ( $this->countModules( 'bottom1-left' )) { ?>
							<div class="span<?php echo 12/$counter;?>"><jdoc:include type="modules" name="bottom1-left"  /></div>
							<?php } ?>
							
							<?php if ( $this->countModules( 'bottom1-right' )) { ?>
							<div class="span<?php echo 12/$counter;?>"><jdoc:include type="modules" name="bottom1-right"  /></div>
							<?php } ?>
						
						<?php } ?>

					</div>
					<div class="liens2 row-fluid">

							<?php $counter=0; 
							if ( $this->countModules( 'bottom2-left' )) $counter++;
							if ( $this->countModules( 'bottom2-right' )) $counter++;
							if ($counter>0) {
							?>

								<?php if ( $this->countModules( 'bottom2-left' )) { ?>
								<div class="span<?php echo 12/$counter;?>"><jdoc:include type="modules" name="bottom2-left"  /></div>
								<?php } ?>
								
								<?php if ( $this->countModules( 'bottom2-right' )) { ?>
								<div class="span<?php echo 12/$counter;?>"><jdoc:include type="modules" name="bottom2-right"  /></div>
								<?php } ?>
								
							<?php } ?>

					</div>
				
					<jdoc:include type="message" />
					
				</div>
								
				<div id="col3" class="span3 pull-right">
					
					<div class="publicites">
					<jdoc:include type="modules" name="advertising1" style="standard"/>
					<jdoc:include type="modules" name="advertising2" style="standard"/>
					<jdoc:include type="modules" name="advertising3" style="standard"/>
					<jdoc:include type="modules" name="advertising4" style="standard"/>				
					</div>
									
					<div class="sidebar2">
						<jdoc:include type="modules" name="right" style="standard"/>
					</div>

				</div>	
		</div>

</div>

<footer>

	<!--<p class="pull-right"><a href="#">Haut de la page</a></p>-->
	
	<div class="footer container">
		<div class="colors row-fluid">
			<div class="span6 offset6">
				<div class="color1"></div>
				<div class="color2"></div>
				<div class="color3"></div>
				<div class="color4"></div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<div class="basdepage row-fluid">		

						<div class="span4 menusecondaire <?php if ($user->id!=0) echo 'registered user_'.$user->id;?>">						
							<jdoc:include type="modules" name="footer1" style="standardlite" />	
						</div>
						<div class="span4 newsletter">
							<jdoc:include type="modules" name="footer2" style="standardlite" />	
						</div>
						<div class="span4 social">
							<jdoc:include type="modules" name="footer3" style="standardlite" />	
						</div>	

				</div>
				
				<div class="copyright row-fluid">		
					<div class="span12">
						<jdoc:include type="modules" name="copyright" style="none" />	
					</div>
				</div>
			</div>	
		</div>
	</div>
</footer>




<script type='text/javascript'>
	Modernizr.load([
	{
		test:Modernizr.touch,
		yep:"/min/g=mobilejs",
		callback: {
		"/min/g=mobilejs" : function() {
			//Support Swipe pour le carousel photos
			jQuery('.carousel').each(function () {
				
				jQuery(this).swiperight(function() {  
					jQuery(this).carousel('prev');			
				}); 
				
				jQuery(this).swipeleft(function() {  
					jQuery(this).carousel('next');  
				}); 
		
			});
		}
		}
	}
	]);
</script>

<!--<script src="?php echo $this->baseurl ?>/scripts/jquery.defer.js"></script>
<script type='text/javascript'>
jQuery.deferSettings.delayDomReady = true;
jQuery.defer( "/scripts/jquery.tinyscrollbar.min.js" )
    .done( function () {
		jQuery('#SPExtSearch').tinyscrollbar();
	});
</script>-->

<script src="<?php echo $this->baseurl ?>/min/g=generaljs"></script>
<script type='text/javascript'>
	jQuery.noConflict();
	
	//Carousel photos (description)
	jQuery('.carousel').carousel({  
	  interval: 10000 // autoplay à 8s
	});

	//Desactivation du conflit avec Mootools (encore utilisé par SobiPro!)
	window.addEvent('domready', function(){
		if (typeof jQuery != 'undefined' && typeof MooTools != 'undefined' ) {

		Element.implement({
		slide: function(how, mode){
		return this;
		}
		});
		}
	});

</script>

<!---Patch pour eviter l'ajout d'un display:none sur le collapse apres fermeture (hide);
cf. http://stackoverflow.com/questions/12715254/twitter-bootstrap-transition-conflict-prototypejs-->
<script type='text/javascript'>
    jQuery.fn.collapse.Constructor.prototype.transition = function (method, startEvent, completeEvent) {
      var that = this
        , complete = function () {
            if (startEvent.type == 'show') that.reset();
            that.transitioning = 0;
            that.$element.trigger(completeEvent);
          }

      //this.$element.trigger(startEvent);
      //if (startEvent.isDefaultPrevented()) return;
      this.transitioning = 1;
      this.$element[method]('in');
      (jQuery.support.transition && this.$element.hasClass('collapse')) ?
    this.$element.one(jQuery.support.transition.end, complete) :
        complete();
    };
    
    //jQuery.noConflict();
</script>

<script type='text/javascript'>
function SPCSendMessage( form )
{
	jQuery.ajax( {
		url:SobiProUrl.replace( '%task%', 'contact.send' ),
		data:form.serialize(),
		type:'POST',
		dataType:'json',
		success:function ( data ) {

			if ( data.status == 'error' ) {
				if ( data.require ) {
					/*jQuery('#system-message-container').html('<dl id="system-message"><dt class="warning">Avertissement</dt><dd><ul><li>Veuillez saisir tous les champs requis</li></ul></dd></dl>');*/
					jQuery( '[name="' + data.require + '"]' ).addClass('invalid');
				}
			}
			else {
				form.find( 'input:text, input:password, input:file, select, textarea' ).val( '' );
				form.find( 'input:radio, input:checkbox' ).removeAttr( 'checked' ).removeAttr( 'selected' );
				try { jQuery( form.spDialogId ).dialog( 'close' ); } catch ( x ) {}
			}
		}
	} );
}
</script>

<script type="text/javascript">


function changeColumns() {
}

function changeStackingOrder() {

	//on déplace les categories et les news (les cartes ne peuvent pas etre déplacées)
	if (jQuery(window).width() < 768){
	
		//On déplace le breadcrumb
		jQuery(".centre").prepend(jQuery(".breadcrumb"));
	
		if (jQuery(".SPListing").length>0) {
			jQuery(".categories").insertAfter(jQuery(".SPListing"));
		}
		else if (jQuery(".SPSearch").length>0) {
			jQuery(".categories").insertAfter(jQuery(".SPSearch"));
		}
		else {
			jQuery(".categories").insertAfter(jQuery(".contenu"));
		}
		
		//jQuery(".gueret").insertAfter(jQuery(".contenu"));
		jQuery(".evenement").insertAfter(jQuery(".contenu"));
		jQuery(".actualites").insertAfter(jQuery(".evenement"));
		jQuery(".agenda").insertAfter(jQuery(".actualites"));
		jQuery(".derniersinscrits").insertAfter(jQuery(".agenda"));
		
		//Sidebar1 n'est plus utilisé, ainsi que toute la colonne 1
		jQuery('#col1').hide();
		jQuery('#col2').addClass("fullwidth");
	}
	else 
	{
		//Sidebar1 est utilisé, ainsi que la colonne 1
		jQuery('#col1').show();
		jQuery('#col2').removeClass("fullwidth");
		
		jQuery(".contenu").prepend(jQuery(".breadcrumb"));
		
		if (jQuery('.categories').length>0) {
			if (jQuery('.mod-88').length>0) jQuery(".categories").insertAfter(jQuery(".mod-88"));
			else if (jQuery('.mod-98').length>0) jQuery(".categories").insertAfter(jQuery(".mod-98"));
			else if (jQuery('.sidebar1').length>0) jQuery(".sidebar1").prepend(jQuery(".categories"));
		}
		
		jQuery(".sidebar1").prepend(jQuery(".evenement"));
		jQuery(".actualites").insertAfter(jQuery(".evenement"));
		jQuery(".agenda").insertAfter(jQuery(".actualites"));
		jQuery(".derniersinscrits").insertAfter(jQuery(".agenda"));
	}
}

function addBootstrapTags() {

	//Ajout du style btn sur les boutons
	jQuery('input.button').addClass('btn');
	jQuery("input[type='submit']").addClass('btn');
	jQuery('button').addClass('btn');
	
	//On reaffiche les boutons de pagination du carousel s'il n'est pas vide
	if  (jQuery('.carousel-inner').children('div').length>1) {
		jQuery('.carousel-control').show();
	}
}

function adaptBackground() {
	var theWindow        = jQuery(window);
	var bimg = jQuery(".background").find('img');
	var aspectRatio = bimg.width() / bimg.height();
	if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
		    bimg
		    	.removeClass()
		    	.addClass('bgheight');
		} else {
		    bimg
		    	.removeClass()
		    	.addClass('bgwidth');
		}
}

jQuery(window).load(function(){ 
	
});

jQuery(document).ready(function() {

		//Full screen background
		adaptBackground();

		//Change la structure des colonnes selon la resolution
		changeColumns();
	
		//Réorganisation de l'ordre des blocs selon la résolution		
		changeStackingOrder();
		
		//Ajout des tags Bootstrap (hors des templates et views modifiables)
		addBootstrapTags();
		
		//Les news rss + derniers inscrits + news defile : affichés qu'en page d'acceuil
		if (jQuery('.task-section-view').length >0) {
			jQuery('.actualites').show();
			jQuery('.agenda').show();
			jQuery('.derniersinscrits').show();	
			jQuery('.evenement').show();
		}
		else
		{	
			//L'arbre de categories n'est pas affiché en page d'accueil
			jQuery('.categories').show();
		}
			
		//Gestion des categories : ouverture de la branche active
		$catgroup = jQuery('.categories').find('a.active').parents('.accordion-group');
		$catgroup.find('a.accordion-toggle').removeClass('collapsed');
		$catgroup.find('.accordion-body').addClass('in');	
			
		//Contact Form : ajout des classes Bootstrap hors template (ne pas modifier le coeur de contact form)
		jQuery(".contact-form").find("form").find("label").addClass('control-label').removeClass("hasTip");
		
		//Entry edit form : ajout des classes Bootstrap hors template (ne pas modifier le coeur de sobipro)
		jQuery("#spEntryForm").addClass("form-horizontal");
		jQuery("#spEntryForm").find(".required").parent().parent().children("label").after("*");
		//Hack pour required manquant..
		jQuery("#spEntryForm").find("#field_activite_detailleeContainer").find(".control-group").children("label").after("*");
		//jQuery("#spEntryForm").find(".spFormRowFooter button").addClass("btn");
		//jQuery("#spEntryForm").find(".spFormRowFooter input").addClass("btn btn-primary");
		//jQuery("form#spEntryForm").find('.controls input').addClass("input-large");
		//jQuery("form#spEntryForm").find('.controls textarea').addClass("input-large");
		
		//Affichage de la description du champ sous le champs de saisie
		var ctrlgrp=jQuery('.SPEntryEdit').find('.control-group').each(function () {
			title=jQuery(this).find('a').attr('title');
			if (title && title!='Article') jQuery(this).find(".controls").after('<div class="hasCustomLegend">'+title+'</div>');
		});
		
		//Bottom social share
		jQuery('#shareme').sharrre({
		share: {
		googlePlus: true,
		facebook: true,
		twitter: true
		},
		enableTracking: true,
		buttons: {
		googlePlus: {size: 'tall'},
		facebook: {layout: 'box_count'},
		twitter: {count: 'vertical'}
		},
		hover: function(api, options){
		jQuery(api.element).find('.buttons').show();
		},
		hide: function(api, options){
		jQuery(api.element).find('.buttons').hide();
		}
		});		
});

jQuery(window).resize(function () {

	adaptBackground();

	changeStackingOrder();
	
	changeColumns();
	
});

// Listen for orientation changes
window.addEventListener("orientationchange", function() {

	adaptBackground();

	changeStackingOrder();
	
	changeColumns();
  
}, false);
</script>

</body> 
</html>