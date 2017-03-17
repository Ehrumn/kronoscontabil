<?php

class loginController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        $this->loadTemplate('login', $dados);
    }

    public function logar() {
        $dados = array();
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['pass']));

        $l = new Login();
        $valid = $l->validaLogin($email, $senha);
        if ($valid == 'S') {
            foreach ($l->usrLogin($email, $senha) as $value) {
                $_SESSION['usrName'] = $value['nome'];
                $_SESSION['usrEmail'] = $value['email'];
            }
            echo "<script>window.location.href='/kronoscontabil/sisadm'</script>";
        }else{
            echo "<script>window.location.href='/kronoscontabil/login'</script>";
        }
    }
    public function logoff() {
        session_destroy()/
        header("Location: ../");
    }

}

?>