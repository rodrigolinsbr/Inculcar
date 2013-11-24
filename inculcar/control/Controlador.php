<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controlador
 *
 * @author HP
 */

class Controlador {
    
    public static $bancoServidor; 
    
    public static $bancoNome; 
    
    public static $bancoUsuario;
    
    public static $bancoSenha;
    
    private static $ftpHost;
    
    private static $ftpLogin;
    
    private static $ftpSenha;
    //view que será incluida 
    public static $view;
    //
    public static $parametros;
    //recebe a classe instanciada para poder descarregar parametros de saida
    public static $out;


    public static function executar(){
       
       //configura arquivos de log de erro
       self::carregaConfiguracoesPhp();
       //carrega configuraçoes
       self::carregaConfigControlador("oper");
       //carrega a view e retira dos parametrso
       self::verificaUrl();
       /*carega a url responsvél pela view
       */
       self::carregaView(self::$view);
       
       //instancia classes controlador
       if(count(self::$parametros)> 0){
            self::$out = self::executarController(self::$view,
            self::$bancoServidor,self::$bancoNome,self::$bancoUsuario,
            self::$bancoSenha,self::$parametros);           
       }

       
      
   }


   public static function carregaConfiguracoesPhp(){
       //habilita short tags
       ini_set('short_open_tag',1);
       ini_set('display_errors',1);
       ini_set('log_errors',1);
       ini_set('error_log',RAIZ.'/log/php_error.log');
   }

   

    public static function verificaUrl(){
        
        //recupera dados da url
        $url = $_SERVER['REQUEST_URI'];
        
        //quebra os parametros
        $url = explode("/",$url);
        
        //retira primeiro elemento
        array_shift($url);
        
        //retira dados do final caso usuario coloque uma barra a mais
        if($url[count($url)-1] == ""){
            array_pop($url);
        }
        
        //verifica quantidade de parametros
        $param = count($url);
        
        if($param == 0){
            self::$view = "default";
        }
        
        if($param == 1){
            self::$view = $url[0];
            array_shift($url);
        }
        
        //guarda os parametros apos retirar url
        if($param > 1){
            
            self::$view = $url[0];
            array_shift($url);
            
            self::$parametros = $url;
        }

    }
    
    
     /**
     * Método para carregar configurações necessarias para operação do
     *  controlador.A variavél $modoOperação quando seu valor igual a "oper",
     * solucao em operacao no host, quando em "prod" solução em modo de 
     * produção.Cada modo carregará as configurações do arquivo config 
     * ao modo correspondente relativas a cada modo, os parametros de cada
     * modo encontram-se no arquivo config do diretório control. 
     *
     * @var $modoOperação "oper",solucao em operacao no host, "prod"
     * solução em modo de produção.Cada modo carregará as configurações
      * do arquivo config relativas a cada modo.
     */

    public static function carregaConfigControlador($modoOperacao){
        //carregando arquivos de configuracoes.
        $dadosBanco = parse_ini_file("control/config.ini",true);
        if($modoOperacao == "prod"){
            self::$bancoServidor = $dadosBanco['prod']['servidor'];
            self::$bancoNome = $dadosBanco['prod']['banco'];
            self::$bancoUsuario = $dadosBanco['prod']['login'];
            self::$bancoSenha = $dadosBanco['prod']['senha'];    
        }
    
        if($modoOperacao == "oper"){
            self::$bancoServidor = $dadosBanco['oper']['servidor'];
            self::$bancoNome = $dadosBanco['oper']['banco'];
            self::$bancoUsuario = $dadosBanco['oper']['login'];
            self::$bancoSenha = $dadosBanco['oper']['senha'];
            //informacoes ftp
            self::$ftpHost = $dadosBanco['ftp']['host'];
            self::$ftpLogin = $dadosBanco['ftp']['login'];
            self::$ftpSenha = $dadosBanco['ftp']['senha'];
        }
    } 
    
     /**
     * Método para carregar a view e o controle para cada página,$view recebe 
     * valores inteiros,esse valores tem indexado o nome de cada pagina php 
     * que contem a view e o controller selecionado, o valor não pode ser menor
      * que 1.
     * 
     * O arquivo para configuração encontra-se no arquivo config do diretorio
     * view.Caso nao seja passado ou no inicio sempre carrega a view=1
     * 
     *  Obs: para carregar apenas a view ,no arquivo o mesmo indice no controller
     * do arquivo config deve estar vazio e respctivamente para carregar apenas
     * o controller o mesmo indice da view deve estar vazio. 
     *
     */
    public static function carregaView($view){
        
        //carrega  as configurações predefinadas da view e do controle da operacao
        $configView = parse_ini_file("view/config.ini",true);
        //verifica se existe a controller e carrega primeiro      
        if($view != ''){
            if(file_exists('view/'.$configView['view'][$view].".php")){
                require_once 'view/'.$configView['view'][$view].'.php';
            }else{
                //carregar pagina ou gera exception qual melhor?? 
            }
        }
    }
    
    /*executa codigo controlador cada pagina
    *a referencia vira do arquivo configi.ini na view
     * retorna
    */
    public static function executarController($pagina,$server,$banco,
            $login,$senha,$parametros){
        $configController = parse_ini_file("view/config.ini",true);
        $classe = $configController['controller'][$pagina];
        return new  $classe($server,$banco,$login,$senha,$parametros);
    }
    
    public static function carregaTemplate($template){
        require_once './view/'.$template.".php";
    }
}

?>
