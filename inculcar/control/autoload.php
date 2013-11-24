<?php

/*função que incluira na index os arquivos das 
 *classes que forem instanciadas
 */
function __autoload($classe){
    
    $path = array("view/".$classe.".php",
       "control/".$classe.".php",
        "model/".$classe.".php",
        $classe.".php",
        "../control/".$classe.".php",
        "../model/".$classe.".php",
        "../model/".$classe.".php",
        "../view/".$classe.".php",
        "../control/".$classe.".php",
        "../view/".$classe.".php");
   
    foreach ($path as $value) {
        if(file_exists($value)){
            require_once $value;
        }
    }
}

?>
