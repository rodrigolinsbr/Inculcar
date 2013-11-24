<?php 

class Turmas {

 public $id;
 public $inep_escola;
 public $codigo_escola;
 public $codigo_turma;
 public $nome_turma;
 public $horario_hora_inicial;
 public $horario_minuto_inicial;
 public $horario_hora_final;
 public $horario_minuto_final;
 public $domingo;
 public $segundafeira;
 public $tercafeira;
 public $quartafeira;
 public $quintafeira;
 public $sextafeira;
 public $sabado;
 public $tipo_atendimento;
 public $mais_educacao;
 public $codigo_atividade1;
 public $codigo_atividade2;
 public $codigo_atividade3;
 public $codigo_atividade4;
 public $codigo_atividade5;
 public $codigo_atividade6;
 public $braille;
 public $recurso_otico_naootico;
 public $estrategia_desenvolvimento_mentais;
 public $tecnicas_orientacao_mobilidade;
 public $libras;
 public $caa;
 public $estrategias_enriquecimento_curricular;
 public $soroban;
 public $informatica_acessivel;
 public $lingua_portuguesa_escrita;
 public $modalidade;
 public $etapa_ensino;
 public $disciplina_quimica;
 public $disciplina_fisica;
 public $disciplina_matematica;
 public $disciplina_biologia;
 public $disciplina_ciencias;
 public $disciplina_portugues;
 public $disciplina_ingles;
 public $disciplina_espanhol;
 public $disciplina_frances;
 public $disciplina_outralingua;
 public $disciplina_artes;
 public $disciplina_educacao_fisica;
 public $disciplina_historia;
 public $disciplina_geografia;
 public $disciplina_filosofia;
 public $disciplina_estudos_sociais;
 public $disciplina_socilogia;
 public $disciplina_informatica;
 public $disciplina_profissionalizante;
 public $disciplina_especiais;
 public $disciplina_sociocultural;
 public $disciplina_libras;
 public $disciplina_pedagogicas;
 public $disciplina_religiao;
 public $disciplina_indigena;
 public $disciplina_outras;
 public $turma_sem_docente;

 public function __construct($id,$inep_escola,$codigo_escola,$codigo_turma,$nome_turma,$horario_hora_inicial,$horario_minuto_inicial,$horario_hora_final,$horario_minuto_final,$domingo,$segundafeira,$tercafeira,$quartafeira,$quintafeira,$sextafeira,$sabado,$tipo_atendimento,$mais_educacao,$codigo_atividade1,$codigo_atividade2,$codigo_atividade3,$codigo_atividade4,$codigo_atividade5,$codigo_atividade6,$braille,$recurso_otico_naootico,$estrategia_desenvolvimento_mentais,$tecnicas_orientacao_mobilidade,$libras,$caa,$estrategias_enriquecimento_curricular,$soroban,$informatica_acessivel,$lingua_portuguesa_escrita,$modalidade,$etapa_ensino,$disciplina_quimica,$disciplina_fisica,$disciplina_matematica,$disciplina_biologia,$disciplina_ciencias,$disciplina_portugues,$disciplina_ingles,$disciplina_espanhol,$disciplina_frances,$disciplina_outralingua,$disciplina_artes,$disciplina_educacao_fisica,$disciplina_historia,$disciplina_geografia,$disciplina_filosofia,$disciplina_estudos_sociais,$disciplina_socilogia,$disciplina_informatica,$disciplina_profissionalizante,$disciplina_especiais,$disciplina_sociocultural,$disciplina_libras,$disciplina_pedagogicas,$disciplina_religiao,$disciplina_indigena,$disciplina_outras,$turma_sem_docente) {
        
	$this->id = $id;
	$this->inep_escola = $inep_escola;
	$this->codigo_escola = $codigo_escola;
	$this->codigo_turma = $codigo_turma;
	$this->nome_turma = $nome_turma;
	$this->horario_hora_inicial = $horario_hora_inicial;
	$this->horario_minuto_inicial = $horario_minuto_inicial;
	$this->horario_hora_final = $horario_hora_final;
	$this->horario_minuto_final = $horario_minuto_final;
	$this->domingo = $domingo;
	$this->segundafeira = $segundafeira;
	$this->tercafeira = $tercafeira;
	$this->quartafeira = $quartafeira;
	$this->quintafeira = $quintafeira;
	$this->sextafeira = $sextafeira;
	$this->sabado = $sabado;
	$this->tipo_atendimento = $tipo_atendimento;
	$this->mais_educacao = $mais_educacao;
	$this->codigo_atividade1 = $codigo_atividade1;
	$this->codigo_atividade2 = $codigo_atividade2;
	$this->codigo_atividade3 = $codigo_atividade3;
	$this->codigo_atividade4 = $codigo_atividade4;
	$this->codigo_atividade5 = $codigo_atividade5;
	$this->codigo_atividade6 = $codigo_atividade6;
	$this->braille = $braille;
	$this->recurso_otico_naootico = $recurso_otico_naootico;
	$this->estrategia_desenvolvimento_mentais = $estrategia_desenvolvimento_mentais;
	$this->tecnicas_orientacao_mobilidade = $tecnicas_orientacao_mobilidade;
	$this->libras = $libras;
	$this->caa = $caa;
	$this->estrategias_enriquecimento_curricular = $estrategias_enriquecimento_curricular;
	$this->soroban = $soroban;
	$this->informatica_acessivel = $informatica_acessivel;
	$this->lingua_portuguesa_escrita = $lingua_portuguesa_escrita;
	$this->modalidade = $modalidade;
	$this->etapa_ensino = $etapa_ensino;
	$this->disciplina_quimica = $disciplina_quimica;
	$this->disciplina_fisica = $disciplina_fisica;
	$this->disciplina_matematica = $disciplina_matematica;
	$this->disciplina_biologia = $disciplina_biologia;
	$this->disciplina_ciencias = $disciplina_ciencias;
	$this->disciplina_portugues = $disciplina_portugues;
	$this->disciplina_ingles = $disciplina_ingles;
	$this->disciplina_espanhol = $disciplina_espanhol;
	$this->disciplina_frances = $disciplina_frances;
	$this->disciplina_outralingua = $disciplina_outralingua;
	$this->disciplina_artes = $disciplina_artes;
	$this->disciplina_educacao_fisica = $disciplina_educacao_fisica;
	$this->disciplina_historia = $disciplina_historia;
	$this->disciplina_geografia = $disciplina_geografia;
	$this->disciplina_filosofia = $disciplina_filosofia;
	$this->disciplina_estudos_sociais = $disciplina_estudos_sociais;
	$this->disciplina_socilogia = $disciplina_socilogia;
	$this->disciplina_informatica = $disciplina_informatica;
	$this->disciplina_profissionalizante = $disciplina_profissionalizante;
	$this->disciplina_especiais = $disciplina_especiais;
	$this->disciplina_sociocultural = $disciplina_sociocultural;
	$this->disciplina_libras = $disciplina_libras;
	$this->disciplina_pedagogicas = $disciplina_pedagogicas;
	$this->disciplina_religiao = $disciplina_religiao;
	$this->disciplina_indigena = $disciplina_indigena;
	$this->disciplina_outras = $disciplina_outras;
	$this->turma_sem_docente = $turma_sem_docente;

	}
 public function __set($name, $value) {
        	$this->$name = $value;
        }

 public function __get($name) {
        return 	$this->$name;
	}

}
?>