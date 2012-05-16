<?php
namespace MRCartas;
//A biblioteca de manipulação de baralho, por padrão o tradicional de 52 cartas sem curingas, 
// que  deve fornecer uma representação das cartas e funções/métodos/etc para manipulação das cartas
// São esperadas as
//  funções de  embaralhar,
//   cortar em duas partes (em uma determinada posição e juntando em um único baralho no final)
//   retirar uma carta do inicio e do final, 
//   passar uma carta do inicio para o final (sem mostrar que carta é), 
//   e a criação de um monte de descarte do qual podemos ver qualquer carta sem removê-la 
//   (no monte de compra uma carta só pode ser vista se for removida dele).

/**
 * Description of Baralho
 *
 * @author Marcelo
 */
class Baralho {
    
    const LIMITE_CARTAS = 51;
    
    
    private $cartas = array();
    private $descarte = array();
    
    public function retiraCartaTopo(){
        return array_shift($this->cartas);
    }
    
    public function retiraCartaFim(){
        return array_pop($this->cartas);
    }
    
    public function divideBaralho(){
      
       $num = count($this->cartas)/2;
       for($i=0; $i<$num ;$i++) {
           $metade[] = $this->cartas[$i];
           $metade[] = $this->cartas[$i];
           unset($this->cartas[$i]);
           unset($this->cartas[$i]);
       }
        
        
        return $this->cartas;
        
    }
    
    public function addCartaBaralho(Carta $carta){
     $this->cartas[] = $carta;   
    }
    
    public function embaralhaCartas(){
        shuffle($this->cartas);
    }
    
    public function passaCartaInicioFim(){
       $cartaTopo  =  array_shift($this->cartas);
       array_push($this->cartas, $cartaTopo);
    }   
    
    public function getBaralho(){
        return $this->cartas;
    }
}


 
?>
