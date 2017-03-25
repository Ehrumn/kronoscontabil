<?php

class cidadeEstado extends model {

    public function getUF() {
        $array = array();

        $sql = "SELECT uf FROM estados GROUP BY uf";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getCidades($uf) {
        $array = array();
        $sql = "select a.nome as cidade " .
                "FROM cidades a, estados b " .
                "WHERE b.uf = '$uf' and b.cod_estados=a.cod_estados " .
                "GROUP BY a.nome ORDER BY a.nome";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        print_r($array);
        return $array;
    }

}
