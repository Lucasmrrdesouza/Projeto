<?php
function navega ($pagina){
switch ($pagina) {
    case 'ale':
      require 'paginas/ale.php';
      break;
    case 'lager':
      require 'paginas/lager.php';
      break;
    case 'curiosidades':
      require 'paginas/curiosidades.php';
      break;
    case 'producao':
      require 'paginas/producao.php';
      break;
    case 'tipos':
      require 'paginas/tipos.php';
      break;
    case 'harmonizacao':
      require 'paginas/harmonizacao.php';
      break;

  default:
  require 'paginas/home.php';
    break;
}

}

 ?>
