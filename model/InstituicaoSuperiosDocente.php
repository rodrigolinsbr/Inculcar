<?php 

class InstituicaoSuperiosDocente {

 public $id;
 public $codigo_instituicao;
 public $nome_instituicao;
 public $uf;
 public $municipio;
 public $codigo_dependencia;
 public $nome_dependencia;
 public $tipo_intituicao;
 public $situacao;

 public function __construct($id,$codigo_instituicao,$nome_instituicao,$uf,$municipio,$codigo_dependencia,$nome_dependencia,$tipo_intituicao,$situacao) {
        
	$this->id = $id;
	$this->codigo_instituicao = $codigo_instituicao;
	$this->nome_instituicao = $nome_instituicao;
	$this->uf = $uf;
	$this->municipio = $municipio;
	$this->codigo_dependencia = $codigo_dependencia;
	$this->nome_dependencia = $nome_dependencia;
	$this->tipo_intituicao = $tipo_intituicao;
	$this->situacao = $situacao;

	}
 public function __set($name, $value) {
        	$this->$name = $value;
        }

 public function __get($name) {
        return 	$this->$name;
	}

}
?>