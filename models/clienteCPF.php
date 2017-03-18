<?php

class ClienteCPF extends Cliente {

    private $cpf;

    public function getCPF() {
        return $this->cpf;
    }
    public function setCPF($value){
        $this->cpf = $value;
    }

}
