<?php

class loginController extends controller {

    public function index() {
        $dados = array();
        if (isset($_SESSION['usrName']) && !empty($_SESSION['usrName'])) {
            if ($_SESSION['usrTipo'] == 'ADMIN') {
                echo "<script>window.location.href='/sisadm'</script>";
            } else {
                echo "<script>window.location.href='/contacliente'</script>";
            }
        } else {
            $this->loadTemplate('login', $dados);
        }
    }

    public function logar() {
        $dados = array();
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['pass']));

        $l = new Login();
        $valid = $l->validaLogin($email, $senha);
        
        if ($valid) {
            foreach ($l->usrLogin($email, $senha) as $value) {
                $_SESSION['usrName'] = $value['nome'];
                $_SESSION['usrEmail'] = $value['email'];
                $_SESSION['usrTipo'] = $value['tipo'];               
                
                if ($value['tipo'] == 'ADMIN') {
                    echo "<script>window.location.href='/sisadm'</script>";
                } else {
                    echo "<script>window.location.href='/contacliente'</script>";
                }
            }
        } else {
            $l->loginError($email);
            echo "<script>window.location.href='/login'</script>";
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
                echo "<script>window.location.href='/login'</script>";
            } else {
                echo "<script>alert('Email Invalido!')</script>";
                echo "<script>window.location.href='/login'</script>";
            }
        } else {
            echo "<script>alert('Digite seu email!')</script>";
        }
    }

    public function enviarEmail($email) {
        $login = new Login();
        $novasenha = $login->recSenha($email);

        $assunto = "Nova senha Sistema Kronos Contabil";

        $corpo = "Nome: Cliente Sistema Kronos \r\n" . "Email: " . $email . "\r\n" . "Nova Senha: " . $novasenha;

        $email_headers = "From: suporte@kronoscontabil.com.br\r\n" . "Reply-To: $email" . "\r\n" . "Return-Path: suporte@kronoscontabil.com.br\r\n" . "X-Mailer: PHP/" . phpversion();

        if (mail($email, $assunto, $corpo, $email_headers)) {
            echo "<script>alert('Contato enviado!');</script>";
        } else {
            echo "<script>alert('Algo deu errado, tente novamente!');</script>";
        }
    }

}

?>