<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DocentesDAO {
    
    public $message;
    private $con;
    public $docentes;

    public function __construct($con) {
        $this->con = $con;
    }
        
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function consultarDocentes($inepEscola){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->docentes =  Array();
        $sql = "SELECT * FROM docentes WHERE inep_escola =".$inepEscola." ORDER BY inep_escola";
        
        $resultado = $this->con->query($sql);
        
        if($resultado->rowCount()>0){
            foreach ($resultado as $value) {
                    $docente = new Docentes($value['id'],
                        $value['inep_escola'],
                        $value['codigo_escola'],
                        $value['matricula_docente'],
                        $value['data_nascimento'],
                        $value['sexo'],
                        $value['raca'],
                        $value['com_deficiencia'],
                        $value['deficiencia_cegueira'],
                        $value['deficiencia_baixa_visao'],
                        $value['deficiencia_surdez'],
                        $value['deficiencia_baixa_audicao'],
                        $value['deficiencia_surdocegueira'],
                        $value['deficiencia_fisica'],
                        $value['deficiencia_intelectual'],
                        $value['deficiencia_multipla'],
                        $value['zona_residencial'],
                        $value['bairro_codigo'],
                        $value['bairro'],
                        $value['uf'],
                        $value['municipio_ibge'],
                        $value['municipio'],
                        $value['escolaridade'],
                        $value['curso_superior1_situacao'],
                        $value['curso_superior1_formacao'],
                        $value['curso_superior1_codigo'],
                        $value['curso_superior1_ano_inicio'],
                        $value['curso_superior1_ano_final'],
                        $value['curso_superior1_tipo_instituicao'],
                        $value['curso_superior1_instituicao'],
                        $value['curso_superior2_situacao'],
                        $value['curso_superior2_formacao'],
                        $value['curso_superior2_codigo'],
                        $value['curso_superior2_ano_inicio'],
                        $value['curso_superior2_ano_final'],
                        $value['curso_superior2_tipo_instituicao'],
                        $value['curso_superior2_instituicao'],
                        $value['posgraduacao_especializacao'],
                        $value['posgraduacao_mestrado'],
                        $value['posgraduacao_doutorado'],
                        $value['posgraduacao_nenhum'],
                        $value['especifico_creche'],
                        $value['especifico_preescola'],
                        $value['especifico_anos_iniciais_fundamental'],
                        $value['especifico_anos_finais_fundamental'],
                        $value['especifico_ensino_medio'],
                        $value['especifico_eja'],
                        $value['especifico_especial']);      
                  
                    array_push($this->docentes, $docente);

                }  
            $this->message = "Foram encontados ".$resultado->rowCount()." docentes."; 
        }else{
            $this->message = "A consulta não encontrou nenhum docente"; 
        }
        //carrega array de nome e descrição 

        
    }

    
}

?>
