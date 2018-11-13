/**
 * Simple function to internationalise menus and sections of the home page.
 */
function i18n_menus(){
    var url = new URL(window.location.href);
    locale = url.searchParams.get("lang");
    if (locale != null){
	localStorage.setItem("locale", locale);
    } else {
	locale = localStorage.getItem("locale");
    }

    if (locale === undefined || locale === null){
	locale = navigator.language.substring(0,2);
    }

    if (gbifesjs.isDevel) console.log(`Initial locale: ${locale}`);
    
    var enabledLangs = ["es", "en", "ca"];
    var isValid = (enabledLangs.indexOf(locale) > -1);
    if (!isValid) {
	locale = "es";
	localStorage.setItem("locale", locale);	
    }

    if (locale){
	$(".top-nav-menu a, .portal-link").each(function() {
	    var $this = $(this);       
	    var _href = $this.attr("href"); 
	    $this.attr("href", _href + '?lang=' + locale);
	});	
    }

    // underscore current locale
    $(".wpml-ls-statics-shortcode_actions ul li").each(function(index) {
	var currentItem = $(this).text().replace(/^\s+|\s+$/gm,'').toLowerCase();
	$(this).removeClass('wpml-ls-current-language');
	if (currentItem === locale) {
	    $(this).addClass('wpml-ls-current-language');
	}
    });

    var path=`${gbifesjs.layoutUrl}i18n/`;
    
    if (gbifesjs.isDevel) console.log(`locale: ${locale}`);
    if (gbifesjs.isDevel) console.log(`localePath: ${path}`);

	jQuery.i18n.properties({
	    name:'messages', 
	    path: path,
	    mode:'both',
	    language: locale,
	    async: true,
	    callback: function() {
		var keys = [
		    'main_title_label',
		    'menu_portal_part1',
		    'menu_portal_part2',
		    'menu_collections',
		    'menu_datasets',
		    'menu_search',
		    'menu_explore',
		    'menu_regions',
		    'top_menu_dataportal',
		    'footer_menu_about',
		    'footer_menu_biodiversity_data',
		    'footer_menu_collaborations',
		    'footer_menu_resources',
		    'footer_menu_news',
		    'footer_menu_training',
		    'footer_menu_software',
		    'footer_menu_contact',
		    'numbers_occurrences_label',
		    'numbers_datasets_label',
		    'numbers_institutions_label',
		    'lang_link_en',
		    'lang_link_es',
		    'lang_link_cat',
		    'footer_legal_info',
		    'search_input_advanced1',
		    'search_input_advanced2',
		    'sub_menu_collections',
		    'sub_menu_collections_detail',
		    'sub_menu_datasets',
		    'sub_menu_datasets_detail',
		    'sub_menu_explore',
		    'sub_menu_explore_detail',
		    'sub_menu_regions',
		    'sub_menu_regions_detail',
		    'footer_legal_code',
		    'banner_search_input_placeholder',
		    'main_search_input_placeholder'
		];

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
