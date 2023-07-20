<?php


require_once "../db/dbconfig.php";

    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $morada = $_POST['morada'];
    $dob = $_POST['dob'];
    $senha = $_POST['senha'];

    // Query para inserir os dados do cliente na tabela
    $query = "INSERT INTO cliente(nome, email, dob, morada, senha) 
             VALUES ('$nome', '$email', '$dob', $morada', '$senha')";


    if(mysqli_query($connection, $query)) {
        echo "Cliente gravado na base de dados com sucesso!";
    }else {
        echo "Erro ao gravar o cliente na base de dados: ".mysqli_error($connection);
    }
    //mysqli_close($connection)


    // Inclua o arquivo de configuração do banco de dados
    require_once 'dbconfig.php';
    
    // Função para evitar injeção de SQL e tratar entradas
    function clean_input($data) {
        global $connection;
        return mysqli_real_escape_string($connection, htmlspecialchars(trim($data)));
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Receber os dados do formulário
        $nome = clean_input($_POST['nome']);
        $email = clean_input($_POST['email']);
        $morada = clean_input($_POST['morada']);
        $dob = clean_input($_POST['dob']);
        $password = password_hash(clean_input($_POST['password']), PASSWORD_DEFAULT);
    
        // Query para inserir os dados do cliente na tabela
        $query = "INSERT INTO clientes (nome, email, morada, dob, password) 
                  VALUES ('$nome', '$email', '$morada', '$dob', '$password')";
    
        // Executar a query e verificar se a inserção foi bem-sucedida
        if (mysqli_query($connection, $query)) {
            echo "Cliente gravado na base de dados com sucesso!";
        } else {
            echo "Erro ao gravar o cliente na base de dados: " . mysqli_error($connection);
        }
    }
    ?>
    
