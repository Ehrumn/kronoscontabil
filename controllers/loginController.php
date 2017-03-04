<?php
class loginController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        
        $login = new Login();
        
        $this->loadTemplate('login', $dados);
    }

}