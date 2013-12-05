<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class AlunosTurmasDAO {
    
    public $message;
    private $con;
    public $alunosTurmas;

    public function __construct($con) {
        $this->con = $con;
    }
        
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function consultarAlunosTurmasPorCodigoInep($inepEscola){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->alunosTurmas =  Array();
        $sql = "SELECT * FROM alunosturmas WHERE inep_escola =".$inepEscola." ORDER BY inep_escola";
        
        $resultado = $this->con->query($sql);
        
        if($resultado->rowCount()>0){
            foreach ($resultado as $value) {
                    $alunosTurmas = new AlunosTurmas($value['id'],
                        $value['inep_escola'],
                        $value['codigo_escola'],
                        $value['matricula_aluno'],
                        $value['codigo_turma'],
                        $value['etapa'],
                        $value['outro_espaco'],
                        $value['transporte_publico']);        
                  
                    array_push($this->alunosTurmas, $alunosTurmas);

                }  
            $this->message = "Foram encontados ".$resultado->rowCount()." alunosTurmas."; 
        }else{
            $this->message = "A consulta não encontrou nenhum alunosTurmas"; 
        }
        //carrega array de nome e descrição 

        
    }

    
}

?>
