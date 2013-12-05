<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Principal
 *
 * @author antonio
 */
class Principal extends IAbstractInterface implements IIntfacePagina {
    public $escolas = array();
    
    
    
    public function __construct($server, $banco, $login, $senha, $parametros) {
        parent::__construct($server, $banco, $login, $senha, $parametros);
        $this->gerarPagina();
    }


    public function gerarPagina() {
        $con  = new Conexcao($this->server,
                $this->banco,
                $this->login,
                $this->senha);
        $notasDao = new NotasDAO($con->conec);
        //consulta as nota de todoas escolas 
        $notasDao->consultarTodasNotas();
        //pegas as tres primeiras
        for ($index = 0; $index < 3; $index++) {
            array_push($this->escolas,$notasDao->notas[$index]);
        }
    }
}

?>
