<?php 
    $N1 = 6;
    $N2 = 9.5;
// NOTA SUBSTITUTIVA    
    $N3 = -5;
    $media = ($N1 + $N2) / 2;
    $media = number_format($media, 2);
    $recuperao = False;
    $calculando = True;

while($calculando){
    if (($N1 > 0 && $N1 < 11 ) && ($N2 > 0 && $N2 < 11 )){    
        if ($media < 6){
            echo 'Reprovado com desempenho insuficiente!!!. Média: ';        
            echo '<br>Nota: '.$media;
        } else if ($media <= 10){
            if ($media < 8){
                $recuperacao = True;
                echo 'Precisa fazer a recuperação';
                echo '<br>Nota: '.$media;
                while ($recuperacao){
                    if ($N3 < 0 || $N3 > 10 ){
                        echo '<br>Nota N3 inválida: '.$N3;
                        $calculando = False;
                        break;
                    } else {
//              SUBSTITUINDO A MENOR NOTA                
                        if ($N1 <= $N2){
                                $N1 = $N3;
                        } else {
                            $N2 = $N3;
                        }
                        $mediaN3 = ($N1 + $N2) / 2;
                        $recuperacao = False;                
                    }
                } if ($mediaN3 >= 8){
                    echo '<br> Parabéns,  você conseguiu recuperar sua nota. Está aprovado!!!';
                    echo '<br>Nota: '.$mediaN3;
                } else if ($mediaN3 < 8 && $mediaN3 > 0){
                    echo '<br> Você não conseguiu se recuperar. REPROVADO!';
                    echo '<br>Nota: '.$mediaN3;
                }
            } else if ($media >= 8 && $media <= 9.4){
                echo 'Aprovado, com desempenho regular!!';
                echo '<br>Nota: '.$media;
            } else if ($media >= 9.5 && $media <= 10){
                echo 'Aprovado com excelência!!!';
                echo '<br>Nota: '.$media;
            }   
        } 
    }  else {
        echo 'Nota inválida';
    }
    $calculando = False;
}
    

?>