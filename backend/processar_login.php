<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  if (!empty($email) && !empty($senha)) {
    // Conecta ao banco de dados (substitua os valores pelas suas configurações)
    $host = "localhost";
    $usuario = "root";
    $senha_bd = "";
    $nome_bd = "utecdb";

    $conexao = new mysqli($host, $usuario, $senha_bd, $nome_bd);

    // Verifica se houve erro na conexão
    if ($conexao->connect_error) {
      die("Erro na conexão: ".$conexao->connect_error);
    }

    // Consulta o banco de dados para verificar as credenciais
    $query = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
    $resultado = $conexao->query($query);

    if ($resultado->num_rows === 1) {
      // Usuário autenticado com sucesso
      echo "Login realizado com sucesso!";
      // Aqui você pode redirecionar para a página do usuário logado, se desejar
    } else {
      // Credenciais inválidas
      echo "E-mail ou senha incorretos.";
    }
    $conexao->close();
  } else {
    // Campos em branco
    echo "Email ou palavrapass errada!!";
  }
  echo'<br>'.$email;
  echo'<br>'.$senha;
}
?>
