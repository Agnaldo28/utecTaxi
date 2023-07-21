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

    // Consulta o banco de dados para verificar as credenciais na tabela "cliente"
    $queryCliente = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
    $resultadoCliente = $conexao->query($queryCliente);

    // Consulta o banco de dados para verificar as credenciais na tabela "motorista"
    $queryMotorista = "SELECT * FROM motorista WHERE email = '$email' AND senha = '$senha'";
    $resultadoMotorista = $conexao->query($queryMotorista);

    if ($resultadoCliente->num_rows === 1) {
      echo "Seja Bem Vindo ";
      header("location: ../views/clientePage.php");
      // Aqui você pode redirecionar para a página do cliente logado, se desejar
    } elseif ($resultadoMotorista->num_rows === 1) {
      // Usuário motorista autenticado com sucesso
      echo "Seja Bem Vindo Motorista";
      header("location: ../views/motoristaPage.php");
      // Aqui você pode redirecionar para a página do motorista logado, se desejar
    } else {
      // Credenciais inválidas
      echo "E-mail ou senha incorretos.";
    }
    $conexao->close();
  } else {
    // Campos em branco
    echo "Email ou senha errados!!";
  }
}
?>




