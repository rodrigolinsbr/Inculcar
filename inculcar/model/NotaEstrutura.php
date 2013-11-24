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
class NotaEstrutura {
    //put your code here
    private $objEscola;
    public $notaEstrutura;
    
    public function __construct($objetoEscola ) {
        $this->objEscola = $objetoEscola;
        $this->calculaNota();
    }
    
    
    public function calculaNota(){
        $nota = 0;
        
        //nota referente ao predio
        if($this->objEscola->funcionamentoPredioEscolar == 1){
            $nota++;
        }
        
        if($this->objEscola->funcionamentoPredioEscolar == 1 || $this->objEscola->funcionamentoTemplo == 1 || 
                $this->objEscola->funcionamentoEmpresa == 1 || $this->objEscola->funcionamentoOutrasEscolas == 1 || 
                $this->objEscola->funcionamentoGalpao == 1){            
            $nota = $nota + 0.5;
        }
        
        if($this->objEscola->funcionamentoOutros == 1){
            $nota = $nota + 0;
        }
        
        //forma de ocupação
        
        if($this->objEscola->formaOcupacao == 1 || $this->objEscola->formaOcupacao == 3){
            $nota++;
        }
        
        if($this->objEscola->formaOcupacao == 2){
            $nota = $nota + 0.5;
        }
        
        //abastecimento de agua
        
        if($this->objEscola->aguaRedePublica == 1){
            $nota++;
        }
        
        if($this->objEscola->aguaPocoArtesiano == 1 || $this->objEscola->aguaCacimba == 1
                || $this->objEscola->aguaFonte == 1){
            $nota = $nota + 0.5;
        }
        
        //tratamento de esgoto
        
        if($this->objEscola->esgotoRedePublica == 1){
            $nota++;
        }
        
        if($this->objEscola->esgotoFossa == 1){
            $nota = $nota + 0.5;
        }
        
        if($this->objEscola->esgotoInexistente== 1){
            $nota = $nota + 0;
        }
        
        //coleta de lixo
        if($this->objEscola->lixoColetaPeriodica == 1){
            $nota++;
        }
        
        if($this->objEscola->lixoOutraArea == 1){
            $nota = $nota + 0.5;
        } 
        
        //diretoria
        if($this->objEscola->dependenciaDiretoria == 1){
            $nota++;
        }
        
        //professores
        if($this->objEscola->dependenciaProfessores == 1){
            $nota++;
        }
        
        //secretaria
        if($this->objEscola->dependenciaSecretaria == 1){
            $nota++;
        }
        //laboratorio de informatica
        if($this->objEscola->dependenciaLaboratorioInformatica == 1){
            $nota++;
        }
        //laboratorio de ciencias
        if($this->objEscola->dependenciaLaboratorioCiencias == 1){
            $nota++;
        }
        
        //quadra coberta
        if($this->objEscola->dependenciaQuadraCoberta == 1){
            $nota++;
        }
        
        //quadra descoberta
        if($this->objEscola->dependenciaQuadraDescoberta == 1){
            $nota++;
        }        
        
        //cozinha
        if($this->objEscola->dependenciaCozinha == 1){
            $nota++;
        }
        //biblioteca
        if($this->objEscola->dependenciaBiblioteca == 1){
            $nota++;
        }        
        //leitura
        if($this->objEscola->dependenciaLeitura == 1){
            $nota++;
        }        
        //parque infantil
        if($this->objEscola->dependenciaParqueInfantil == 1){
            $nota++;
        }
        
        //banheiro
        if($this->objEscola->dependenciaBanheiroDentro == 1){
            $nota++;
        }
        
        if($this->objEscola->dependenciaBanheiroFora == 1){
            $nota = $nota + 0.5;
        }            
        
        //banheiro infantil
        if($this->objEscola->dependenciaBanheiroInfantil == 1){
            $nota++;
        }

        //banheiro chuveiro
        if($this->objEscola->dependenciaBanheiroChuveiro == 1){
            $nota++;
        }        
        //refeitorio
        if($this->objEscola->dependenciaRefeitorio == 1){
            $nota++;
        }        
        //despensa
        if($this->objEscola->dependenciaDespensa == 1){
            $nota++;
        }
        //almoxerifado
        if($this->objEscola->dependenciaAlmoxarifado == 1){
            $nota++;
        }
        //auditorio
        if($this->objEscola->dependenciaAuditorio == 1){
            $nota++;
        }        
        
        //patio
        if($this->objEscola->dependenciaPatioCoberto == 1){
            $nota++;
        }
        
        if($this->objEscola->dependenciaPatioDescoberto == 1){
            $nota = $nota + 0.5;
        }          
        
        //area verde
        if($this->objEscola->dependenciaAreaVerde == 1){
            $nota++;
        }        
        //lavanderia
        if($this->objEscola->dependenciaLavanderia == 1){
            $nota++;
        }
        
        
        //quantidade de salas, se quantidade = numero utilizadas 1
        //caso não 0, aproveitando o maximo a estrutura
        if($this->objEscola->quantidadeSalasExistentes == $this->objEscola->quantidadeSalasUtilizadasForaEDentro){
            $nota++;
        }else{
            $nota = $nota + 0;
        }
        
        //Divide a nota pela quantidade de itens avaliados
        $this->notaEstrutura = round((100 * $nota) / 27,1);
        
    }
    
}



?>
