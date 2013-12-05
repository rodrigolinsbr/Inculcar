<?php 

class DocentesTurmas {

 public $id;
 public $inepEscola;
 public $codigoEscola;
 public $matriculaDocente;
 public $codigoTurma;
 public $funcaoDocente;
 public $tipoVinculo;
 public $codigoDisciplina1;
 public $codigoDisciplina2;
 public $codigoDisciplina3;
 public $codigoDisciplina4;
 public $codigoDisciplina5;
 public $codigoDisciplina6;
 public $codigoDisciplina7;
 public $codigoDisciplina8;
 public $codigoDisciplina9;
 public $codigoDisciplina10;
 public $codigoDisciplina11;

 public function __construct($id,$inepEscola,$codigoEscola,$matriculaDocente,$codigoTurma,$funcaoDocente,$tipoVinculo,$codigoDisciplina1,$codigoDisciplina2,$codigoDisciplina3,$codigoDisciplina4,$codigoDisciplina5,$codigoDisciplina6,$codigoDisciplina7,$codigoDisciplina8,$codigoDisciplina9,$codigoDisciplina10,$codigoDisciplina11) {
        
	$this->id = $id;
	$this->inepEscola = $inepEscola;
	$this->codigoEscola = $codigoEscola;
	$this->matriculaDocente = $matriculaDocente;
	$this->codigoTurma = $codigoTurma;
	$this->funcaoDocente = $funcaoDocente;
	$this->tipoVinculo = $tipoVinculo;
	$this->codigoDisciplina1 = $codigoDisciplina1;
	$this->codigoDisciplina2 = $codigoDisciplina2;
	$this->codigoDisciplina3 = $codigoDisciplina3;
	$this->codigoDisciplina4 = $codigoDisciplina4;
	$this->codigoDisciplina5 = $codigoDisciplina5;
	$this->codigoDisciplina6 = $codigoDisciplina6;
	$this->codigoDisciplina7 = $codigoDisciplina7;
	$this->codigoDisciplina8 = $codigoDisciplina8;
	$this->codigoDisciplina9 = $codigoDisciplina9;
	$this->codigoDisciplina10 = $codigoDisciplina10;
	$this->codigoDisciplina11 = $codigoDisciplina11;

	}
 public function __set($name, $value) {
        	$this->$name = $value;
        }

 public function __get($name) {
        return 	$this->$name;
	}

}
?>