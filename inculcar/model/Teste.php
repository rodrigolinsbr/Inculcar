<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Teste
 *
 * @author antonio
 */
class Teste {
    
    public $param;
    //put your code here
    public function __construct() {
        $this->param = "Eu sou a classe inatanciada";
        $this->teste();
        $this->teste1();
        $this->teste2();
    }
    
    public function teste(){
        echo "Isso e o teste<br>";
    }
    
    public function teste1(){
        echo "Isso e o teste1<br>";
    }
    
    
    public function teste2(){
        echo "Isso e o teste2<br>";
    }
}

?>
