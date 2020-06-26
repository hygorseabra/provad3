<?php


    class SuperHeroi{
        private $id;
        private $nome;
        private $poderEspecial;
        private $energia;
        private $forca;
        private $origem;

        public function __construct ($id, $nome, $poderEspecial, $energia, $forca, $origem){
            $this->id = $id;
            $this->nome = $nome;
            $this->poderEspecial = $poderEspecial;
            $this->energia = $energia;
            $this->forca = $forca;
            $this->origem = $origem; 
        }

        public function getId()
        {
                return $this->id;
        }

   
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

  
        public function getNome()
        {
                return $this->nome;
        }

  
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }


        public function getPoderEspecial()
        {
                return $this->poderEspecial;
        }

        public function setPoderEspecial($poderEspecial)
        {
                $this->poderEspecial = $poderEspecial;

                return $this;
        }

        public function getEnergia()
        {
                return $this->energia;
        }

        public function setEnergia($energia)
        {
                $this->energia = $energia;

                return $this;
        }

        public function getForca()
        {
                return $this->forca;
        }

        public function setForca($forca)
        {
                $this->forca = $forca;

                return $this;
        }


        public function setOrigem($origem){
                $this->origem = $origem;

                return $this;
        }

         public function getOrigem(){
                return $this->origem;
        }

        public function calcularPoderMedio(){
            return ($this->energia * $this->forca)/2;
        }

        public function aumentarEnergia(){
            return $this->energia * 119128617;
        }

       
    }

   

    $heroi1 = new SuperHeroi("1","Batman","Dinheiro", 1000000, 10000000, "Gotham");
    $heroi2 = new SuperHeroi("2", "Harry Potter", "Magia",700, 10000, "Inglaterra");
    $heroi3 = new SuperHeroi("3","Goku", "Super sayajin",10000,90000, "Japão" );
    $heroi4 = new SuperHeroi("4", "Flash", "Velocidade", 1000, 10000, "Central City");

    echo $heroi1->aumentarEnergia();


?>