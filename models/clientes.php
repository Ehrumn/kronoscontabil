<?php
class Cliente extends model{
    private $id;
    private $nome;
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
    
    public function getID(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($value){
        $this->nome = $value;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($value){
        $this->email = $value;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($value){
        $this->endereco = $value;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($value){
        $this->numero = $value;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    public function setComplemento($value){
        $this->complemento = $value;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($value){
        $this->bairro = $value;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($value){
        $this->cidade = $value;
    }
    public function getUf(){
        return $this->uf;
    }
    public function setUf($value){
        $this->uf = $value;
    }
    public function getCel(){
        return $this->cel;
    }
    public function setCel($value){
        $this->cel = $value;
    }
    public function getFone1(){
        return $this->fone1;
    }
    public function setFone1($value){
        $this->fone1 = $value;
    }
    public function getFone2(){
        return $this->fone2;
    }
    public function setFone2($value){
        $this->fone2 = $value;
    }
    
}