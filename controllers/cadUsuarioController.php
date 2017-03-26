<?php

class cadUsuarioController extends controller {

    public function index() {
        $dados = array();
        $this->loadTemplate('cadUsuario', $dados);
    }

    public function salvarUsuario() {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha_1 = md5(addslashes($_POST['senha']));
        $conf_senha = md5(addslashes($_POST['conf_senha']));
        $tipo = addslashes($_POST['tipo']);
        if (empty($nome)) {
            echo "<script>alert('Preencha o Nome!');</script>";
            echo "<script>window.history.go(-1);</script>";
            exit;
        } else if (empty($email)) {
            echo "<script>alert('Preencha o Email!');</script>";
            echo "<script>window.history.go(-1);</script>";
            exit;
        } else if (empty($_POST['senha'])) {
            echo "<script>alert('Preencha a Senha!');</script>";
            echo "<script>window.history.go(-1);</script>";
            exit;
        } else if (empty($_POST['conf_senha'])) {
            echo "<script>alert('Preencha a Confimação da Senha!');</script>";
            echo "<script>window.history.go(-1);</script>";
            exit;
        } else if (empty($tipo)) {
            echo "<script>alert('Preencha o Tipo!');</script>";
            echo "<script>window.history.go(-1);</script>";
            exit;
        } else if ($senha_1 == $conf_senha) {
            $senha = $senha_1;
        } else {
            echo "<script>alert('Senhas não conferem!');</script>";
            echo "<script>window.history.go(-1);</script>";
            exit;
        }
        $array = array("nome" => $nome, "email" => $email, "senha" => $senha, "tipo" => $tipo);
        $cadastrar = new cadUsuario();
        $checkemail = $cadastrar->checkEmail($email);
        if ($checkemail) {
            $cadastrar->salvarUsuario($array);
            echo "<script>alert('Cadastro efetuado com sucesso!');</script>";
            echo "<script>window.location.href='/login';</script>";
            exit;
        } else {
            echo "<script>alert('Email já cadastrado, tente novamente!');</script>";
            echo "<script>window.history.go(-1);</script>";
            exit;
        }
    }

}
