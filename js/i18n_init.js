/**
 * Simple function to internationalise menus and sections of the home page.
 */


const enabledLangs = ['es', 'en', 'ca'];

let locale;

function i18n_init() {
  const url = new URL(window.location.href);

  locale = url.searchParams.get('lang');

  if (locale != null) {
    localStorage.setItem('locale', locale);
  } else {
    locale = localStorage.getItem('locale');
  }

  if (locale === undefined || locale === null) {
    locale = navigator.language.substring(0, 2);
  }

  if (gbifesjs.isDevel) console.log(`Initial locale: ${locale}`);


  const isValid = (enabledLangs.indexOf(locale) > -1);
  if (!isValid) {
    locale = 'es';
    localStorage.setItem('locale', locale);
  }
}

i18n_init();

if (gbifesjs.isDevel) console.log(`locale: ${locale}`);
