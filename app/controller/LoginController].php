<?php

namespace app\controller;

class LoginController extends app\lib\AppController{
    
    public function doLogin(){
        
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $sql = 'SELECT * FROM Usuario WHERE login = ? AND senha = ?; ';
        $values = array($login,$senha);
        
        
        $usuario = \app\model\Usuario::find_by_sql($sql,$values);
        
        echo 'Usuario:' . $usuario->nome;
        
        Session::set('usuario',$usuario);
        $url = 'ator/lista';
        header('Location:'.URL.$url);
    }
}
?>

