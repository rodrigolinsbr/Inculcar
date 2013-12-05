<?php 

class Disciplinas {

 public $id;
 public $codigo_disciplina;
 public $descricao_disciplinas;

 public function __construct($id,$codigo_disciplina,$descricao_disciplinas) {
        
	$this->id = $id;
	$this->codigo_disciplina = $codigo_disciplina;
	$this->descricao_disciplinas = $descricao_disciplinas;

	}
 public function __set($name, $value) {
        	$this->$name = $value;
        }

 public function __get($name) {
        return 	$this->$name;
	}

}
?>