<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IAbstractInterface
 *
 * @author antonio
 */
class IAbstractInterface {
    protected $server;
    protected  $banco;
    protected  $login;
    protected  $senha;
    protected  $parametros; 
    
    public function __construct($server,$banco,$login,$senha,$parametros = ""){
        $this->server = $server;
        $this->banco = $banco;
        $this->login = $login;
        $this->senha = $senha;
        $this->parametros = $parametros;
    }
}

?>
