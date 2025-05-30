<?php
    $idade = 4;
    $opcao = 0;
    if ($idade >= 5 && $idade <= 7){
        $opcao = 1;
    } else if ($idade >= 8 && $idade <= 10) {
        $opcao = 2;
    } else if ($idade >= 11 && $idade <= 13) {
        $opcao = 3;
    } else if ($idade >= 14 && $idade <= 17) {
        $opcao = 4;
    } else if ($idade >= 18) {
        $opcao = 5;
    } 

    switch($opcao){        
        case 1: 
            echo 'Categoria Infantil A';
        break;
        case 2: 
            echo 'Categoria Infantil B';
        break;
        case 3: 
            echo 'Categoria Juvenil A';
        break;
        case 4: 
            echo 'Categoria Juvenil B';
        break;
        case 5: 
            echo 'Categoria Adulto';
        break;
        default: 
            echo 'Idade inválida para natação';
        break;
    }
?>