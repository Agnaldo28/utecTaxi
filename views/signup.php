<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Registro</title>
  <link rel="stylesheet" href="../style/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://bootswatch.com/4/quartz/bootstrap.min.css">
  <style>
    .register-form {
      margin-top: 100px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 register-form">
        <h2 class="text-center">Registro</h2>
        
        <form method="POST" action="../backend/gravar_cliente.php" id="registrationForm">
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
          </div>
          <div class="form-group">
            <label for="dob">Data de nascimento</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
          </div>
          <div class="form-group">
            <label for="morada">Morada</label>
            <input type="text" class="form-control" id="morada" name="morada" placeholder="Digite sua morada" required>
          </div>
          <div class="form-group">
            <label for="pass">Senha</label>
            <input type="password" class="form-control" id="pass" placeholder="Digite sua senha" required>
          </div>
          <div class="form-group">
            <label for="senha">Confirmar Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Confirme sua senha" required>
            <small class="text-warning" id="password-error"></small>
          </div>
          <div class="form-group">
            <label for="tipoConta" class="form-label mt-4">Tipo de Conta</label>
            <select class="form-select" id="tipoConta" name="tipoConta">
              <option id="clienteTipo" name="clienteTipo">Cliente</option>
              <option id="motoristaTipo" name="motoristaTipo">Motorista</option>
            </select>
    </div>
          <button type="submit" id="addBtn" class="btn btn-primary btn-block">Registrar</button>

          <?php
            if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];

              unset($_SESSION['msg']);
            }
          ?>

        </form>
      </div>
    </div>
  </div>


            <script src="../scripts/validation.js"></script>
</body>
</html>
