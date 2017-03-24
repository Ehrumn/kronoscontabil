<?php

class ajaxController extends controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo 'index';
    }

    public function listauf() {
        $dados = array();

        $c = new cidadeEstado();
        $dados['uf'] = $c->getUF();
                
        echo json_encode($dados);
    }

}
