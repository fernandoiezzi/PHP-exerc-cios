<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papo de pescador</title>
</head>
<body>
    <fieldset>
        <form method="post">
        <h3><label>Informe o peso do peixe</label></h3>
        <input type="number" name="peso" id="peso">KG<br>
        <button type="submit">Calcular excesso</button>
        </form>
    </fieldset>
</body>
</html>
<?php
 if ($_POST){
    $peso = $_POST['peso'];
     if ($peso <= 50){
        print "Dessa vez não precisará pagar multa!";
     }else {
       $excesso = $peso - 50;
       $multa = $excesso * 4;
       print "História bacana. Por conta disso terá que pagar R$ $multa";
     }
 }