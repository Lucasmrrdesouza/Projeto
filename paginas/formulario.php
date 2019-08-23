
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  </script>
  <title>Formulario</title>
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand h1 mb-0" href="#">Malte&Lúpulo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navebarSite">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navebarSite">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="ale.php">Ale</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="lager.php">Lager</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="curiosidades.php">Curiosidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="harmonizacao.php">Harmonização</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="tipos.php">Tipos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="formulario.php">Cadastrar</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                          Socal
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Facebook</a>
                          <a class="dropdown-item" href="#">Twitter</a>
                          <a class="dropdown-item" href="#">Instagram</a>
                        </div>
                      </li>
                    </ul>
                    <form class="form-inline">
                      <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar...">
                      <button class="btn btn-dark" type="submit">Ok</button>
                    </form>
                  </div>
          </div>
      </nav>
    <h1>Cadastrar Usuário</h1>
    <?php
if (isset($_SESSION['msg'])) {
  echo $_SESSION['msg'];
  unset ($_SESSION['msg']);
}
     ?>
    <form class="" action="../libs/processa.php" method="post">
      <label>Nome: </label>
      <input type="text" name="nome" placeholder="Digite o nome completo">
      <br><br>
      <label>E-mail: </label>
      <input type="email" name="email" placeholder="Digite o seu principal e-mail">
      <br><br>

      <input type="submit" value="Cadastrar">

    </form>




    <script src="js/jquery-3.4.1.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
  </body>
</html>
