<?php


class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitoria;
    private $derrotas;
    private $empates;
    

   public function apresentar(){
       echo "<h3><p> --------------------------------------------------------------------------------------- </p>";
       echo "<p>CHEGOU A HORA! O LUTADOR " . $this->getNome();
       echo " DE NACIONALIDADE " . $this->getNacionalidade();
       echo ", TEM  " . $this->getIdade() . " ANOS, PESA " .  $this->getPeso() . " KG, ";
       echo " TEM " . $this->getAltura() . " DE ALTURA, ";
       echo $this->getVitoria() . " VITÓRIAS, ";
       echo $this->getDerrotas() . " DERROTAS E " . $this->getEmpates() . " EMPATE.</h3>";
   }
   public function status(){
       
       echo "<h5><p> --------------------------------------------- LUTADOR --------------------------------------------------------- </p>";
       echo "<p>" . $this->getNome() . " É UM LUTADOR DE PESO " . $this->getCategoria();
       echo " GANHOU " . $this->getVitoria() . " VEZES, ";
       echo "PERDEU " . $this->getDerrotas() . " VEZES ";
       echo "E JÁ EMPATOU " . $this->getEmpates() . " VEZES. </h5>";
   }
   public function ganharLuta(){
       $this->setVitoria($this->getVitoria() + 1);
   }
   public function perderLuta(){
       $this->setDerrotas($this->getDerrotas() + 1);
   }
   public function empatarLuta(){
       $this->setEmpates($this->getEmpates() + 1);
   }

   public function Lutador($n,$na,$id,$alt,$p,$v,$d,$emp){
        $this->nome=$n;
        $this->nacionalidade=$na;
        $this->idade=$id;
        $this->altura=$alt;
        $this->setPeso($p);
        $this->vitoria=$v;
        $this->derrotas=$d;
        $this->empates=$emp;
    }
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitoria() {
        return $this->vitoria;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function setNacionalidade($na) {
        $this->nacionalidade = $na;
    }

    public function setIdade($id) {
        $this->idade = $id;
    }

    public function setAltura($alt) {
        $this->altura = $alt;
    }

    public function setPeso($p) {
        $this->peso = $p;
        $this->setCategoria();
    }

    private function setCategoria( ) {
        if($this->peso < 52.2){
            $this->categoria="INVÁLIDO";
        }elseif($this->peso <= 70.3){
            $this->categoria="LEVE";
        }elseif($this->peso <= 83.9){
            $this->categoria="MEDIO";
        }elseif($this->peso <= 120.2){
            $this->categoria="PESADO";
        }else{
            $this->categoria="INVÁLIDO";
        }
    }

    public function setVitoria($v) {
        $this->vitoria = $v;
    }

    public function setDerrotas($d) {
        $this->derrotas = $d;
    }

    public function setEmpates($emp) {
        $this->empates = $emp;
    }


}
