<?php 

class AtividadeComplementar {

 public $id;
 public $codigo_atividade;
 public $nome_atividade;
 public $codigo_area;
 public $nome_area;
 public $codigo_subarea;
 public $nome_subarea;

 public function __construct($id,$codigo_atividade,$nome_atividade,$codigo_area,$nome_area,$codigo_subarea,$nome_subarea) {
        
	$this->id = $id;
	$this->codigo_atividade = $codigo_atividade;
	$this->nome_atividade = $nome_atividade;
	$this->codigo_area = $codigo_area;
	$this->nome_area = $nome_area;
	$this->codigo_subarea = $codigo_subarea;
	$this->nome_subarea = $nome_subarea;

	}
 public function __set($name, $value) {
        	$this->$name = $value;
        }

 public function __get($name) {
        return 	$this->$name;
	}

}
?>