<?php

class model {

    protected $db;

    public function __construct() {
        global $config;
        try {
            $this->db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
        } catch (PDOException $e) {
            echo "Conexão Falhou: " . $e->getMessage();
        }

        /*$this->db->query("SET NAMES 'utf8'");
        $this->db->query('SET character_set_connection=utf8');
        $this->db->query('SET character_set_client=utf8');
        $this->db->query('SET character_set_results=utf8');*/
    }

}
