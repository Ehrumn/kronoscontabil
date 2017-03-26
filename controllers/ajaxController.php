<?php

class ajaxController extends controller {

    public function index() {
        echo 'index';
    }

    public function listaUF() {
        $estados = array();
        
        $c = new cidadeEstado();
        $estados['uf'] = $c->getUF();
        //print_r($estados);
        
        echo json_encode($estados, JSON_UNESCAPED_UNICODE);
    }
    
    public function listaCidades($uf) {
        $dados = array();
        
        $c = new cidadeEstado();
        $dados['cidades'] = $c->getCidades($uf);
        
        echo json_encode($dados, JSON_UNESCAPED_UNICODE);
    }


}
