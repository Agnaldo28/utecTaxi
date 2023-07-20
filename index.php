<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My First Project</title>
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://bootswatch.com/4/quartz/bootstrap.min.css">
  <style>
    .login-form {
      margin-top: 100px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 login-form">
        <h2 class="text-center">Login</h2>
        <form method="POST" action="backend/processar_login.php">
          <div class="form-group">
            <label for="email">Username</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="senha">Password</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form> <br>
        <a href="views/signup.php" class="btn btn-secondary btn-block">Registar</a>

        </a>
      </div>
    </div>
  </div>

  
  <script src="script/real-time-database.js "></script>
</body>
</html>
