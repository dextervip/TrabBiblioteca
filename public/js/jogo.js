/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
  
    $("#botao-proxima-carta").click(function(e){
        e.preventDefault();
        $.ajax({
            url: baseUrl+'pegar-carta',
            success: function(data) {
                alert('Você clicou em proxima carta: '+ data);
            }
        });
        
    });
});

var Carta = {
    naipe : '?',
    valor : '?',
    
    hide: function(){
        $("div#carta").html('?');
    }
}

