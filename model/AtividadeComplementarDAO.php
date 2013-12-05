<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class AtividadeComplementarDAO {
    
    public $message;
    private $con;
    public $atividades;

    public function __construct($con) {
        $this->con = $con;
    }
        
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function consultarAtividadeComplementarCodigo($codigoAtividade){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->atividades =  Array();
        $sql = "SELECT * FROM tabela_de_tipo_de_atividade_complementar WHERE codigo_atividade =".$codigoAtividade." ORDER BY codigo_atividade";
        
        $resultado = $this->con->query($sql);
        
        if($resultado->rowCount()>0){
            foreach ($resultado as $value) {
                    $atividadesComplementares = new AtividadeComplementar($value['id'],
                        $value['codigo_atividade'],
                        $value['nome_atividade'],
                        $value['codigo_area'],
                        $value['nome_area'],
                        $value['codigo_subarea'],
                        $value['nome_subarea']);       
                  
                    array_push($this->atividades,$atividadesComplementares);

                }  
            $this->message = "Foram encontados ".$resultado->rowCount()." atividades."; 
        }else{
            $this->message = "A consulta não encontrou nenhuma ativdiadade"; 
        }
        //carrega array de nome e descrição 

        
    }

    
}

?>
