<?php
class linksController extends controller {

    /*public function __construct() {
        parent::__construct();
    }*/

    public function index() {
        $dados = array();
        
        $link = new Links();
        
        $dados['links'] = $link->getLinks();
        
        $this->loadTemplate('links', $dados);
    }

}