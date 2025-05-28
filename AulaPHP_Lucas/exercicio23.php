<?php 
//  Faça um código PHP que recebe o salário informado pelo usuário e calcula o salário aumentado em 30%
$nomeCompleto = 'João Cléber rodrigue';
// explode - delimita a string, por exemplo, define que a primeria array será até o ' '.
$nome = explode(' ', $nomeCompleto); 
$primeiroNome = $nome[0];

$salario = 5670.65;
$aumento = $salario + ($salario * 0.3);

echo $primeiroNome. ' recebe '.$salario . ' com o aumento, ele(a) receberá: '. number_format($aumento, 2);
?>