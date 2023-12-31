<?php include_once('../db/dbconfig.php'); 
    $sql = "SELECT * FROM taxiutec";

    $result = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxí UTEC</title>
    <link rel="stylesheet" href="../style/styleCliente.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    
    <header>
        <div class="logo"><img src="../img/taxiutec-logo.png " alt=""></div>

        <nav>
            <a href="#home">Home</a>
            <a href="#opp1">Escolher Carro</a>
            <a href="#opp2">Historico</a>
        </nav>

        <div class="navbar-user">
            <div id="navbar" class="fas fa-bars"></div>
            <div class="user">
                <a href="../index.php">Log out</a>
            </div>
        </div>

    </header>

    <?php
        for($i=0;$i<6;$i++)
            echo'<br>';
    ?>
 
    <section class="card text-white bg-secondary mb-3">
        
            <div id="opp1">
            <h4 class="card-title">Escolher Carro</h4>
                            
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Matricula</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Preço/KM</th>
                    <th scope="col">Vel. Média</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Pos. X</th>
                    <th scope="col">Pos. Y</th>
                    <th scope="col">Motorista</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo'<tr>';
                            echo"<td>".$user_data['matricula']."</td>";
                            echo"<td>".$user_data['modelo']."</td>";
                            echo"<td>".$user_data['preco']."</td>";
                            echo"<td>".$user_data['velmedia']."</td>";
                            echo"<td>".$user_data['tipo']."</td>";
                            echo"<td>".$user_data['posx']."</td>";
                            echo"<td>".$user_data['posy']."</td>";
                            echo"<td>".$user_data['id_motorista']."</td>";
                            echo'<td> <a id="dcar" name="dcar" class="btn btn-info" href="#"> 
                                <i class="bi bi-car-front-fill"></i>
                            </a></td>';
                            echo'<tr>';  
                        } 
                    ?> 
                </tbody>
            </table> 
            
        

            <h4>Coordenadas de Cliente</h4>
                <div style="max-width: 7rem;">
                    <input type="number" class="form-control" id="clt_px" name="clt_px" placeholder="XX" width="2px" min="0" max="99">  -    
                    <input type="number" class="form-control" id="clt_py" name="clt_py" placeholder="YY" min="0" max="99">
                </div>

                <h4 class="card-title">Coordenadas do Carro</h4>
                <div style="max-width: 7rem;">
                    <input type="number" class="form-control" id="car_dx" name="car_dx" placeholder="XX" width="5px" max="99" min="0">
                    <input type="number" class="form-control" id="car_dy" name="car_dy" placeholder="YY" maxlength="2" max="99" min="0">
                </div>
                <br>

                <button id="calcularBtn" class="btn btn-info" onclick="calcularDistancia();">Calcular distância</button>

            <div>
                <p>Distância entre o Cliente e Motorista</p>
                 <input type="text" id="result" readonly placeholder="KM"> 
            </div>


                <h4 class="card-title">Coordenadas do Destino</h4>
                <div style="max-width: 7rem;">
                    <input type="number" class="form-control" id="clt_dx" name="clt_dx" placeholder="XX" width="5px" max="99" min="0">
                    <input type="number" class="form-control" id="clt_dy" name="clt_dy" placeholder="YY" max="99" min="0">
                </div>
                <h4 class="card-title">Preço por KM do Carro Escolhido</h4>
                <div style="max-width: 7rem;">
                    <input type="number" class="form-control" id="preco" name="preco" placeholder="XX" max="99" min="0">
                </div>
                <br>

                

            <div>
                <p>Distância da Viagem</p>
                 <input type="text" id="result1" name="" readonly placeholder="KM"> 
            </div>
            <div>
                <p>Tempo da Viagem</p>
                 <input type="text" id="tempo" name="tempo">
            </div>
            <div>
                <p>Valor a pagar</p>
                 <input type="text" id="money" name="money">
            </div>
            <div>
                <h4>Classificar Motorista</h4>
                <input type="text" id="point" name="point">
            </div>

            <button id="calcularBtn" class="btn btn-info" onclick="calcular();">Calcular</button>

            <button type="submit" class="btn btn-success">Solicitar</button>        
        </div>

        
    </section>

    <script src="../scripts/cliente.js"></script>
</body>
</html>