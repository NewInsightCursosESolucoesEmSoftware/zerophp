<?php

namespace app\controller;

class AtorController extends \app\lib\AppController {

    public function lista() {
        $atores = \app\model\Ator::all();
        $this->set("atores", $atores);
        $this->render();
    }

    public function adicionar() {
        $this->setTitle("Adicionar");
        $this->render();
    }

    public function post_adicionar() {
        $nome_ator = $_POST['nome_ator'];

        $ator = new \app\model\Ator();
        $ator->nome_ator = $nome_ator;

        $ator->save();

        new \app\lib\Mensagem("Salvo com sucesso", "sucesso");

        $this->redirect("ator/lista");
    }

    public function excluir() {
        if (isset($_GET['cod_ator']) && $_GET['cod_ator'] > 0) {
            $cod_ator = filter_input(INPUT_GET, 'cod_ator', FILTER_SANITIZE_NUMBER_INT);
            $ator = \app\model\Ator::find($cod_ator);
            $ator->delete();
            new \app\lib\Mensagem("Excluido com sucesso", "sucesso");
            $this->redirect("ator/lista");
        }
    }

    public function editar() {
        $this->setTitle("Editar Ator");
        if (isset($_GET['cod_ator']) && $_GET['cod_ator'] > 0) {
            $cod_ator = filter_input(INPUT_GET, 'cod_ator', FILTER_SANITIZE_NUMBER_INT);
            $ator = \app\model\Ator::find($cod_ator);
            $this->set("ator", $ator);
            $this->render();
        }
    }

    public function post_editar() {
        $cod_ator = $_POST['cod_ator'];
        $ator = \app\model\Ator::find($cod_ator);
        $ator->nome_ator = $_POST['nome_ator'];
        $ator->save();
        new \app\lib\Mensagem("Editado com sucesso", "sucesso");
        $this->redirect("ator/lista");
    }

}
