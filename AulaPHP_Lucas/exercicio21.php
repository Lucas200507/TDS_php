<?php
    echo "hello";
//     echo "Média: ".$media;
$num[0] = 45;
$num[1] = 32;
$num[2] = 39;
$soma = 0;
$i = 0;
for ($i = 0; $i < 3; $i++) {
    $soma = $num[$i] + $soma;
}
    $media = $soma / 3;
    $numero_formatado = number_format($media, 2, ','); // Formata o número para duas casas decimais
    echo "A média é: ".$numero_formatado;

?>
