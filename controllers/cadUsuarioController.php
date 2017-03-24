<?php
class cadUsuarioController extends controller {

    public function index() {
        $dados = array();
        
        
        $this->loadTemplate('cadUsuario', $dados);
    }

}
