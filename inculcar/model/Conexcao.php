<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Conexcao{
    
   public $conec; 
   
   function __construct($servidorBase,$sbNameBase,$usuario,$senha) {
       //temporariamente sem tratar erros
       $stringConeccaoBase ='mysql:host='.$servidorBase.';dbname='.$sbNameBase;
       //atributo torna aconecção persistente, evitando reconectar
       $this->conec = new PDO($stringConeccaoBase,$usuario, $senha, array(PDO::ATTR_PERSISTENT => TRUE));               
   }


}

?>
