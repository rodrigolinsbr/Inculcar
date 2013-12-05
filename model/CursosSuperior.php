<?php 

class CursosSuperior {

 public $id;
 public $codig_area;
 public $nome_area;
 public $codigo_instituicao;
 public $nome_formacao;
 public $grau_academico;

 public function __construct($id,$codig_area,$nome_area,$codigo_instituicao,$nome_formacao,$grau_academico) {
        
	$this->id = $id;
	$this->codig_area = $codig_area;
	$this->nome_area = $nome_area;
	$this->codigo_instituicao = $codigo_instituicao;
	$this->nome_formacao = $nome_formacao;
	$this->grau_academico = $grau_academico;

	}
 public function __set($name, $value) {
        	$this->$name = $value;
        }

 public function __get($name) {
        return 	$this->$name;
	}

}
?>