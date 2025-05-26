<?php
    $instrutor = "Rafael";
    $multi = 1;
    for ($i = 1; $i <= 5; $i++){
        $num[$i] = rand(1, 10); // Gerando números aleátorios entre 1 e 10
        echo "Número ".$i .": ".$num[$i]."<br>";
        $multi = $num[$i] * $multi;
    }
    echo "<br><br>Instrutor: ".$instrutor . " a multiplicação dos 5 números é: ".$multi;

?>