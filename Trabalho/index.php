<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="/../trabalho/view/index.css" />
    <title>Pagina Principal</title>
</head>
<body>
    <?php
    require_once 'view/menu.php';
    ?>
</body>
</html>

<?php
require_once __DIR__ . '/controller/ClienteController.php';
$controller = new ClienteController();
$action = isset($_GET['action']) ? $_GET['action'] : 'listar';
switch ($action) {
case 'salvar':
$controller->salvar();
case 'verifLogin':
$controller->verifLogin();
}
