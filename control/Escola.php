<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Escola
 *
 * @author antonio
 */
class Escola extends IAbstractInterface implements IIntfacePagina {
    
    public $escola;
    public $colocacao;
    
    public function __construct($server, $banco, $login, $senha, $parametros = "") {
        parent::__construct($server, $banco, $login, $senha, $parametros);
        $this->gerarPagina();
        $this->normalizaVirgula();
        $this->nomalizaLatitudeLongitude();
    }


    public function gerarPagina() {
        
        $colocacao = 1;
        $con  = new Conexcao($this->server,
        $this->banco,
        $this->login,
        $this->senha);
        
        if($this->parametros == NULL){
        //caso requisição venha do pesquisar
            if(isset($_POST['nomeEscola'])){
                $notasDao = new NotasDAO($con->conec);

                $notasDao->notasPorNomeEscola($_POST['nomeEscola']);
                $this->escola = $notasDao->notas[0];

                $notasDao->consultarTodasNotas();
                //verifica posicao da escola
                foreach ($notasDao->notas as $value) {

                   if(($value->inep == $this->escola->inep) && 
                           ($this->escola->notaGeral == $value->notaGeral)){
                       echo $value->nome."<br>";
                     break;  
                    }
                    $colocacao = $colocacao + 1;
                }

                $this->colocacao = $colocacao;                    
                
            }
            
        }else{
            //caso venha da classificação
            $notasDao = new NotasDAO($con->conec);

            $notasDao->notasPorInepEscola($this->parametros[0]);
            $this->escola = $notasDao->notas[0];

            $notasDao->consultarTodasNotas();
            //verifica posicao da escola
            foreach ($notasDao->notas as $value) {

               if(($value->inep == $this->parametros[0]) && 
                       ($this->escola->notaGeral == $value->notaGeral)){
                 break;  
                }
                $colocacao = $colocacao + 1;
            }

            $this->colocacao = $colocacao;            


                   }
        
    }    //put your code here
    
    
    public function normalizaVirgula(){
        $this->escola->notaGeral = str_replace(".",",",$this->escola->notaGeral);
        $this->escola->notaAcessibilidadeAluno = str_replace(".",",",$this->escola->notaAcessibilidadeAluno);
        $this->escola->notaAtividadesComplementares = str_replace(".",",",$this->escola->notaAtividadesComplementares);
        $this->escola->notaEstrutura = str_replace(".",",",$this->escola->notaEstrutura);
        $this->escola->notaEstruturaAcessibilidade = str_replace(".",",",$this->escola->notaEstruturaAcessibilidade);
        $this->escola->notaTecnologia = str_replace(".",",",$this->escola->notaTecnologia);

        
    }
    
  public function nomalizaLatitudeLongitude(){
      
      $this->escola->latitude = str_replace(",",".",$this->escola->latitude);
      $this->escola->longitude = str_replace(",",".",$this->escola->longitude);
     
  }
    
}

?>
