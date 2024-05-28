<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="index.css" />
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            
        }
        #lg{
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
    </style>
</head>
<body>
    <?php
    require_once 'menu.php';
    $vClientes = isset($_REQUEST['vClientes']) ? $_REQUEST['vClientes'] : null;
    ?>
    <div id="lg">
        <h1>Login</h1>
        <form action="/trabalho/index.php?action=<?php echo $vClientes ?: 'verifLogin'; ?>" method="POST">
            <input type="text" placeholder="Usuario" id="usuario" name="usuario" value="<?php echo $vClientes ? htmlspecialchars($vClientes->usuario) : ''; ?>" required>
            <br><br>
            <input type="password" placeholder="Senha" id="senha" name="senha" value="<?php echo $vClientes ? htmlspecialchars($vClientes->senha) : ''; ?>" required>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>