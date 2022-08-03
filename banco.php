<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/eff8202998.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Banco</title>
</head>

<body>
    <?php
    $nome = $_GET["nome"];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-block p-2 bg-primary text-white">
                    <p class="h1 text-white"> Ola,
                        <?php echo $nome; ?>
                    </p>
                    <p>
                </div>

                <div class="d-block p-1 bg-warning text-white"></div>

                <div class="container bg-light">
                    <div class="row">
                        <div class="col-6 text-center">
                            <div class="valores">
                                <h4 class="h4 text-primary"> R$ 550,00</h4>
                            </div>
                            <p> Saldo Disponível </p>
                        </div>
                        <div class="col-6  text-center">
                            <div class="valores">
                                <h4 class="h4 text-danger"> R$ -450,00</h4>
                            </div>
                            <p>Agendado para 05/SET</p>
                        </div>
                    </div>
                </div>
                <div class="h1 text-secondary">Acessos Rápidos</div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-xl-3 col-sm-2 bg-light">
                            <a href="#">
                                <h1><i class="fa-solid fa-qrcode"></i></h1>
                                <h6>Pagamentos</h6>
                            </a>
                        </div>
                        <div class="col-md-4 col-xl-3 col-sm-2 bg-light">
                            <a href="transferencias.php">
                                <h1><i class="fa-solid fa-arrow-right-arrow-left"></i></h1>
                                <h6>Transferencias</h6>
                            </a>
                        </div>
                        <div class="col-md-4 col-xl-3 col-sm-2 bg-light">
                            <h1><i class="fa-regular fa-file"></i></h1>
                            <h6>Extratos</h6>
                        </div>
                        <div class="col-md-4 col-xl-3 col-sm-2 bg-light">
                            <h1><i class="fa-solid fa-mobile-screen-button"></i></h1>
                            <h6>Recagar celular</h6>
                        </div>
                        <div class="col-md-4 col-xl-3 col-sm-2 bg-light">
                            <h1><i class="fa-solid fa-hands-holding-circle"></i></h1>
                            <h6>Emprestimos</h6>
                        </div>
                        <div class="col-md-4 col-xl-3 col-sm-2 bg-light">
                            <h1><i class="fa-solid fa-chart-line"></i></h1>
                            <h6>Investimentos</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <nav>
    <h2><i class="fa-solid fa-hands"></i>
</nav>

    <?php
    $vi = 10000;
    $taxa = 0.6;
    $tempo = 8;
    $vf = $vi * (1 + ($taxa / 100)) ** $tempo;
    ?>

    <h1> Investimentos </h1>

    <p>Valor esperado: <?php echo $vf; ?></p>

    <div class="col-2"></div>

    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>