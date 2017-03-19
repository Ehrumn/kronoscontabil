<?php
class cadClienteController extends controller {

    /*public function __construct() {
        parent::__construct();
    }*/

    public function index() {
        $dados = array();
        
        
        $this->loadTemplate('cadCliente', $dados);
    }

}
