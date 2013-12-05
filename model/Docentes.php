<?php 

class Docentes {

 public $id;
 public $inepEscola;
 public $codigoEscola;
 public $matriculaDocente;
 public $dataNascimento;
 public $sexo;
 public $raca;
 public $comDeficiencia;
 public $deficienciaCegueira;
 public $deficienciaBaixaVisao;
 public $deficienciaSurdez;
 public $deficienciaBaixaAudicao;
 public $deficienciaSurdocegueira;
 public $deficienciaFisica;
 public $deficienciaIntelectual;
 public $deficienciaMultipla;
 public $zonaResidencial;
 public $bairroCodigo;
 public $bairro;
 public $uf;
 public $municipioIbge;
 public $municipio;
 public $escolaridade;
 public $cursoSuperior1Situacao;
 public $cursoSuperior1Formacao;
 public $cursoSuperior1Codigo;
 public $cursoSuperior1AnoInicio;
 public $cursoSuperior1AnoFinal;
 public $cursoSuperior1TipoInstituicao;
 public $cursoSuperior1Instituicao;
 public $cursoSuperior2Situacao;
 public $cursoSuperior2Formacao;
 public $cursoSuperior2Codigo;
 public $cursoSuperior2AnoInicio;
 public $cursoSuperior2AnoFinal;
 public $cursoSuperior2TipoInstituicao;
 public $cursoSuperior2Instituicao;
 public $posgraduacaoEspecializacao;
 public $posgraduacaoMestrado;
 public $posgraduacaoDoutorado;
 public $posgraduacaoNenhum;
 public $especificoCreche;
 public $especificoPreescola;
 public $especificoAnosIniciaisFundamental;
 public $especificoAnosFinaisFundamental;
 public $especificoEnsinoMedio;
 public $especificoEja;
 public $especificoEspecial;
 public $especificoIndigena;
 public $especificoEducacaoCampo;
 public $especificoEducacaoAmbiental;
 public $especificoEducacaoDireitosHumanos;
 public $generoDiversidadeSexual;
 public $direitosCriancaAdolecente;
 public $educacaoEtnicorraciais;
 public $outros;
 public $nenhum;

