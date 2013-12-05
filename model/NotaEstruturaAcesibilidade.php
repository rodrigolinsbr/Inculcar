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
class NotaEstruturaAcesibilidade {
    //put your code here
    private $objEscola;
    public $notaEstruturaAcessibilidade;
    
    public function __construct($objetoEscola ) {
        $this->objEscola = $objetoEscola;
        $this->calculaNota();
    }
    
    
    public function calculaNota(){
        $nota = 0;
        
        //nota dependencia banheiro deficiencia
        if($this->objEscola->dependenciaBanheiroDeficiencia == 1){
            $nota++;
        }

        //nota dependencia_vias_adequadas a deficiencia
        if($this->objEscola->dependenciaViasAdequadasDeficiencia == 1){
            $nota++;
        }        
        
        //Divide a nota pela quantidade de itens avaliados
        $this->notaEstruturaAcessibilidade = round((100 * $nota) / 2,1);
        
    }
    
}



?>
