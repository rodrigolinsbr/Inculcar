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
class NotaAcesibilidadeAluno {
    //put your code here
    private $objetoArrayAluno;
    public $notaAcessibilidadeAluno;
    
    public function __construct($objetoArrayAlunos) {
        $this->objetoArrayAluno = $objetoArrayAlunos;
        $this->calculaNota();
    }
    
    
    public function calculaNota(){
        
        $nota1 = 0;
        $nota2 = 0;
        $nota3 = 0;
        $nota4 = 0;
        $nota5 = 0;
        $nota6 = 0;
        $nota7 = 0;
        $nota8 = 0;
        $nota9 = 0;
        $nota10 = 0;
        $nota11 = 0;
        $nota12 = 0;
        $nota13 = 0;
        $nota14 = 0;
        
        foreach ($this->objetoArrayAluno as $value) {
            
            if($value->deficiencia == 1){
                $nota1 = 1;
            }
            if($value->deficienciaCegueira == 1){
                $nota2 = 1;
            }        
            if($value->deficienciaBaixaVisao == 1){
                $nota3 = 1;
            }
            if($value->deficienciaSurdez == 1){
                $nota4 = 1;
            }
            if($value->deficienciaBaixaAudicao == 1){
                $nota5 = 1;
            }        
            if($value->deficienciaSurdoCegueira == 1){
                $nota6 = 1;
            }
            if($value->deficienciaFisica == 1){
                $nota7 = 1;
            }
            if($value->deficienciaIntelectual == 1){
                $nota8 = 1;
            }        
            if($value->deficienciaMultipla == 1){
                $nota9 = 1;
            }
            if($value->deficienciaAutismo == 1){
                $nota10 = 1;
            }
            if($value->deficienciaAsperger == 1){
                $nota11 = 1;
            }        
            if($value->deficienciaRett == 1){
                $nota12 = 1;
            }
            if($value->deficienciaDesintegrativo == 1){
                $nota13 = 1;
            }        
            if($value->deficienciaSuperdotacao == 1){
                $nota14 = 1;
            }            
        }
        
        $nota = $nota1 + $nota2 + $nota3 + $nota4 + $nota5 + $nota6 + $nota7 + 
                $nota8 + $nota9 + $nota10 + $nota11 + $nota12 + $nota13 + $nota14;
        
        //Divide a nota pela quantidade de itens avaliados
        $this->notaAcessibilidadeAluno = round((100 * $nota) /14,1);
        
    }
    
}



?>
