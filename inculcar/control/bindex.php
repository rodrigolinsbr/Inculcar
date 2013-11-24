<?
ini_set('display_errors',1);
//ini_set('memory_limit','512M');

require_once 'model/Conexao.php';
require_once 'model/AlunosTurmas.php';
require_once 'model/AlunosTurmasDAO.php';
require_once 'model/NotaEstrutura.php';
require_once 'model/NotaTecnologia.php';
require_once 'model/EscolasDAO.php';
require_once 'model/Escolas.php';
require_once 'model/NotaEstruturaAcesibilidade.php';
require_once 'model/NotaAtividadesComplementares.php';
require_once 'model/NotaAcesibilidadeAluno.php';
require_once 'model/Turmas.php';
require_once 'model/TurmasDAO.php';
require_once 'model/Alunos.php';
require_once 'model/AlunosDAO.php';
require_once 'model/NotasDAO.php';
require_once 'model/Notas.php';

$a = time();

$con = new Conexcao("localhost","dadosAbertos","root","");


$escolas =  new EscolasDAO($con->conec);
$escolas->consultarTodasEscolas();

$alunos = new AlunosDAO($con->conec);
$turma = new TurmasDAO($con->conec);
$notasFinais = new NotasDAO($con->conec);

foreach ($escolas->escolas as $value) {
    
    $alunos->consultarAlunosPorCodigoInep($value->inepEscola);
    $turma->consultarTurmasEscola($value->inepEscola);

  
//calcula Notas     
    $notaAcesibilidade = new NotaAcesibilidadeAluno($alunos->alunos);
    $notasAtividadeComplementares = new NotaAtividadesComplementares($turma->turmas);
    $notasEstrutura = new NotaEstrutura($value);
    $notasEstruturaAcessibilidade = new NotaEstruturaAcesibilidade($value);
    $notasTecnologia =  new NotaTecnologia($value);
    
    //calcula nota geral
    $notaGeral = $notaAcesibilidade->notaAcessibilidadeAluno + 
            $notasAtividadeComplementares->notaAtividadesComplementares +
            $notasEstrutura->notaEstrutura +
            $notasEstruturaAcessibilidade->notaEstruturaAcessibilidade +
            $notasTecnologia->notaTecnologia;
    
    $notaGeral = $notaGeral/ 5;
            
    //cria objeto nota        
    $notaX = new Notas("",
            $value->nome,
            $value->latitude,
            $value->longitude,
            $value->bairro,
            $value->telefone,
            $value->fax,
            $value->email,
            $notaGeral,
            $notaAcesibilidade->notaAcessibilidadeAluno,
            $notasAtividadeComplementares->notaAtividadesComplementares,
            $notasEstrutura->notaEstrutura,
            $notasEstruturaAcessibilidade->notaEstruturaAcessibilidade,
            $notasTecnologia->notaTecnologia);
    
    //inserir a nota
    $notasFinais->adicionarNotas($notaX);
     
}
    
echo $notasAtividadeComplementares->notaAtividadesComplementares;    


$b = time();
echo '<br> Tempo de Execução : ';
echo +$b-$a;        


?>