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
class NotaTecnologia {
    //put your code here
    private $objEscola;
    public $notaTecnologia;
    
    public function __construct($objetoEscola ) {
        $this->objEscola = $objetoEscola;
        $this->calculaNota();
    }
    
    
    public function calculaNota(){
        $nota = 0;
        
        if($this->objEscola->equipamentosTelevisao == 1){
            $nota++;
        }
        
        if($this->objEscola->equipamentosVideocassete == 1){
            $nota++;
        }
        
        if($this->objEscola->equipamentosDvd == 1){
            $nota++;
        }
        
        if($this->objEscola->equipamentosAntenaParabolica == 1){
            $nota++;
        }
        
        if($this->objEscola->equipamentosCopiadora == 1){
            $nota++;
        }
        
        if($this->objEscola->equipamentosRetroprojetor == 1){
            $nota++;
        }
        
        if($this->objEscola->equipamentosImpressora == 1){
            $nota++;
        }
        
        if($this->objEscola->equipamentosAparelhoSom == 1){
            $nota++;
        }
        
        if($this->objEscola->equipamentosProjetorMultimidia == 1){
            $nota++;
        }
        
        if($this->objEscola->equipamentosFax == 1){
            $nota++;
        }
        
        if($this->objEscola->equipamentosMaquinaFotografica == 1){
            $nota++;
        }
        
        if($this->objEscola->equipamentosComputadores == 1){
            $nota++;
        }
        
        if($this->objEscola->computadoresQtdAdministrativo >= 2){
            $nota++;
        }
        
        if($this->objEscola->computadoresQtdAlunos >= 10){
            $nota++;
        }
        
        if($this->objEscola->acessoInternet == 1){
            $nota++;
        }
        
        if($this->objEscola->bandaLarga == 1){
            $nota++;
        }

        //Divide a nota pela quantidade de itens avaliados
        $this->notaTecnologia = round((100 * $nota) / 16,1);
        
    }
    
}



?>
