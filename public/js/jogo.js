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
    
    $("#botao-iniciar-jogo").click(function(){
        if($(this).hasClass('disabled') == true) {
            return;
        }
        $(this).addClass('disabled');
        $.ajax({
            context: this,
            async: false,
            url: baseUrl+'novo-jogo',
            success: function(data) {
                //alert('Você clicou em proxima carta: '+ data);
                Placar.fetchFromServer();
                Placar.update();
                Alerta.changeValues("Novo Jogo", "O novo jogo foi iniciado!");
                Alerta.show();
                $(this).removeClass('disabled');
            }
        });
    });
    
    
});



var Placar = {
    descarte : 0,
    jogador1: 0,
    jogador2: 0,
    baralho: 0,
    jogadorAtual: 0,
    
    fetchFromServer: function(){
        $.ajax({
            url: baseUrl+'get-placar',
            context: this,
            async: false,
            success: function(data) {
                var obj = jQuery.parseJSON(data);
                this.baralho = obj.countBaralho;
                this.descarte = obj.countDescarte;
                this.jogador1 = obj.numCartas1;
                this.jogador2 = obj.numCartas2;
                this.jogadorAtual = obj.idJogadorAtual;
            }
        });
        
    },
    
    update: function() {
        $('#num-cartas-1').html(this.jogador1);
        $('#num-cartas-2').html(this.jogador2);
        $('#cartas-restantes').html(this.baralho);
        $('#num-cartas-descarte').html(this.descarte);
        $('span#idJogadorAtual').html(this.jogadorAtual);
    }
    
}

var Jogo = {
    
    habilitarJogador1: function(){
        $('#botao-par-1').removeClass('disabled');
        $('#botao-impar-1').removeClass('disabled');
        $('#botao-par-1').parent().parent().removeClass('escurecer');
        
        $('#botao-par-2').addClass('disabled');
        $('#botao-impar-2').addClass('disabled');
        $('#botao-par-2').parent().parent().addClass('escurecer');
    },
    habilitarJogador2: function(){
        
        $('#botao-par-2').removeClass('disabled');
        $('#botao-impar-2').removeClass('disabled');
         $('#botao-par-2').parent().parent().removeClass('escurecer');
        
        $('#botao-par-1').addClass('disabled');
        $('#botao-impar-1').addClass('disabled');
        $('#botao-par-1').parent().parent().addClass('escurecer');
    }
    
}

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
        $("div#alerta").show('slow').delay(3000).hide('slow');
    },
    
    hide: function(){
        $("div#alerta").hide('slow');
    }
}

