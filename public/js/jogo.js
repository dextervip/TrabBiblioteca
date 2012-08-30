/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    
    $(".alert").alert();
    $("div#alerta").hide();
  
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
    
    reset : function(){
        this.naipe =  '?';
        this.valor = '?';
        this.show();
    },
    
    changeValues : function(naipe, valor){
        this.naipe =  naipe;
        this.valor = valor;
    },
    
    show: function(){
        $("div#carta").html(this.naipe+ ' ' + this.valor);
    }
    
    
}


var Alerta = {
    titulo : '',
    texto : '',
    
    changeValues : function(titulo, texto){
        this.titulo =  titulo;
        this.texto = texto;
        $("div#alerta #alerta-titulo").html(this.titulo);
        $("div#alerta #alerta-texto").html(this.texto);
    },
    
    show: function(){
        $("div#alerta").show('slow');
    },
    
    hide: function(){
        $("div#alerta").hide('slow');
    }
    
    
}

