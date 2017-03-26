<?php

class cidadeEstado extends model {

    public function getUF() {
        $sql = "SELECT estado, uf FROM cidades_estados GROUP BY estado, uf ORDER BY estado, uf";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $key => $value) {
                $array[] = array(
                    'estado' => $value['estado'],
                    'uf' => $value['uf'],
                );
            }
        }
        return $array;
    }
    
    public function getEstado($uf){
        $estado = array();
        $sql = "SELECT estado FROM cidades_estados WHERE uf = '$uf'";
        $sql=$this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
             $estado = $sql->fetch(); 
        }
        return $estado;
    }

    public function getCidades($uf) {
        $array = array();
        $sql = "SELECT cidade FROM cidades_estados WHERE uf = '$uf' ORDER BY cidade";
        $sql = $this->db->query($sql);
        foreach ($sql->fetchAll() as $key => $value) {
            $array[] = array(
                'cidade' => $value['cidade']
            );
        }
        return $array;
    }

}
