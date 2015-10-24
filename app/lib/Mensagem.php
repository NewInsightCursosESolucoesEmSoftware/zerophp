<?php

namespace app\lib;

class Mensagem {
    
    
    function __construct($mensagem, $tipo){
        $_SESSION["MENSAGEM"]["TEXTO"] = $mensagem;
        $_SESSION["MENSAGEM"]["TIPO"] = $tipo;
    }
    
    static function getMessage(){
       if (isset($_SESSION["MENSAGEM"])) {

            $mensagem = $_SESSION["MENSAGEM"]["TEXTO"];
            $tipo = $_SESSION["MENSAGEM"]["TIPO"];

            unset($_SESSION["MENSAGEM"]);
            
            $html_mensagem = "";
            
          switch ($tipo) {
                case "sucesso":
                     $html_mensagem.='<div class="alert alert-success" role="alert">'.$mensagem.'</div>';
                    break;
                case "erro":
                     $html_mensagem.='<div class="alert alert-danger" role="alert">'.$mensagem.'</div>';
                    break;
            }

            return $html_mensagem;
        }
        return null;
    }
}
