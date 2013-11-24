<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DocentesTurmasDAO{
    
    public $message;
    private $con;
    public $docentesTurmas;

    public function __construct($con) {
        $this->con = $con;
    }
        
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function consultarDocentesTurmas($inepEscola){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->docentesTurmas =  Array();
        $sql = "SELECT * FROM docentesturmas WHERE inep_escola =".$inepEscola." ORDER BY inep_escola";
        
        $resultado = $this->con->query($sql);
        
        if($resultado->rowCount()>0){
            foreach ($resultado as $value) {
                    $docenteTurma = new DocentesTurmas($value['id'],
                        $value['inep_escola'],
                        $value['codigo_escola'],
                        $value['matricula_docente'],
                        $value['codigo_turma'],
                        $value['funcao_docente'],
                        $value['tipo_vinculo'],
                        $value['codigo_disciplina1'],
                        $value['codigo_disciplina2'],
                        $value['codigo_disciplina3'],
                        $value['codigo_disciplina4'],
                        $value['codigo_disciplina5'],
                        $value['codigo_disciplina6'],
                        $value['codigo_disciplina7'],
                        $value['codigo_disciplina8'],
                        $value['codigo_disciplina9'],
                        $value['codigo_disciplina10'],
                        $value['codigo_disciplina11']);    
                  
                    array_push($this->docentesTurmas, $docenteTurma);

                }  
            $this->message = "Foram encontados ".$resultado->rowCount()." docentesTurma."; 
        }else{
            $this->message = "A consulta não encontrou nenhum docenteTurma"; 
        }
        //carrega array de nome e descrição 

        
    }

    
}

?>
