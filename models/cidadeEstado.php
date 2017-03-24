<?php

class cidadeEstado extends model {

    public function getUF() {
        $array = array();

        $sql = "SELECT sigla as uf FROM estados GROUP BY sigla";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
    
    public function getCidades($uf){
        $array= array();
        $sql = "SELECT cidade FROM cidades WHERE uf = '$uf' ORDER BY cidade";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
           $array = $sql->fetchAll();
        }
        
        return $array;
    }

}
