/**
/**
 * Wordpress Front End Enhancements.
 *
 * jQuery effects used in theme.
 */

/* ----------------------------------------------------------------------------------
	FORMAT MAIN HEADER MENU
---------------------------------------------------------------------------------- */
function mainmenu(){

	/* Add menu-hover class */
	jQuery("header .header-links ul.menu > li").hover(function(){
		jQuery(this).find('ul.sub-menu:first').css({visibility: "visible",display: "none"}).parent().addClass('menu-hover');
	},function(){
		jQuery(this).find('ul.sub-menu:first').css({visibility: "hidden",display: "none"}).parent().removeClass('menu-hover');
	});

	/* Add menu-parent class */
	jQuery("header .header-links ul.menu > li").each(function(){
		jQuery(this).find('ul.sub-menu').css({visibility: "visible",display: "none"}).parent().addClass('menu-parent');
	});

	// Change z-index of #pre-header so dropdown menus & tooltips can be seen
	jQuery("#pre-header").hover(function(){
		jQuery( this ).css({ 'z-index' : '999991' });
	},function(){
		jQuery( this ).css({ 'z-index' : '999' });
	});

	/* Add smooth dropdown effect */
	jQuery("header .header-links li").hover(function(){
		parentWidth = jQuery(this).width();
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none","min-width": parentWidth}).slideToggle(0);
	},function(){
		jQuery(this).find('ul:first').css({visibility: "hidden"});
	});

	// Correct menu for below header when navigating down page.
	if( jQuery( 'body' ).hasClass( 'header-below' ) ) {
		jQuery('#header').waypoint(function(direction) {
			if (direction === 'down') {
				jQuery( 'body' ).addClass( 'header-below2' );
			}
			else {
				jQuery( 'body' ).removeClass( 'header-below2' );
			}
		}, {
			offset: '50%'
		});
	}
}
jQuery(document).ready(function(){
	mainmenu();
});
