<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="view/index.css" />
    <title>Registrar</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            
        }
        #rg{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            border-radius: 30px;
        }
        
        input{
            padding: 10px;
            border: nome;
            outline: none;
        }

        button{
            padding: 7px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        select{
            padding: 5px;
            border: nome;
            outline: none; 
        }
    </style>
</head>
<body>
    <?php
    require_once 'menu.php';
    $clientes = isset($_REQUEST['clientes']) ? $_REQUEST['clientes'] : null;
    ?>
    <div id="rg">
        <form action="/trabalho/index.php?action=<?php echo $clientes ? 'editar' : 'salvar'; ?>" method="POST">
            <h1>Registro</h1>
            <br>
            
            <input type="text" placeholder="Nome completo" id="nome" name="nome" value="<?php echo $clientes ? htmlspecialchars($clientes->nome) : ''; ?>" required>
            <br><br>
            <input type="text" placeholder="Usuario" id="usuario" name="usuario" value="<?php echo $clientes ? htmlspecialchars($clientes->usuario) : ''; ?>" required>
            <br><br>
            <input type="password" placeholder="Senha" id="senha" name="senha" value="<?php echo $clientes ? htmlspecialchars($clientes->senha) : ''; ?>" required>
            <br><br>
            <input type="text" placeholder="E-mail" id="email" name="email" value="<?php echo $clientes ? htmlspecialchars($clientes->email) : ''; ?>" required>
            <br><br>
            <input type="text" placeholder="Função" id="funcao" name="funcao" value="<?php echo $clientes ? htmlspecialchars($clientes->funcao) : ''; ?>" required>
            <br><br>
            
            <button type="submit">Enviar</button>
        </form>
        
    </div>
</body>
</html>