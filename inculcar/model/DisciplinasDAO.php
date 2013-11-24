<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DisciplinasDAO {
    
    public $message;
    private $con;
    public $disciplinas;

    public function __construct($con) {
        $this->con = $con;
    }
        
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function consultarDisciplinaPorCodigo($codigoDisciplina){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->disciplinas =  Array();
        $sql = "SELECT * FROM tabela_de_disciplinas WHERE codigo_disciplina =".$codigoDisciplina." ORDER BY codigo_disciplina";
        
        $resultado = $this->con->query($sql);
        
        if($resultado->rowCount()>0){
            foreach ($resultado as $value) {
                    $disciplina = new Disciplinas($value['id'],
                        $value['id'],
                        $value['codigo_disciplina'],
                        $value['descricao_disciplinas']);       
                  
                    array_push($this->disciplinas, $disciplina);

                }  
            $this->message = "Foram encontados ".$resultado->rowCount()." disciplinas."; 
        }else{
            $this->message = "A consulta não encontrou nenhuma disciplina"; 
        }
        //carrega array de nome e descrição 

        
    }

    
}

?>
