<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class EscolasDAO {
    
    public $message;
    private $con;
    public $escolas;

    public function __construct($con) {
        $this->con = $con;
    }
        
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function consultarEscolaNome($nomeEscola){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->escolas = Array();
        $sql = "SELECT * FROM escolas";

        $resultado = $this->con->query($sql);
        
        var_dump($this->con->errorInfo());
        
        if(count($resultado) > 0){
            
            foreach ($resultado as $value) {
                if(strcasecmp($value['nome'], utf8_decode($nomeEscola))== 0){                
                
                    $escola = new Escolas($value['id'],
                            $value['inep_escola'],
                            $value['codigo_escola'],
                            $value['nome'],
                            $value['latitude'],
                            $value['longitude'],
                            $value['cep'],
                            $value['endereco'],
                            $value['endereco_numero'],
                            $value['endereco_complemento'],
                            $value['bairro_codigo'],
                            $value['bairro'],
                            $value['telefone'],
                            $value['fax'],
                            $value['email'],
                            $value['orgao_regional'],
                            $value['regulamentacao'],
                            $value['funcionamento_predio_escolar'],
                            $value['funcionamento_templo'],
                            $value['funcionamento_empresa'],
                            $value['funcionamento_outras_escolas'],
                            $value['funcionamento_galpao'],
                            $value['funcionamento_outros'],
                            $value['forma_ocupacao'],
                            $value['agua_rede_publica'],
                            $value['agua_poco_artesiano'],
                            $value['agua_cacimba'],
                            $value['agua_fonte'],
                            $value['esgoto_rede_publica'],
                            $value['esgoto_fossa'],
                            $value['esgoto_inexistente'],
                            $value['lixo_coleta_periodica'],
                            $value['lixo_outra_area'],
                            $value['dependencia_diretoria'],
                            $value['dependencia_professores'],
                            $value['dependencia_secretaria'],
                            $value['dependencia_laboratorio_informatica'],
                            $value['dependencia_laboratorio_ciencias'],
                            $value['dependencia_aee'],
                            $value['dependencia_quadra_coberta'],
                            $value['dependencia_quadra_descoberta'],
                            $value['dependencia_cozinha'],
                            $value['dependencia_biblioteca'],
                            $value['dependencia_leitura'],
                            $value['dependencia_parque_infantil'],
                            $value['dependencia_bercario'],
                            $value['dependencia_banheiro_fora'],
                            $value['dependencia_banheiro_dentro'],
                            $value['dependencia_banheiro_infantil'],
                            $value['dependencia_banheiro_deficiencia'],
                            $value['dependencia_vias_adequadas_deficiencia'],
                            $value['dependencia_banheiro_chuveiro'],
                            $value['dependencia_refeitorio'],
                            $value['dependencia_despensa'],
                            $value['dependencia_almoxarifado'],
                            $value['dependencia_auditorio'],
                            $value['dependencia_patio_coberto'],
                            $value['dependencia_patio_descoberto'],
                            $value['dependencia_alojamento_aluno'],
                            $value['dependencia_alojamento_professor'],
                            $value['dependencia_area_verde'],
                            $value['dependencia_lavanderia'],
                            $value['quantidade_salas_existentes'],
                            $value['quantidade_salas_utilizadas_fora_e_dentro'],
                            $value['equipamentos_televisao'],
                            $value['equipamentos_videocassete'],
                            $value['equipamentos_dvd'],
                            $value['equipamentos_antena_parabolica'],
                            $value['equipamentos_copiadora'],
                            $value['equipamentos_retroprojetor'],
                            $value['equipamentos_impressora'],
                            $value['equipamentos_aparelho_som'],
                            $value['equipamentos_projetor_multimidia'],
                            $value['equipamentos_fax'],
                            $value['equipamentos_maquina_fotografica'],
                            $value['equipamentos_computadores'],
                            $value['computadores_quantidade'],
                            $value['computadores_qtd_administrativo'],
                            $value['computadores_qtd_alunos'],
                            $value['acesso_internet'],
                            $value['banda_larga'],
                            $value['total_funcionarios'],
                            $value['brasil_alfabetizado'],
                            $value['abre_finais_semana'],
                            $value['modalidade_regular'],
                            $value['modalidade_especial'],
                            $value['modalidade_eja'],
                            $value['regular_creche'],
                            $value['regular_preescolar'],
                            $value['regular_fundamental9'],
                            $value['especial_fundamental9'],
                            $value['especial_eja_fundamental'],
                            $value['eja_fundamental'],
                            $value['eja_projovem']);
                    
                  array_push($this->escolas, $escola);
                }
            } 
            $this->message = "Foram encontados ".$resultado->rowCount()." escolas."; 
        }else{
            $this->message = "A consulta não encontrou nenhum escola"; 
        }
        //carrega array de nome e descrição 
      
    }
    
    public function consultarPorCodigoInep($inepEscola){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->escolas =  Array();
        $sql = "SELECT * FROM escolas WHERE inep_escola =".$inepEscola." ORDER BY inep_escola";
        
        
        $resultado = $this->con->query($sql);
        
        if($resultado->rowCount()>0){
 foreach ($resultado as $value) {
                    $escola = new Escolas($value['id'],
                            $value['inep_escola'],
                            $value['codigo_escola'],
                            $value['nome'],
                            $value['latitude'],
                            $value['longitude'],
                            $value['cep'],
                            $value['endereco'],
                            $value['endereco_numero'],
                            $value['endereco_complemento'],
                            $value['bairro_codigo'],
                            $value['bairro'],
                            $value['telefone'],
                            $value['fax'],
                            $value['email'],
                            $value['orgao_regional'],
                            $value['regulamentacao'],
                            $value['funcionamento_predio_escolar'],
                            $value['funcionamento_templo'],
                            $value['funcionamento_empresa'],
                            $value['funcionamento_outras_escolas'],
                            $value['funcionamento_galpao'],
                            $value['funcionamento_outros'],
                            $value['forma_ocupacao'],
                            $value['agua_rede_publica'],
                            $value['agua_poco_artesiano'],
                            $value['agua_cacimba'],
                            $value['agua_fonte'],
                            $value['esgoto_rede_publica'],
                            $value['esgoto_fossa'],
                            $value['esgoto_inexistente'],
                            $value['lixo_coleta_periodica'],
                            $value['lixo_outra_area'],
                            $value['dependencia_diretoria'],
                            $value['dependencia_professores'],
                            $value['dependencia_secretaria'],
                            $value['dependencia_laboratorio_informatica'],
                            $value['dependencia_laboratorio_ciencias'],
                            $value['dependencia_aee'],
                            $value['dependencia_quadra_coberta'],
                            $value['dependencia_quadra_descoberta'],
                            $value['dependencia_cozinha'],
                            $value['dependencia_biblioteca'],
                            $value['dependencia_leitura'],
                            $value['dependencia_parque_infantil'],
                            $value['dependencia_bercario'],
                            $value['dependencia_banheiro_fora'],
                            $value['dependencia_banheiro_dentro'],
                            $value['dependencia_banheiro_infantil'],
                            $value['dependencia_banheiro_deficiencia'],
                            $value['dependencia_vias_adequadas_deficiencia'],
                            $value['dependencia_banheiro_chuveiro'],
                            $value['dependencia_refeitorio'],
                            $value['dependencia_despensa'],
                            $value['dependencia_almoxarifado'],
                            $value['dependencia_auditorio'],
                            $value['dependencia_patio_coberto'],
                            $value['dependencia_patio_descoberto'],
                            $value['dependencia_alojamento_aluno'],
                            $value['dependencia_alojamento_professor'],
                            $value['dependencia_area_verde'],
                            $value['dependencia_lavanderia'],
                            $value['quantidade_salas_existentes'],
                            $value['quantidade_salas_utilizadas_fora_e_dentro'],
                            $value['equipamentos_televisao'],
                            $value['equipamentos_videocassete'],
                            $value['equipamentos_dvd'],
                            $value['equipamentos_antena_parabolica'],
                            $value['equipamentos_copiadora'],
                            $value['equipamentos_retroprojetor'],
                            $value['equipamentos_impressora'],
                            $value['equipamentos_aparelho_som'],
                            $value['equipamentos_projetor_multimidia'],
                            $value['equipamentos_fax'],
                            $value['equipamentos_maquina_fotografica'],
                            $value['equipamentos_computadores'],
                            $value['computadores_quantidade'],
                            $value['computadores_qtd_administrativo'],
                            $value['computadores_qtd_alunos'],
                            $value['acesso_internet'],
                            $value['banda_larga'],
                            $value['total_funcionarios'],
                            $value['brasil_alfabetizado'],
                            $value['abre_finais_semana'],
                            $value['modalidade_regular'],
                            $value['modalidade_especial'],
                            $value['modalidade_eja'],
                            $value['regular_creche'],
                            $value['regular_preescolar'],
                            $value['regular_fundamental9'],
                            $value['especial_fundamental9'],
                            $value['especial_eja_fundamental'],
                            $value['eja_fundamental'],
                            $value['eja_projovem']);
                    
                  array_push($this->escolas, $escola);

                }  
            $this->message = "Foram encontados ".$resultado->rowCount()." animais."; 
        }else{
            $this->message = "A consulta não encontrou nenhum animal"; 
        }
        //carrega array de nome e descrição 

        
    }
    
    public function consultarTodasEscolas(){
        
        //selsciona todos os itens da tabela ou um especifico
        $this->escolas =  Array();
        $sql = "SELECT * FROM escolas";
        
        $resultado = $this->con->query($sql);
        
        if($resultado->rowCount()>0){
            foreach ($resultado as $value) {
                    $escola = new Escolas($value['id'],
                            $value['inep_escola'],
                            $value['codigo_escola'],
                            $value['nome'],
                            $value['latitude'],
                            $value['longitude'],
                            $value['cep'],
                            $value['endereco'],
                            $value['endereco_numero'],
                            $value['endereco_complemento'],
                            $value['bairro_codigo'],
                            $value['bairro'],
                            $value['telefone'],
                            $value['fax'],
                            $value['email'],
                            $value['orgao_regional'],
                            $value['regulamentacao'],
                            $value['funcionamento_predio_escolar'],
                            $value['funcionamento_templo'],
                            $value['funcionamento_empresa'],
                            $value['funcionamento_outras_escolas'],
                            $value['funcionamento_galpao'],
                            $value['funcionamento_outros'],
                            $value['forma_ocupacao'],
                            $value['agua_rede_publica'],
                            $value['agua_poco_artesiano'],
                            $value['agua_cacimba'],
                            $value['agua_fonte'],
                            $value['esgoto_rede_publica'],
                            $value['esgoto_fossa'],
                            $value['esgoto_inexistente'],
                            $value['lixo_coleta_periodica'],
                            $value['lixo_outra_area'],
                            $value['dependencia_diretoria'],
                            $value['dependencia_professores'],
                            $value['dependencia_secretaria'],
                            $value['dependencia_laboratorio_informatica'],
                            $value['dependencia_laboratorio_ciencias'],
                            $value['dependencia_aee'],
                            $value['dependencia_quadra_coberta'],
                            $value['dependencia_quadra_descoberta'],
                            $value['dependencia_cozinha'],
                            $value['dependencia_biblioteca'],
                            $value['dependencia_leitura'],
                            $value['dependencia_parque_infantil'],
                            $value['dependencia_bercario'],
                            $value['dependencia_banheiro_fora'],
                            $value['dependencia_banheiro_dentro'],
                            $value['dependencia_banheiro_infantil'],
                            $value['dependencia_banheiro_deficiencia'],
                            $value['dependencia_vias_adequadas_deficiencia'],
                            $value['dependencia_banheiro_chuveiro'],
                            $value['dependencia_refeitorio'],
                            $value['dependencia_despensa'],
                            $value['dependencia_almoxarifado'],
                            $value['dependencia_auditorio'],
                            $value['dependencia_patio_coberto'],
                            $value['dependencia_patio_descoberto'],
                            $value['dependencia_alojamento_aluno'],
                            $value['dependencia_alojamento_professor'],
                            $value['dependencia_area_verde'],
                            $value['dependencia_lavanderia'],
                            $value['quantidade_salas_existentes'],
                            $value['quantidade_salas_utilizadas_fora_e_dentro'],
                            $value['equipamentos_televisao'],
                            $value['equipamentos_videocassete'],
                            $value['equipamentos_dvd'],
                            $value['equipamentos_antena_parabolica'],
                            $value['equipamentos_copiadora'],
                            $value['equipamentos_retroprojetor'],
                            $value['equipamentos_impressora'],
                            $value['equipamentos_aparelho_som'],
                            $value['equipamentos_projetor_multimidia'],
                            $value['equipamentos_fax'],
                            $value['equipamentos_maquina_fotografica'],
                            $value['equipamentos_computadores'],
                            $value['computadores_quantidade'],
                            $value['computadores_qtd_administrativo'],
                            $value['computadores_qtd_alunos'],
                            $value['acesso_internet'],
                            $value['banda_larga'],
                            $value['total_funcionarios'],
                            $value['brasil_alfabetizado'],
                            $value['abre_finais_semana'],
                            $value['modalidade_regular'],
                            $value['modalidade_especial'],
                            $value['modalidade_eja'],
                            $value['regular_creche'],
                            $value['regular_preescolar'],
                            $value['regular_fundamental9'],
                            $value['especial_fundamental9'],
                            $value['especial_eja_fundamental'],
                            $value['eja_fundamental'],
                            $value['eja_projovem']);
                    
                  array_push($this->escolas, $escola);

                } 
            $this->message = "Foram encontados ".$resultado->rowCount()." escolas."; 
        }else{
            $this->message = "A consulta não encontrou nenhum escola"; 
        }
        //carrega array de nome e descrição 

        
    }
    
}

?>
