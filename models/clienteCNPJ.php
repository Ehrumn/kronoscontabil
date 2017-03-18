<?php

class ClienteCNPJ {
    private $cnpj;
    
    public function getCNPJ(){
        return $this->cnpj;
    }
    public function setCNPJ($value){
        $this->cnpj =  $value;
    }
}