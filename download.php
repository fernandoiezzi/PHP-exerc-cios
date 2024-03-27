<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo estimado de download</title>
</head>
<body>
    <fieldset>
        <form method="post">
            <label><h4>Informe o tamanho do arquivo (MB)</h4></label>
            <input type="text" name="arq" id="arq"><br>
            <label><h4>Informe a velocidade de sua conexão(MBPS)</h4><label>
            <input type="text" name="veloc" id="veloc"><br>
            <button type="submit">calcular estimativa de tempo</button>
        </form>
    </fieldset>
</body>
</html>
<?php
if($_POST){
    $arquivo = $_POST['arq'];
    $banda = $_POST['veloc'];
    $estimativa = $arquivo/($banda/8);
    
    if($estimativa > 60){
        $estimativa /=60; 
        echo "O tempo estimado de download é: $estimativa minutos";
    }else {
        echo "O tempo estimado de download é: $estimativa segundos";
    }
}