<?php

$db_user = 'root';
$db_password = '';
$db_host = 'localhost';
$db_database = 'aulaphp';
$db_port = '5432';

$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory(ROOT.'app/model');
$cfg->set_connections(array(
    #'development' => 'pgsql://'.$db_user.':'.$db_password.'@'.$db_host.'/'.$db_database.''
    'development' => 'mysql://'.$db_user.':'.$db_password.'@'.$db_host.'/'.$db_database
));

