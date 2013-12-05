<?php 

class AlunosTurmas {

 public $id;
 public $inepEscola;
 public $codigoEscola;
 public $matriculaAluno;
 public $codigoTurma;
 public $etapa;
 public $outroEspaco;
 public $transportePublico;

 public function __construct($id,$inepEscola,$codigoEscola,$matriculaAluno,$codigoTurma,$etapa,$outroEspaco,$transportePublico) {
        
	$this->id = $id;
	$this->inepEscola = $inepEscola;
	$this->codigoEscola = $codigoEscola;
	$this->matriculaAluno = $matriculaAluno;
	$this->codigoTurma = $codigoTurma;
	$this->etapa = $etapa;
	$this->outroEspaco = $outroEspaco;
	$this->transportePublico = $transportePublico;

	}
 public function __set($name, $value) {
        	$this->$name = $value;
        }

 public function __get($name) {
        return 	$this->$name;
	}

}
?>