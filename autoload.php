<?php

function autoload($className){
    $className = str_replace('\\', '/',$className).".php";
    
    if(is_readable($className)){
        require ROOT.$className;
    }else{
        die('Arquivo não encontrado '.$className);
    }
}

spl_autoload_register("autoload");

?>

