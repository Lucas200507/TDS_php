<!-- verificar se um número é par ou ímpar: -->

<?php 
    $num = 16;
    $div = $num % 2;
    if ($div == 0){
        echo 'O número é pár';
    } else {
        echo 'O número é ímpar';
    }
    echo '<br>Resto: '.$div;
?>