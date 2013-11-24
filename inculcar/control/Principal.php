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


class Principal {
    //put your code here
  public $out;
  private $server;
  private $banco;
  private $login;
  private $senha;
          
  public function __construct($server,$banco,$login,$senha) {
      $this->server = $server;
      $this->banco = $banco;
      $this->login = $login;
      $this->senha = $senha;
      $this->geraPagina();
  }


  public function geraPagina(){
      $this->out = "";
 
      $con = new Conexcao($this->server,
                    $this->banco,
                    $this->login,
                    $this->senha);
      
      
      $notasDao = new NotasDAO($con->conec);
      
      $notasDao->consultarTodasNotas();
      $this->out = $notasDao;
  }
}

?>
