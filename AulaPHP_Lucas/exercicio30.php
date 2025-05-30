<?php 
    $pressao = 180;    
    if (is_string($pressao) || $pressao < 0){
        echo 'Valor inválido';
    } else {
        echo 'Pressão: '.$pressao.' mmHg<br>';
        if ($pressao < 90){
            echo '- RISCO: Hipotensão (baixa Pressão)';
        } else if ($pressao >= 90 && $pressao <= 119){
            echo '- Situação: Pressão Ideal';
        } else if ($pressao >= 120 && $pressao <= 129){
            echo '- Situação: Pressão normal alta';
        } else if ($pressao >= 130 && $pressao <= 139){
            echo '- Situação: Pré-hipertensão (atenção necessária)';
        } else if ($pressao >= 140 && $pressao <= 159){
            echo '- Situação: Hipertensão Estágio 1';
        } else if ($pressao >= 160 && $pressao <= 179){
            echo '- Situação: Hipertensão Estágio 2';
        } else {
            echo '- Situação: Crise hipertensiva – risco de vida!';
        }
    }
?>