<?php
    // Método POST
    /* if(isset($_POST['submit'])){
        // print_r('Nome: '.$_POST['usuario']);
        // print_r('<br>Senha: '.$_POST['senha']);
        // INCLUIR A CONEXÃO 
        include_once('server.php');
    
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
    
        $result = mysqli_query($conexao, "INSERT INTO login(user, senha) VALUES('$usuario', '$senha')");
    }    
    */
    // Método GET
    if (isset($_GET['submit']) && !empty($_GET['usuario']) && !empty($_GET['senha'])){
        //print_r($_REQUEST); // RECUPERA TODOS OS DADOS ENVIADOS
        
        // precisa verificar se existe o usuário e senha no banco
        include_once('server.php'); // ACESSANDO A CONEXÃO
        $usuario = $_GET['usuario'];
        $senha = $_GET['senha'];
        
        $sql = "SELECT * FROM login WHERE user = '$usuario' AND senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) > 0){ // se tiver mais de uma linha de registros iguais ao usuário e senha
            header('Location: home.html'); // navega para o home
        } else {
            echo "Não há esse usuário no BANCO";
        }

    }
?>