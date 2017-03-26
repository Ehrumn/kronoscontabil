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

    public function getCidades($uf) {
        $array = array();
        $sql = "SELECT cidade FROM cidades_estados WHERE uf = '$uf' ORDER BY cidade";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

}
