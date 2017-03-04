<?php

class Home extends model {

    public function getCategoria() {
        $array = array();
        $sql = "SELECT tipo FROM tb_links_uteis GROUP BY tipo ORDER BY tipo";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }

    public function getLinks($category) {
        $arrays = array();
        
        $sql = "SELECT * FROM tb_links_uteis WHERE ativo = 'S' and tipo = '$category'";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $arrays = $sql->fetchAll();
        }
        return $arrays;
    }

}
