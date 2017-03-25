<?php

class ajaxController extends controller {

    public function index() {
        echo 'index';
    }

    public function listaUF() {
        $dados = array();
        
        $c = new cidadeEstado();
        $dados['uf'] = $c->getUF();
        
        echo json_encode($dados);
    }
    
    public function listaCidades($uf) {
        $dados = array();
        
        $c = new cidadeEstado();
        $dados['cidades'] = $c->getCidades($uf);
        
        echo json_encode($dados);
    }


}
