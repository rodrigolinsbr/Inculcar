<?
require_once './control/autoload.php';

//define diretorio raiz 
define("RAIZ",  getcwd());
Controlador::executar();


//classe de saida
$principal = Controlador::executarController("default",
 Controlador::$bancoServidor,
 Controlador::$bancoNome,
 Controlador::$bancoUsuario,
 Controlador::$bancoSenha,"");

        
$escola1 = ucfirst(strtolower($principal->out->notas[0]->nome));
$escola2 = ucfirst(strtolower($principal->out->notas[1]->nome));
$escola3 = ucfirst(strtolower($principal->out->notas[2]->nome));

//carrega template
require  './view/index.php';
?>

