<?php 
    class carro{
        public $cor;
        public $nome;
        public $marca;

        function __construct($nome, $cor, $marca){
            $this-> nome = $nome;
            $this-> cor = $cor;
            $this-> marca = $marca;
        }
        function get_nome(){
            return $this-> nome;
        }
        function get_cor(){
            return $this-> cor;
        }
        function get_marca(){
            return $this -> marca;
        }

        function __destruct(){
            echo "Esse e seus frutos: {$this-> nome, $this-> cor, $this -> marca}";
        }
            
    }
?>