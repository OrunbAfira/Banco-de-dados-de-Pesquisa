<?php
    class vClientes{

        public $usuario;
        public $senha;
        public $funcao;
        public $login;

        public function __construct(){
            $this->conexao = new mysqli('localhost','root', '','trabalho');
            if($this->conexao->connect_error){
                die("Conexão falhou: ".$this->conexao->connect_error);
            }
        }




        public function verifLogin(){
            $stmt = $this->conexao->prepare("SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'");
            
            $stmt = setcookie("login", $login);
            $stmt->execute();
            $stmt->close();
        }
    }
?>