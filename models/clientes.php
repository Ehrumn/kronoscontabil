<?php

class Clientes extends model {

    private $id;
    private $nome;
    private $cpf;
    private $cnpj;
    private $email;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $cel;
    private $fone1;
    private $fone2;
    private $responsavel;
    private $tem_honorario;
    private $val_honorario;
    private $ativo;

    public function __construct($i) {
        parent::__construct();

        if (!empty($i)) {
            $sql = "select * from usuarios where id = ?";
            $sql = $this->db->prepare($sql);
            $sql->execute(array($i));

            if ($sql->rowCount() > 0) {
                $data = $sql->fetch();
                $this->id = $data['id'];
                $this->nome = $data['nome'];
                $this->cpf = $data['cpf'];
                $this->cnpj = $data['cnpj'];
                $this->email = $data['email'];
                $this->endereco = $data['endereco'];
                $this->numero = $data['numero'];
                $this->complemento = $data['complemento'];
                $this->bairro = $data['bairro'];
                $this->cidade = $data['cidade'];
                $this->uf = $data['uf'];
                $this->cel = $data['cel'];
                $this->fone1 = $data['fone1'];
                $this->fone2 = $data['fone2'];
                $this->responsavel = $data['responsavel'];
                $this->tem_honorario = $data['tem_honorario'];
                $this->val_honorario = $data['val_honorario'];
                $this->ativo = $data['ativo'];
            }
        }
    }

    public function getID() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($value) {
        $this->nome = $value;
    }

    public function getCPF() {
        return $this->cpf;
    }

    public function setCPF($value) {
        $this->cpf = $value;
    }

    public function getCPNJ() {
        return $this->cnpj;
    }

    public function setCNPJ($value) {
        $this->cnpj = $value;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($value) {
        $this->email = $value;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($value) {
        $this->endereco = $value;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($value) {
        $this->numero = $value;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento($value) {
        $this->complemento = $value;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($value) {
        $this->bairro = $value;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($value) {
        $this->cidade = $value;
    }

    public function getUf() {
        return $this->uf;
    }

    public function setUf($value) {
        $this->uf = $value;
    }

    public function getCel() {
        return $this->cel;
    }

    public function setCel($value) {
        $this->cel = $value;
    }

    public function getFone1() {
        return $this->fone1;
    }

    public function setFone1($value) {
        $this->fone1 = $value;
    }

    public function getFone2() {
        return $this->fone2;
    }

    public function setFone2($value) {
        $this->fone2 = $value;
    }

    public function getTemHonorario() {
        return $this->tem_honorario;
    }

    public function setTemHonorario($value) {
        $this->tem_honorario = $value;
    }

    public function getValHonorario() {
        return $this->val_honorario;
    }

    public function setValHonorario($value) {
        $this->val_honorario = $value;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setAtivo($value) {
        $this->ativo = $value;
    }

    public function salvar() {
        if (!empty($this->id)) {
            $sql = "UPDATE cliente SET 
                nome = ?,
                cpf = ?, 
                cnpj = ?, 
                email = ?, 
                endereco = ?, 
                numero = ?, 
                complemento = ?, 
                bairro = ?,
                cidade = ?,
                uf = ?,
                cel = ?,
                fone1 = ?,
                fone2 = ?, 
                responsavel = ?,
                tem_honorario = ?,
                val_honorario = ?
                ativo = ?
                WHERE id = ?";
            $sql = $this->db->prepare($sql);
            $sql->execute(array($this->nome,
                $this->cpf,
                $this->cnpj,
                $this->email,
                $this->endereco,
                $this->numero,
                $this->complemento,
                $this->bairro,
                $this->cidade,
                $this->uf,
                $this->fone1,
                $this->fone2,
                $this->responsavel,
                $this->tem_honorario,
                $this->val_honorario,
                $this->ativo,
                $this->id));
        } else {
            $sql = "INSERT INTO cliente SET 
                nome = ?,
                cpf = ?, 
                cnpj = ?, 
                email = ?, 
                endereco = ?, 
                numero = ?, 
                complemento = ?, 
                bairro = ?,
                cidade = ?,
                uf = ?,
                cel = ?,
                fone1 = ?,
                fone2 = ?, 
                responsavel = ?,
                tem_honorario = ?,
                val_honorario = ?
                ativo = ?
                WHERE id = ?";

            $sql = $this->db->prepare($sql);
            $sql->execute(array($this->nome,
                $this->cpf,
                $this->cnpj,
                $this->email,
                $this->endereco,
                $this->numero,
                $this->complemento,
                $this->bairro,
                $this->cidade,
                $this->uf,
                $this->fone1,
                $this->fone2,
                $this->responsavel,
                $this->tem_honorario,
                $this->val_honorario,
                $this->ativo));
        }
    }
    
    public function delete(){
        $sql = "DELETE FROM clientes where id = '$this->id'";
        $this->db->query($sql);
    }
    
    public function selecionaUF(){
        $dados = array();
        $sql = "SELECT sigla FROM estados ORDER BY sigla";
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            $dados = $sql->fecthAll();
        }
        print_r($dados);
        
        return $dados;
    }
    
    public function carregaCliente($i){
        if (!empty($i)) {
            $sql = "select * from usuarios where id = ?";
            $sql = $this->db->prepare($sql);
            $sql->execute(array($i));

            if ($sql->rowCount() > 0) {
                $data = $sql->fetch();
                $this->id = $data['id'];
                $this->nome = $data['nome'];
                $this->cpf = $data['cpf'];
                $this->cnpj = $data['cnpj'];
                $this->email = $data['email'];
                $this->endereco = $data['endereco'];
                $this->numero = $data['numero'];
                $this->complemento = $data['complemento'];
                $this->bairro = $data['bairro'];
                $this->cidade = $data['cidade'];
                $this->uf = $data['uf'];
                $this->cel = $data['cel'];
                $this->fone1 = $data['fone1'];
                $this->fone2 = $data['fone2'];
                $this->responsavel = $data['responsavel'];
                $this->tem_honorario = $data['tem_honorario'];
                $this->val_honorario = $data['val_honorario'];
                $this->ativo = $data['ativo'];
            }
        }
    }

}
