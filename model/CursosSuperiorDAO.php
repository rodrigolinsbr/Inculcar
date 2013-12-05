<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class CursosSuperiorDAO {
    
    public $message;
    private $con;
    public $cursoSuperior;

    public function __construct($con) {
        $this->con = $con;
    }
        
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function consultarCursoSuperiorPorArea($codigoDaArea){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->cursoSuperior =  Array();
        $sql = "SELECT * FROM tabela_de_cursos_de_formacao_superior WHERE codig_area =".$codigoDaArea." ORDER BY codig_area";
        
        $resultado = $this->con->query($sql);
        
        if($resultado->rowCount()>0){
            foreach ($resultado as $value) {
                $cursoSuperior = new CursosSuperior($value['id'],
                    $value['codig_area'],
                    $value['nome_area'],
                    $value['codigo_instituicao'],
                    $value['nome_formacao'],
                    $value['grau_academico']);
                  
                    array_push($this->cursoSuperior, $cursoSuperior);

                }  
            $this->message = "Foram encontados ".$resultado->rowCount()." cursos superiores."; 
        }else{
            $this->message = "A consulta não encontrou nenhum curso"; 
        }
        //carrega array de nome e descrição 

        
    }

    
}

?>
