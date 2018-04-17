/**
 * Simple function to internationalise menus and sections of the home page.
 */
function i18n_menus(){

	var locale = navigator.language.substring(0,2);
	var url = new URL(window.location.href);
	var locale = url.searchParams.get("lang");
	if(locale != null){
		localStorage.setItem("locale", locale);
	} else {
		locale = localStorage.getItem("locale");
	}

	if(locale === undefined || locale == null){
		locale = navigator.language.substring(0,2);
	}

	if(locale){
		$(".top-nav-menu a, .portal-link").each(function() {
		   var $this = $(this);       
		   var _href = $this.attr("href"); 
		   $this.attr("href", _href + '?lang=' + locale);
		});	
	}

	jQuery.i18n.properties({
	    name:'messages', 
	    path:'http://auth.gbif.es/i18n/', 
	    mode:'both',
	    language: locale,
	    async: true,
	    callback: function() {
			var keys = Object.keys(jQuery.i18n.map)
			for (var i=0; i< keys.length; i++){
				if(keys[i].endsWith('_placeholder')){
					var elementID = keys[i].substring(0, keys[i].length - 12);
					$('#' + elementID).attr('placeholder', jQuery.i18n.prop(keys[i]));
				} else {
					$('#' + keys[i]).html(jQuery.i18n.prop(keys[i]));	
				}		
			}
	    }
	});
}