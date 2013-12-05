<?
require_once './control/autoload.php';

//define diretorio raiz 
define("RAIZ",  getcwd());

Controlador::executar();

$classeSaida = Controlador::$out;

require_once './view/template.php';


?>


