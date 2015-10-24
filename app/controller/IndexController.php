<?php

namespace app\controller;

class IndexController extends \app\lib\AppController{
    
    function index(){
       $this->set('nome', 'José Antonio');
       $this->title = 'Página Inicial';
       $this->render();
    }
}
