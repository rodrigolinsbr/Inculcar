<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Notas
 *
 * @author antonio
 */
class Notas {
    //put your code here
    
    public $id;
    public $nome;
    public $inep;
    public $latitude;
    public $longitude;
    public $bairro;
    public $telefone;
    public $fax;
    public $email;
    public $notaGeral;
    public $notaAcessibilidadeAluno;
    public $notaAtividadesComplementares;
    public $notaEstrutura;
    public $notaEstruturaAcessibilidade;
    public $notaTecnologia;
    
       
    public function __construct($id,$nome,$inep,$latitude,$longitude,$bairro,$telefone,
            $fax,$email,$notaGeral,$notaAcessibilidadeAluno,
            $notaAtividadesComplementares,$notaEstrutura,
            $notaEstruturaAcessibilidade,$notaTecnologia){
        
        $this->id = $id;
        $this->nome = $nome;
        $this->inep = $inep;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->bairro = $bairro;
        $this->telefone = $telefone;
        $this->fax = $fax;
        $this->email = $email;
        $this->notaGeral = $notaGeral;
        $this->notaAcessibilidadeAluno = $notaAcessibilidadeAluno;
        $this->notaAtividadesComplementares = $notaAtividadesComplementares;
        $this->notaEstrutura = $notaEstrutura;
        $this->notaEstruturaAcessibilidade = $notaEstruturaAcessibilidade;
        $this->notaTecnologia = $notaTecnologia;
    }
}

?>
