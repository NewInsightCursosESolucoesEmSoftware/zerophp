<?php

include 'config.php';

# Recuperando url sobrescrita
$urlRewrited = isset($_GET['urlrewrited'])?$_GET['urlrewrited']:'';

if($urlRewrited){
    $rota = explode('/', $urlRewrited);
    $controller = $rota[0];
    $action = $rota[1];
}else{
    $controller = CONTROLLER_DEFAULT;
    $action = ACTION_DEFAULT;
}

$run = new \app\lib\Run();
$run->setController($controller);
$run->setAction($action);
$run->start();

?>