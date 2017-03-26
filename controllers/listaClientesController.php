<?php
class listaClientesController extends controller{
    public function index(){
        $dados = array();
        
        $this->loadTemplate('listaClientes', $dados);
    }
    
    public function listarClientes(){
        $dados = array();
        $cli = new listaClientes();
        
        $dados['clientes'] = $cli->listaClientes();
        
        echo json_encode($dados, JSON_UNESCAPED_UNICODE);
        
    }
    
}