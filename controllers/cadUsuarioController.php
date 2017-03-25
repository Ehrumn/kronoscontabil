<?php
class cadUsuarioController extends controller {

    public function index() {
        $dados = array();
        
        
        $this->loadTemplate('cadUsuario', $dados);
    }
    
    public function salvarUsuario(){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha'])); 
        $conf_senha = md5(addslashes($_POST['conf_senha'])); 
        $tipo = addslashes($_POST['tipo']);
        echo "<script>alert('enviado');</script>";
        echo "<script>window.location.href = '/sisadm';</script>";
    }
}
