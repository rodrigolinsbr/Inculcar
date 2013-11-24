<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class InstituicaoSuperiosDocente{
    
    public $message;
    private $con;
    public $instituicaoSuperioDocente;

    public function __construct($con) {
        $this->con = $con;
    }
        
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function consultarInstituicaoSuperiorDocente($codigoInstituicao){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->instituicaoSuperioDocente =  Array();
        $sql = "SELECT * FROM tabela_de_instituicao_de_formacao_superior_dos_docente WHERE codigo_instituicao =".$codigoInstituicao." ORDER BY codigo_instituicao";
        
        $resultado = $this->con->query($sql);
        
        if($resultado->rowCount()>0){
            foreach ($resultado as $value) {
                   $instituicao = new InstituicaoSuperiosDocente($value['id'],
                        $value['codigo_instituicao'],
                        $value['nome_instituicao'],
                        $value['uf'],
                        $value['municipio'],
                        $value['codigo_dependencia'],
                        $value['nome_dependencia'],
                        $value['tipo_intituicao'],
                        $value['situacao']);    
                  
                    array_push($this->instituicaoSuperioDocente, $instituicao);

                }  
            $this->message = "Foram encontados ".$resultado->rowCount()." instituição."; 
        }else{
            $this->message = "A consulta não encontrou nenhum instituição"; 
        }
        //carrega array de nome e descrição 

        
    }

    
}

?>
