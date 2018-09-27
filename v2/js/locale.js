function setLocalLinks(){

   var url = window.location.href;  
   var locales = ["en", "es", "ca"];

   for(var i=0; i < locales.length; i++){
      var a = document.getElementById(locales[i] + '-locale-link'); //or grab it by tagname etc

      var localeUrl = url
      if(url.includes('lang=')){
         localeUrl = url.replace(/lang=en|lang=es|lang=ca/gi, "lang=" + locales[i]);   
      } else {
         if(url.includes('?')){
            localeUrl = localeUrl + "&lang=" + locales[i];      
         } else {
            localeUrl = localeUrl + "?lang=" + locales[i];      
         }
      }
      a.href = localeUrl;
   }
}

setLocalLinks();
