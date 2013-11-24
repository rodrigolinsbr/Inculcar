<?php 

class Alunos {

 public $id;
 public $inepEscola;
 public $codigoEscola;
 public $matriculaAluno;
 public $dataNascimento;
 public $sexo;
 public $raca;
 public $ufNascimento;
 public $codigoMunicipioNascimento;
 public $municipioNascimento;
 public $zonaResidencia;
 public $codigoBairro;
 public $bairro;
 public $uf;
 public $codigoMunicipio;
 public $municipio;
 public $deficiencia;
 public $deficienciaCegueira;
 public $deficienciaBaixaVisao;
 public $deficienciaSurdez;
 public $deficienciaBaixaAudicao;
 public $deficienciaSurdoCegueira;
 public $deficienciaFisica;
 public $deficienciaIntelectual;
 public $deficienciaMultipla;
 public $deficienciaAutismo;
 public $deficienciaAsperger;
 public $deficienciaRett;
 public $deficienciaDesintegrativo;
 public $deficienciaSuperdotacao;

 public function __construct($id,$inepEscola,$codigoEscola,$matriculaAluno,$dataNascimento,$sexo,$raca,$ufNascimento,$codigoMunicipioNascimento,$municipioNascimento,$zonaResidencia,$codigoBairro,$bairro,$uf,$codigoMunicipio,$municipio,$deficiencia,$deficienciaCegueira,$deficienciaBaixaVisao,$deficienciaSurdez,$deficienciaBaixaAudicao,$deficienciaSurdoCegueira,$deficienciaFisica,$deficienciaIntelectual,$deficienciaMultipla,$deficienciaAutismo,$deficienciaAsperger,$deficienciaRett,$deficienciaDesintegrativo,$deficienciaSuperdotacao) {
        
	$this->id = $id;
	$this->inepEscola = $inepEscola;
	$this->codigoEscola = $codigoEscola;
	$this->matriculaAluno = $matriculaAluno;
	$this->dataNascimento = $dataNascimento;
	$this->sexo = $sexo;
	$this->raca = $raca;
	$this->ufNascimento = $ufNascimento;
	$this->codigoMunicipioNascimento = $codigoMunicipioNascimento;
	$this->municipioNascimento = $municipioNascimento;
	$this->zonaResidencia = $zonaResidencia;
	$this->codigoBairro = $codigoBairro;
	$this->bairro = $bairro;
	$this->uf = $uf;
	$this->codigoMunicipio = $codigoMunicipio;
	$this->municipio = $municipio;
	$this->deficiencia = $deficiencia;
	$this->deficienciaCegueira = $deficienciaCegueira;
	$this->deficienciaBaixaVisao = $deficienciaBaixaVisao;
	$this->deficienciaSurdez = $deficienciaSurdez;
	$this->deficienciaBaixaAudicao = $deficienciaBaixaAudicao;
	$this->deficienciaSurdoCegueira = $deficienciaSurdoCegueira;
	$this->deficienciaFisica = $deficienciaFisica;
	$this->deficienciaIntelectual = $deficienciaIntelectual;
	$this->deficienciaMultipla = $deficienciaMultipla;
	$this->deficienciaAutismo = $deficienciaAutismo;
	$this->deficienciaAsperger = $deficienciaAsperger;
	$this->deficienciaRett = $deficienciaRett;
	$this->deficienciaDesintegrativo = $deficienciaDesintegrativo;
	$this->deficienciaSuperdotacao = $deficienciaSuperdotacao;

	}
 public function __set($name, $value) {
        	$this->$name = $value;
        }

 public function __get($name) {
        return 	$this->$name;
	}

}
?>