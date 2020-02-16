$(document).ready( function() {
   /* Executa a requisição quando o campo CEP perder o foco */
   $('#pecanova').blur(function(){
           /* Configura a requisição AJAX */
           $.ajax({
                url : '../controller/consultar_peca.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'pecanova=' + $('#pecanova').val(), /* dado que será enviado via POST */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        $('#numero_serie').val(data.numero_serie);
                       
                    }
                }
           });   
   return false;    
   })
});