<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class AlunosDAO {
    
    public $message;
    private $con;
    public $alunos;

    public function __construct($con) {
        $this->con = $con;
    }
    
    
    public function consultarAlunosPorCodigoInep($inepEscola){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->alunos =  Array();
        $sql = "SELECT * FROM alunos WHERE inep_escola =".$inepEscola." ORDER BY inep_escola";
        
        $resultado = $this->con->query($sql);
        
        if($resultado->rowCount()>0){
            foreach ($resultado as $value) {
                    $alunos = new Alunos($value['id'],
                        $value['inep_escola'],
                        $value['codigo_escola'],
                        $value['matricula_aluno'],
                        $value['data_nascimento'],
                        $value['sexo'],
                        $value['raca'],
                        $value['uf_nascimento'],
                        $value['codigo_municipio_nascimento'],
                        $value['municipio_nascimento'],
                        $value['zona_residencia'],
                        $value['codigo_bairro'],
                        $value['bairro'],
                        $value['uf'],
                        $value['codigo_municipio'],
                        $value['municipio'],
                        $value['deficiencia'],
                        $value['deficiencia_cegueira'],
                        $value['deficiencia_baixavisao'],
                        $value['deficiencia_surdez'],
                        $value['deficiencia_baixaaudicao'],
                        $value['deficiencia_surdocegueira'],
                        $value['deficiencia_fisica'],
                        $value['deficiencia_intelectual'],
                        $value['deficiencia_multipla'],
                        $value['deficiencia_autismo'],
                        $value['deficiencia_asperger'],
                        $value['deficiencia_rett'],
                        $value['deficiencia_desintegrativo'],
                        $value['deficiencia_superdotacao']);        
                  
                    array_push($this->alunos, $alunos);

                }  
            $this->message = "Foram encontados ".$resultado->rowCount()." alunos."; 
        }else{
            $this->message = "A consulta não encontrou nenhum alunos"; 
        }
        //carrega array de nome e descrição 

        
    }

    
}

?>