 public function __construct($id,$inepEscola,$codigoEscola,$matriculaDocente,$dataNascimento,$sexo,$raca,$comDeficiencia,$deficienciaCegueira,$deficienciaBaixaVisao,$deficienciaSurdez,$deficienciaBaixaAudicao,$deficienciaSurdocegueira,$deficienciaFisica,$deficienciaIntelectual,$deficienciaMultipla,$zonaResidencial,$bairroCodigo,$bairro,$uf,$municipioIbge,$municipio,$escolaridade,$cursoSuperior1Situacao,$cursoSuperior1Formacao,$cursoSuperior1Codigo,$cursoSuperior1AnoInicio,$cursoSuperior1AnoFinal,$cursoSuperior1TipoInstituicao,$cursoSuperior1Instituicao,$cursoSuperior2Situacao,$cursoSuperior2Formacao,$cursoSuperior2Codigo,$cursoSuperior2AnoInicio,$cursoSuperior2AnoFinal,$cursoSuperior2TipoInstituicao,$cursoSuperior2Instituicao,$posgraduacaoEspecializacao,$posgraduacaoMestrado,$posgraduacaoDoutorado,$posgraduacaoNenhum,$especificoCreche,$especificoPreescola,$especificoAnosIniciaisFundamental,$especificoAnosFinaisFundamental,$especificoEnsinoMedio,$especificoEja,$especificoEspecial,$especificoIndigena,$especificoEducacaoCampo,$especificoEducacaoAmbiental,$especificoEducacaoDireitosHumanos,$generoDiversidadeSexual,$direitosCriancaAdolecente,$educacaoEtnicorraciais,$outros,$nenhum) {
        
	$this->id = $id;
	$this->inepEscola = $inepEscola;
	$this->codigoEscola = $codigoEscola;
	$this->matriculaDocente = $matriculaDocente;
	$this->dataNascimento = $dataNascimento;
	$this->sexo = $sexo;
	$this->raca = $raca;
	$this->comDeficiencia = $comDeficiencia;
	$this->deficienciaCegueira = $deficienciaCegueira;
	$this->deficienciaBaixaVisao = $deficienciaBaixaVisao;
	$this->deficienciaSurdez = $deficienciaSurdez;
	$this->deficienciaBaixaAudicao = $deficienciaBaixaAudicao;
	$this->deficienciaSurdocegueira = $deficienciaSurdocegueira;
	$this->deficienciaFisica = $deficienciaFisica;
	$this->deficienciaIntelectual = $deficienciaIntelectual;
	$this->deficienciaMultipla = $deficienciaMultipla;
	$this->zonaResidencial = $zonaResidencial;
	$this->bairroCodigo = $bairroCodigo;
	$this->bairro = $bairro;
	$this->uf = $uf;
	$this->municipioIbge = $municipioIbge;
	$this->municipio = $municipio;
	$this->escolaridade = $escolaridade;
	$this->cursoSuperior1Situacao = $cursoSuperior1Situacao;
	$this->cursoSuperior1Formacao = $cursoSuperior1Formacao;
	$this->cursoSuperior1Codigo = $cursoSuperior1Codigo;
	$this->cursoSuperior1AnoInicio = $cursoSuperior1AnoInicio;
	$this->cursoSuperior1AnoFinal = $cursoSuperior1AnoFinal;
	$this->cursoSuperior1TipoInstituicao = $cursoSuperior1TipoInstituicao;
	$this->cursoSuperior1Instituicao = $cursoSuperior1Instituicao;
	$this->cursoSuperior2Situacao = $cursoSuperior2Situacao;
	$this->cursoSuperior2Formacao = $cursoSuperior2Formacao;
	$this->cursoSuperior2Codigo = $cursoSuperior2Codigo;
	$this->cursoSuperior2AnoInicio = $cursoSuperior2AnoInicio;
	$this->cursoSuperior2AnoFinal = $cursoSuperior2AnoFinal;
	$this->cursoSuperior2TipoInstituicao = $cursoSuperior2TipoInstituicao;
	$this->cursoSuperior2Instituicao = $cursoSuperior2Instituicao;
	$this->posgraduacaoEspecializacao = $posgraduacaoEspecializacao;
	$this->posgraduacaoMestrado = $posgraduacaoMestrado;
	$this->posgraduacaoDoutorado = $posgraduacaoDoutorado;
	$this->posgraduacaoNenhum = $posgraduacaoNenhum;
	$this->especificoCreche = $especificoCreche;
	$this->especificoPreescola = $especificoPreescola;
	$this->especificoAnosIniciaisFundamental = $especificoAnosIniciaisFundamental;
	$this->especificoAnosFinaisFundamental = $especificoAnosFinaisFundamental;
	$this->especificoEnsinoMedio = $especificoEnsinoMedio;
	$this->especificoEja = $especificoEja;
	$this->especificoEspecial = $especificoEspecial;
	$this->especificoIndigena = $especificoIndigena;
	$this->especificoEducacaoCampo = $especificoEducacaoCampo;
	$this->especificoEducacaoAmbiental = $especificoEducacaoAmbiental;
	$this->especificoEducacaoDireitosHumanos = $especificoEducacaoDireitosHumanos;
	$this->generoDiversidadeSexual = $generoDiversidadeSexual;
	$this->direitosCriancaAdolecente = $direitosCriancaAdolecente;
	$this->educacaoEtnicorraciais = $educacaoEtnicorraciais;
	$this->outros = $outros;
	$this->nenhum = $nenhum;

	}
 public function __set($name, $value) {
        	$this->$name = $value;
        }

 public function __get($name) {
        return 	$this->$name;
	}

}
?>