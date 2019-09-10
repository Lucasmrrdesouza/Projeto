<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Teste Tabela</title>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="../js/popper.min.js"></script>
		<link rel="stylesheet" href="../bootstrap//bootstrap.min.css">
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#listar-usuario').DataTable({
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "../libs/testePesquisar.php",
					"type": "POST"
				}
			});
		} );
		</script>
	</head>
	<body>
		<body>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
			                        <li class="nav-item dropdown">
			                          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDropUsuario">
			                            Usuário
			                          </a>
			                          <div class="dropdown-menu">
			                            <a class="dropdown-item" href="formulario.php">Cadastrar</a>
			                            <a class="dropdown-item" href="listar.php">Listar</a>
			                            <a class="dropdown-item" href="testeTabela.php">Tabela</a>
			                          </div>
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
		<h1>Listar usuários</h1>
		<table id="listar-usuario" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Nome</th>
					<th>E-mail</th>
				</tr>
			</thead>
		</table>
	</body>
</html>
