function setLocaleLinks(){

   var url = window.location.href;
   var locales = ["en", "es"];

   for(var i=0; i < locales.length; i++){
      var $link = $("." + locales[i] + '-locale-link'); //or grab it by tagname etc

      var localeUrl = url;
      if(url.includes('lang=')){
         localeUrl = url.replace(/lang=en|lang=es|lang=ca/gi, "lang=" + locales[i]);
      } else {
         if(url.includes('?')){
            localeUrl = localeUrl + "&lang=" + locales[i];
         } else {
            localeUrl = localeUrl + "?lang=" + locales[i];
         }
      }
      $link.attr('href', localeUrl);
   }
}

setLocaleLinks();
