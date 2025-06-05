<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $n1 = $_GET['n1'];        
        $opcao = $_GET['opcao'];
        if ($opcao == NULL){
            echo 'Você não escolheu nenhuma das opções';
        } else {
            if ($opcao == "Dobro"){
                $resultado = $n1 * 2;
                echo "O dobro de $n1 é: $resultado";
            } else if ($opcao == "Triplo"){
                $resultado = $n1 * 3;
                echo "O triplo de $n1 é: $resultado";
            }  
        }
    ?>
</body>
</html>