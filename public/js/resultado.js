$(function(){
    $.ajax({
    	   type: "GET",
           url:"./getPrediccion",
           dataType:'JSON',
           success: function (datos) {
               // $('#friends').empty().append($(datos)); 
               console.log(datos)
              $('#resultados').empty().append($(datos));
            },
           error:function(jqXHR,estado, error, data){
           	alert('El error es '+error);
           }
         }); 
});