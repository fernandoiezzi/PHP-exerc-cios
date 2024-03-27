<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de números</title>
</head>
<body>
    <fieldset>
        <form method="post">
            <label>Informe o PRIMEIRO número: </label>
            <input type="number" name="valor1" id="valor1"><br>
            <label>Informe o SEGUNDO número: </label>
            <input type="number" name="valor2" id="valor2"><br>
            <button type="submit">SOMAR</button>
        </form>
    </fieldset>
</body>
</html>
<?php 
if ($_POST){
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$soma = $valor1 + $valor2;
 echo 'A soma de '. $valor1 . ' + ' . $valor2 . ' é: '.  $soma;
}