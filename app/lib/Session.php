<?php

namespace app\lib;

class Session {


    public static function set($nome, $valor){
        $_SESSION[$nome . APPKEY] = serialize($value);
     }

    public static function get($nome){
            if(isset($_SESSION[$nome . APPKEY])){
                return unserialize($_SESSION[$nome . APPKEY]);
            }
            return null;
    }

    public static function destroy($nome){
        unset($_SESSION[$nome . APPKEY]);
    }
}

?>