/**
 * Simple function to internationalise menus and sections of the home page.
 */


var enabledLangs = ["es", "en", "ca"];

var locale;

function i18n_init() {
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
    

    var isValid = (enabledLangs.indexOf(locale) > -1);
    if (!isValid) {
	locale = "es";
	localStorage.setItem("locale", locale);	
    }
}

i18n_init();

if (gbifesjs.isDevel) console.log(`locale: ${locale}`);
