<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class TurmasDAO{
    
    public $message;
    private $con;
    public $turmas;

    public function __construct($con) {
        $this->con = $con;
    }
        
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function consultarTurmasEscola($inepEscola){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->turmas =  Array();
        $sql = "SELECT * FROM turmas WHERE inep_escola =".$inepEscola." ORDER BY inep_escola";
        
        $resultado = $this->con->query($sql);
        
        if($resultado->rowCount()>0){
            foreach ($resultado as $value) {
                   $turma = new Turmas($value['id'],
                        $value['inep_escola'],
                        $value['codigo_escola'],
                        $value['codigo_turma'],
                        $value['nome_turma'],
                        $value['horario_hora_inicial'],
                        $value['horario_minuto_inicial'],
                        $value['horario_hora_final'],
                        $value['horario_minuto_final'],
                        $value['domingo'],
                        $value['segundafeira'],
                        $value['tercafeira'],
                        $value['quartafeira'],
                        $value['quintafeira'],
                        $value['sextafeira'],
                        $value['sabado'],
                        $value['tipo_atendimento'],
                        $value['mais_educacao'],
                        $value['codigo_atividade1'],
                        $value['codigo_atividade2'],
                        $value['codigo_atividade3'],
                        $value['codigo_atividade4'],
                        $value['codigo_atividade5'],
                        $value['codigo_atividade6'],
                        $value['braille'],
                        $value['recurso_otico_naootico'],
                        $value['estrategia_desenvolvimento_mentais'],
                        $value['tecnicas_orientacao_mobilidade'],
                        $value['libras'],
                        $value['caa'],
                        $value['estrategias_enriquecimento_curricular'],
                        $value['soroban'],
                        $value['informatica_acessivel'],
                        $value['lingua_portuguesa_escrita'],
                        $value['modalidade'],
                        $value['etapa_ensino'],
                        $value['disciplina_quimica'],
                        $value['disciplina_fisica'],
                        $value['disciplina_matematica'],
                        $value['disciplina_biologia'],
                        $value['disciplina_ciencias'],
                        $value['disciplina_portugues'],
                        $value['disciplina_ingles'],
                        $value['disciplina_espanhol'],
                        $value['disciplina_frances'],
                        $value['disciplina_outralingua'],
                        $value['disciplina_artes'],
                        $value['disciplina_educacao_fisica'],
                        $value['disciplina_historia'],
                        $value['disciplina_geografia'],
                        $value['disciplina_filosofia'],
                        $value['disciplina_estudos_sociais'],
                        $value['disciplina_socilogia'],
                        $value['disciplina_informatica'],
                        $value['disciplina_profissionalizante'],
                        $value['disciplina_especiais'],
                        $value['disciplina_sociocultural'],
                        $value['disciplina_libras'],
                        $value['disciplina_pedagogicas'],
                        $value['disciplina_religiao'],
                        $value['disciplina_indigena'],
                        $value['disciplina_outras'],
                        $value['turma_sem_docente']);    
                  
                    array_push($this->turmas, $turma);

                }  
            $this->message = "Foram encontados ".$resultado->rowCount()." turmas."; 
        }else{
            $this->message = "A consulta não encontrou nenhum turma"; 
        }
        //carrega array de nome e descrição 

        
    }

    
}

?>
