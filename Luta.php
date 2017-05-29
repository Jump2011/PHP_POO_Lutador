<?php

require_once'Lutador.php';

class Luta {
   private $desafiado;
   private $desafiante;
   private $rounds;
   private $aprovada;
   
   public function marcarLuta($l1, $l2){
      if($l1->getCategoria() === $l2->getCategoria()  && ($l1 != $l2) ){
          $this->aprovada=TRUE;
          $this->desafiado=$l1;
          $this->desafiante=$l2;
      } else{
          $this->aprovada= FALSE;
          $this->desafiado= null;
          $this->desafiante= null;
      }
   } public function lutar(){
       if($this->aprovada){
           $this->desafiado->apresentar();
           $this->desafiante->apresentar();
           $vencedor = rand(0, 2);
           switch ($vencedor){
            case  0:
                echo "<p>EMPATAR LUTA</p>"; $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta(); break;
                  case 1:
                    echo "<p>".$this->desafiado->getNome(). " VENCEU</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta(); break;               
                    case 2:
                        echo "<p>".$this->desafiado->getNome(). " VENCEU</p>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();  break; 
           }
       }else{
           echo "<p>LUTA NÃO PODE ACONTECER...</p>";
       }
   }
   
   public function getDesafiado() {
       return $this->desafiado;
   }

   public function getDesafiante() {
       return $this->desafiante;
   }

   public function getRounds() {
       return $this->rounds;
   }

   public function getAprovada() {
       return $this->aprovada;
   }

   public function setDesafiado($desafiado) {
       $this->desafiado = $desafiado;
   }

   public function setDesafiante($desafiante) {
       $this->desafiante = $desafiante;
   }

   public function setRounds($rounds) {
       $this->rounds = $rounds;
   }

   public function setAprovada($aprovada) {
       $this->aprovada = $aprovada;
   }


}
