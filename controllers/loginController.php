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
        } else {
            echo "<script>window.location.href='/kronoscontabil/login'</script>";
        }
    }

    public function logoff() {
        session_destroy();
        header("Location: ../");
    }

    public function trocaSenha() {

        $email = addslashes($_POST['email']);
        if (isset($email) && !empty($email)) {
            $login = new Login();
            $valida = $login->validaEmail($email);
            if ($valida == "S") {
                $this->enviarEmail($email);

                echo "<script>alert('Nova senha enviado para seu email!')</script>";
                echo "<script>window.location.href='/kronoscontabil/login'</script>";
            } else {
                echo "<script>alert('Email Invalido!')</script>";
                echo "<script>window.location.href='/kronoscontabil/login'</script>";
            }
        } else {
            echo "<script>alert('Digite seu email!')</script>";
        }
    }

    public function enviarEmail($email) {
        $login = new Login();
        $novasenha = $login->recSenha($email);

        $corpo = "Nome: Cliente Sistema Kronos \r\n" . "Email: " . $email . "\r\n" . "Nova Senha: " . $novasenha;

        $email_headers = "From: suporte@kronoscontabil.com.br\r\n" . "Reply-To: $email" . "\r\n" . "Return-Path: suporte@kronoscontabil.com.br\r\n" . "X-Mailer: PHP/" . phpversion();

        if (mail($email_destinatario, $assunto, $corpo, $email_headers)) {
            echo "<script>alert('Contato enviado!');</script>";
        } else {
            echo "<script>alert('Algo deu errado, tente novamente!');</script>";
        }
    }

}

?>