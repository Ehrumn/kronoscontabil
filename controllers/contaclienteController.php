<?php
/*
* @author Fernando Oliveira - fer.oliveira88@gmail.com
* date: 04/03/2017
* package: kronoscontabil
*/

class contaclienteController extends controller {

    public function index() {
        $dados = array();
        
        if(isset($_SESSION['usrName']) && !empty($_SESSION['usrName']) && $_SESSION['usrTipo'] == "CLIENTE"){
            $this->loadTemplate('contacliente', $dados);
        }else{
            session_destroy();
            echo "<script>window.location.href='/login';</script>";
        }
        
    }
}
?>

    
    