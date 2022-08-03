<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/eff8202998.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Transferencias</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header>
                    <div class="pos-f-t">
                        <div class="collapse" id="navbarToggleExternalContent">
                            <div class="bg-dark p-2">
                                <a href="banco.php"><h4 class="text-white">Início</h4></a>
                            </div>
                        </div>
                        <nav class="navbar navbar-dark bg-primary">
                        <p class="h1 text-white"> Transferência </p>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>  
                        </nav>
                    </div>
                    <div class="d-block p-1 bg-warning text-white"></div>
                </header>
                <section>
                    <div class="container bg-light">
                        <div class="row">
                            <div class="col-6 text-center">
                                <div class="valores">
                                    <h4 class="h4 text-primary"> Dados de Origem </h4>
                                </div>
                                <p> Conta Corrente: valor </p>
                                <form>
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="data" placeholder="19/07/2022">
                                        <small id="emailHelp" class="form-text text-muted">Selecione a data que deseja que a transferencia seja realizada.</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="valor" placeholder="Valor">
                                    </div>
                                </form>
                            </div>
                            <div class="col-6  text-center">
                                <div class="valores">
                                    <h4 class="h4 text-danger"> Dados de Destino</h4>
                                    <form>
                                        <div class="form-group">
                                            <label for="tipoConta">Tipo de Conta</label>
                                            <select class="form-control" id="tipoConta">
                                                <option>Conta Corrente</option>
                                                <option>Poupança</option>
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted">Selecione o tipo de conta que deseja utilizar para a transferencia.</small>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="agencia" placeholder="Agência">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="conta" placeholder="Conta">
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Aprovar</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Avançar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>