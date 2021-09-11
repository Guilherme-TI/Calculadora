<?php
    $campo1 = $_POST['campo1'];
    $campo2 = $_POST['campo2'];
    $operacao = $_POST['operacao'];

    switch($operacao){
        case "somar": $resultado = $campo1 + $campo2; break;
        case "subtrair": $resultado = $campo1 - $campo2; break;
        case "multiplicar": $resultado = $campo1 * $campo2; break;
        case "dividir": $resultado = $campo1 / $campo2; break;
    }
    echo $resultado;
?>