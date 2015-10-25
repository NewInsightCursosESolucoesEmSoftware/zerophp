<?php

namespace app\lib;

class Run {

    private $action;
    private $controller;

    function __construct(){
        session_start();
    }
    
    function getAction() {
        return $this->action;
    }

    function getController() {
        return $this->controller;
    }

    function setAction($action) {
        $this->action = $action;
    }

    function setController($controller) {
        $this->controller = $controller;
    }

    function start() {
        
        Filter::doFilter($this->controller);
        
        $class_controller = 'app\\controller\\'.ucfirst(strtolower($this->controller)) . 'Controller';
        $method_action = strtolower($this->action);

        define('CONTROLLER', strtolower($this->controller));
        define('ACTION', strtolower($this->action));

        try {
            if (!class_exists($class_controller)) {
                throw new Exception("Classe não encontrada " . $class_controller);
            }

            $controller = new $class_controller();

            if (!method_exists($controller, $method_action)) {
                throw new Exception("Action " . $method_action . " não encontrada na classe " . $class_controller);
            }
            
            $controller->$method_action();
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>
