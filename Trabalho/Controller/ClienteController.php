<?php
// controller/ClienteController.php
require_once __DIR__ .'/../model/Clientes.php';

class ClienteController {
    public function listar() {
        $clientes = new Clientes();
        $clientes = $clientes->listar();

        $_REQUEST['clientes'] = $clientes;

        require_once __DIR__ . '/../index.php';
    }


    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['nome'], $_POST['usuario'], $_POST['senha'], $_POST['email'], $_POST['funcao'])) {
                $clientes = new Clientes();
                $clientes->nome = $_POST['nome'];
                $clientes->usuario = $_POST['usuario'];
                $clientes->senha = $_POST['senha'];
                $clientes->email = $_POST['email'];
                $clientes->funcao = $_POST['funcao'];
                $clientes->salvar();
                header('Location: index.php');
                exit();
            } else {
                echo "Erro: Todos os campos são obrigatórios.";
            }
        }
        require_once __DIR__ . '/../index.php';
    }

public function verifLogin(){
    $vClientes = new vClientes();
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $vClientes->login = $_POST['login'];
        $vClientes->usuario = $_POST['usuario'];
        $vClientes->senha = $_POST['senha'];
        

    }
}

public function editar() {
    $clientes = new Clientes();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $clientes->id = $_POST['id'];
    $clientes->nome = $_POST['nome'];
    $clientes->atualizar();
    header('Location: index.php');
    exit();
    } else {
    $id = $_GET['id'];
    $clientes = $clientes->$id;
    $_REQUEST['clientes'] = $clientes;
    require_once __DIR__ . '/../view/cliente_form.php';
    }
    }
}
?>
