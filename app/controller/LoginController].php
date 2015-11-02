<?php

namespace app\controller;

class LoginController extends app\lib\AppController{
    
    public function doLogin($usuario){
        echo 'Acesso ao doLogin';
        
        $sql = 'SELECT * FROM Usuario WHERE login = ? AND senha = ?; ';
        $values = array($usuario->login,$usuario->senha);
        
        
        $usuario_ = \app\model\Usuario::find_by_sql($sql,$values);
        
        echo 'Usuario:' . $usuario_->nome;
        
        Session::set('usuario',$usuario);
        $url = 'ator/lista';
        header('Location:'.URL.$url);
    }
}
?>

