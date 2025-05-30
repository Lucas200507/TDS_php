<!-- Faça um código PHP que utiliza if e else para verificar se um número é positivo, negativo ou zero: -->
<?php 
    $num = 9;
    if ($num > 0){
        echo 'O número é positivo';
    } else if ($num < 0){
        echo 'O número é negativo';
    } else {
        echo 'O número é igual a zero';
    }

    echo '<br> Número: '.$num;
?>