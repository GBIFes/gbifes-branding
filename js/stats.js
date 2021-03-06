function loadStats(){

   $.getJSON("https://registros-ws.gbif.es/occurrences/search?pageSize=0", function( data ) {
      $('#number_registros').html(addPeriods(data.totalRecords)).addClass('loaded_stats');
   });

   $.getJSON("https://colecciones.gbif.es/ws/institution", function( data ) {
      $('#number_instituciones').html(data.length).addClass('loaded_stats');
   });

   $.getJSON("https://colecciones.gbif.es/ws/dataResource", function( data ) {
      $('#number_bases').html(data.length).addClass('loaded_stats');
   }); 
}


function addPeriods(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
}
