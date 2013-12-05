<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class NotasDAO {
    
    public $message;
    private $con;
    public $notas;

    public function __construct($con) {
        $this->con = $con;
    }


    public function adicionarNotas($objNotas){

       $this->notasPorNomeEscola($objNotas->nome);
       
       
       if(count($this->notas)<1){
            
   
            $sql = "INSERT INTO notas(id,
                    nome,
                    latitude,
                    longitude,
                    bairro,
                    telefone,
                    fax,
                    email,
                    nota_geral,
                    nota_acessibilidade_aluno,
                    nota_atividades_complementares,
                    nota_estrutura,
                    nota_estrutura_acessibilidade,
                    nota_tecnologia,
                    inep)
                    VALUES(
                    :id,
                    :nome,
                    :latitude,
                    :longitude,
                    :bairro,
                    :telefone,
                    :fax,
                    :email,
                    :nota_geral,
                    :nota_acessibilidade_aluno,
                    :nota_atividades_complementares,
                    :nota_estrutura,
                    :nota_estrutura_acessibilidade,
                    :nota_tecnologia,
                    :inep)";
            
            $stmt = $this->con->prepare($sql);
         
            $stmt->bindValue(':id',utf8_decode($objNotas->id));
            $stmt->bindValue(':nome',utf8_decode($objNotas->nome));
            $stmt->bindValue(':latitude',utf8_decode($objNotas->latitude));
            $stmt->bindValue(':longitude',utf8_decode($objNotas->longitude));
            $stmt->bindValue(':bairro',utf8_decode($objNotas->bairro));
            $stmt->bindValue(':telefone',utf8_decode($objNotas->telefone));
            $stmt->bindValue(':fax',utf8_decode($objNotas->fax));
            $stmt->bindValue(':email',utf8_decode($objNotas->email));
            $stmt->bindValue(':nota_geral',utf8_decode($objNotas->notaGeral));
            $stmt->bindValue(':nota_acessibilidade_aluno',utf8_decode($objNotas->notaAcessibilidadeAluno));
            $stmt->bindValue(':nota_atividades_complementares',utf8_decode($objNotas->notaAtividadesComplementares));
            $stmt->bindValue(':nota_estrutura',utf8_decode($objNotas->notaEstrutura));
            $stmt->bindValue(':nota_estrutura_acessibilidade',utf8_decode($objNotas->notaEstruturaAcessibilidade));
            $stmt->bindValue(':nota_tecnologia',utf8_decode($objNotas->notaTecnologia));
            $stmt->bindValue(':inep',utf8_decode($objNotas->inep));

            $stmt->execute();                 

            if($stmt->rowCount()>0){
                $this->message = "Dados inserido com sucesso.";
            }
       }else{
               $this->message = "Notas ja cadastrado";
       }
    }
    
    public function notasPorNomeEscola($nomeEscola){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->notas = Array();
        $sql = "SELECT * FROM notas order by nota_geral desc";

        $resultado = $this->con->query($sql);

        if(count($resultado) > 0){
            
            foreach ($resultado as $value) {
                if(strcasecmp($value['nome'], utf8_decode($nomeEscola))== 0){                
                
                    $nota = new Notas($value['id'],
                        $value['nome'],
                        $value['inep'],    
                        $value['latitude'],
                        $value['longitude'],
                        $value['bairro'],
                        $value['telefone'],
                        $value['fax'],
                        $value['email'],
                        $value['nota_geral'],
                        $value['nota_acessibilidade_aluno'],
                        $value['nota_atividades_complementares'],
                        $value['nota_estrutura'],
                        $value['nota_estrutura_acessibilidade'],
                        $value['nota_tecnologia']); 
                    
                    
                    array_push($this->notas, $nota);
               
                }
            } 
            $this->message = "Foram encontados ".$resultado->rowCount()." notas."; 
        }else{
            $this->message = "A consulta não encontrou nenhuma nota"; 
        }
        //carrega array de nome e descrição 
      
    }
    
   public function notasPorInepEscola($codigoInepEscola){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->notas = Array();
        $sql = "SELECT * FROM notas where inep=".$codigoInepEscola;

        $resultado = $this->con->query($sql);

        if(count($resultado) > 0){
            
            foreach ($resultado as $value) {

                    $nota = new Notas($value['id'],
                        $value['nome'],
                        $value['inep'],    
                        $value['latitude'],
                        $value['longitude'],
                        $value['bairro'],
                        $value['telefone'],
                        $value['fax'],
                        $value['email'],
                        $value['nota_geral'],
                        $value['nota_acessibilidade_aluno'],
                        $value['nota_atividades_complementares'],
                        $value['nota_estrutura'],
                        $value['nota_estrutura_acessibilidade'],
                        $value['nota_tecnologia']); 
                    
                    
                    array_push($this->notas, $nota);

            } 
            $this->message = "Foram encontados ".$resultado->rowCount()." notas."; 
        }else{
            $this->message = "A consulta não encontrou nenhuma nota"; 
        }
        //carrega array de nome e descrição 
      
    }
    public function consultarTodasNotas(){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->notas =  Array();
        $sql = "select * from notas  order by nota_geral desc";
        
        $resultado = $this->con->query($sql);

        if($resultado->rowCount()>0){
            foreach ($resultado as $value) {
      
                $nota = new Notas($value['id'],
                            $value['nome'],
                            $value['inep'],
                            $value['latitude'],
                            $value['longitude'],
                            $value['bairro'],
                            $value['telefone'],
                            $value['fax'],
                            $value['email'],
                            $value['nota_geral'],
                            $value['nota_acessibilidade_aluno'],
                            $value['nota_atividades_complementares'],
                            $value['nota_estrutura'],
                            $value['nota_estrutura_acessibilidade'],
                            $value['nota_tecnologia']); 
 
                    array_push($this->notas, $nota);
                          
                } 
            $this->message = "Foram encontados ".$resultado->rowCount()." notas."; 
        }else{
            $this->message = "A consulta não encontrou nenhuma nota"; 
        }
        //carrega array de nome e descrição 

        
    }
    
}

?>
