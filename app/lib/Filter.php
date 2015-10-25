<?php

namespace app\lib;

class Filter {

    public static function doFilter($controller) {
        $usuario = Session::get('usuario');
        $url = 'auth/login';

        if (strtolower($controller) != 'auth') {
            if (!$usuario) {
                header('Location:' . URL . $url);
                exit;
            }
        }
    }

}
