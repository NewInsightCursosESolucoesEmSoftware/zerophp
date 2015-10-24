<?php

namespace app\lib;

class AppController {

    protected $view;
    protected $controller;
    protected $action;
    protected $title;
    protected $vars = array();

    function getTitle() {
        return $this->title;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function set($key, $value) {
        $this->vars[] = array('key' => $key, 'value' => $value);
    }

    public function render($view = null) {
        $this->controller = strtolower(CONTROLLER);
        $this->action = strtolower(ACTION);

        $this->view = ROOT . 'app/view/' . $this->controller . '/' . (isset($view) && $view != null ? $view : $this->action) . ".php";

        if (!is_readable($this->view)) {
            die("Visão " . $this->view . "Não encontrada para a o controller " . CONTROLLER . "  e action " . ACTION);
        }
        
        foreach ($this->vars as $var) {
            ${$var['key']} = $var['value'];
        }

        require ROOT . 'app/template/' . TEMPLATE . '.php';
    }

    public function redirect($url) {
        header('Location:' .URL .$url);
        exit;
    }
}

?>
