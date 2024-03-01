<?php
    class Usuario{
        public $nome;
        public $email;
        public $idade;


        function mostrar(){
            echo "Nome: ".$this->nome."<br>Email: ".$this->email."<br>Idade: ".$this->idade;
        }
    
    }
?>