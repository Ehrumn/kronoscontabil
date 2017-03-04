<?php
/*
* @author Fernando Oliveira - fer.oliveira88@gmail.com
* date: 04/03/2017
* package: kronoscontabil
*/

class sisadmController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        
        
        $this->loadTemplate('sisadm', $dados);
    }
}
?>

    
    