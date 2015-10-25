<?php

define('DEBUG', true);

if(DEBUG){
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}else{
    ini_set('display_errors', 0);
    error_reporting(0);
}

# DEFININDO VARIAVEL RAIZ DO PROJETO
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/zerophp/');

# DEFININDO URL
define('URL', 'http://localhost:8080/zerophp/');

include ROOT.'/vendor/autoload.php';

include ROOT.'connection.php';

define('TEMPLATE', 'default');
define('CONTROLLER_DEFAULT', 'Index');
define('ACTION_DEFAULT', 'Index');

define ('APPKEY', '#QWE@1WQEWELKASOO');

?>
