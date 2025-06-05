<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado da calculadora</h1>
    <?php
        $num1 = $_GET['n1'];
        $num2 = $_GET['n2'];        
        $num3 = $_GET['n3'];   
        $num4 = $_GET['n4'];   
        $num5 = $_GET['n5'];   
        $resultado = $num1 * $num2 * $num3 * $num4 * $num5;        
        echo "Resultado: $resultado";
    ?>
</body>
</html>