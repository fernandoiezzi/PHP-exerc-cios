<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informando um número</title>
</head>
<body>
    <form method="post">
        <label>Informe um valor</label>
        <input type="number" name="valor" id="valor">
        <button type="submit">Mostrar valor</button>
    </form>
</body>
</html>
<?php

if ($_POST){
    $valor = $_POST['valor'];
    echo 'O valor informado foi: ' . $valor;
}
