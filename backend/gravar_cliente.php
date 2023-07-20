<?php
    include '../views/signup.php';
    session_start();

    include_once ('../db/dbconfig.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $morada = $_POST['morada'];
        $dob = $_POST['dob'];
        $senha = $_POST['senha'];

        // Query para inserir os dados do cliente na tabela
        $query = "INSERT INTO cliente ( nome, email, dob, morada, senha) 
        VALUES ('$nome', '$email', '$dob', '$morada', '$senha')";


        if (mysqli_query($connection, $query)){
            $_SESSION['msg'] = "<h3 class='text-success' style='text-align:center;'>Registado com Sucesso</h3>
            <a href='../index.php' class='btn btn-primary btn-block'>Login</a>
            ";
            header("Location: ../views/signup.php");
        }else {
            $_SESSION['msg'] = "<h3 class='text-danger' style='text-align:center;'>Falha ao registar!!</h3>";
            header("Location: ../views/signup.php");        
        }
        mysqli_close($connection);
    }
    
    
?>
    

