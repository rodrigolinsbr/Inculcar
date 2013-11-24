<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NotaTecnologia
 *
 * @author antonio
 */
class NotaAtividadesComplementares {
    //put your code here
    private $arrayObjetosTurmas;
    public $notaAtividadesComplementares;
    
    public function __construct($arrayObjetosTurmas ) {
        $this->arrayObjetosTurmas = $arrayObjetosTurmas;
        $this->calculaNota();
    }
    
    
    public function calculaNota(){
        $nota = 0;
        $nota1 = 0;
        $nota2 = 0;
        $nota3 = 0;
        $nota4 = 0;
        $nota5 = 0;
        $nota6 = 0;
        
        
        $numeroDeTurmas = count($this->arrayObjetosTurmas);
        
        foreach ($this->arrayObjetosTurmas as $value) {
            
            if($value->codigo_atividade1 != "" || $value->codigo_atividade1 != 0){
                $nota1++;
            }
            if($value->codigo_atividade2 != "" || $value->codigo_atividade2 != 0){
                $nota2++;
            }            
            if($value->codigo_atividade3 != "" || $value->codigo_atividade3 != 0){
                $nota3++;
            }            
            if($value->codigo_atividade4 != "" || $value->codigo_atividade4 != 0){
                $nota4++;
            }            
            if($value->codigo_atividade5 != "" || $value->codigo_atividade5 != 0){
                $nota5++;
            }
            if($value->codigo_atividade6 != "" || $value->codigo_atividade6 != 0){
                $nota6++;
            }            
        }
        //verifica atividades
        if($nota1 > 0){
            $nota++;
        }
        if($nota2 > 0){
            $nota++;
        }
        if($nota3 > 0){
            $nota++;
        }
        if($nota4 > 0){
            $nota++;
        }
        if($nota5 > 0){
            $nota++;
        }
        if($nota6 > 0){
            $nota++;
        }
        //numero de Atividades media por turma
        
        //Divide a nota pela quantidade de itens avaliados
        $this->notaAtividadesComplementares =  round((100 * $nota) / 6,1);
        
    }
    
}



?>
