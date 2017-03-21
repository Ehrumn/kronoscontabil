<?php

class clientesController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        $this->loadTemplate('clientes', $dados);
    }

    public function salvar() {
        $c = new Clientes();

        $c->setNome($_POST['nome']);
        $c->setCPF($_POST['cpf']);
        $c->setCNPJ($_POST['cnpj']);
        $c->setEmail($_POST['email']);
        $c->setEndereco($_POST['endereco']);
        $c->setNumero($_POST['numero']);
        $c->setComplemento($_POST['complemento']);
        $c->setBairro($_POST['bairro']);
        $c->setCidade($_POST['cidade']);
        $c->setUf($_POST['uf']);
        $c->setCel($_POST['cel']);
        $c->setFone1($_POST['fone1']);
        $c->setFone2($_POST['fone2']);
        $c->setResponsavel($_POST['responsavel']);
        $c->setTemHonorario($_POST['tem_honorario']);
        $c->setValHonorario($_POST['val_honorario']);
        $c->setAtivo($_POST['ativo']);

        $c->salvar($_POST['id']);
    }

}
