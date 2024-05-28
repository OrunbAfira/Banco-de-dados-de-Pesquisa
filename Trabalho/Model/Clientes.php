<?php
    class Clientes{
        public $id;
        public $nome;
        public $usuario;
        public $senha;
        public $email;
        public $funcao;
        private $conexao;
        public function __construct(){
            $this->conexao = new mysqli('localhost','root', '','trabalho');
            if($this->conexao->connect_error){
                die("Conexão falhou: ".$this->conexao->connect_error);
            }
        }

        public function salvar(){
            $stmt = $this->conexao->prepare("INSERT INTO usuarios(nome, usuario, senha, email, funcao) VALUES(?, ?, ?, ?, ?)");
            if (!$stmt) {
                die("Erro na preparação da declaração: " . $this->conexao->error);
            }
            $stmt->bind_param("sssss", $this->nome, $this->usuario, $this->senha, $this->email, $this->funcao);
            $stmt->execute();
            $stmt->close();
        }

        

        public function editar(){
            $stmt = $this->conexao->prepare("");
        }
    }