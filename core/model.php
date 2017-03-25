<?php

class model {

    protected $db;

    public function __construct() {
        global $config;
        $this->db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
        
        $this->db->query("SET NAMES 'utf8'");
        $this->db->query('SET character_set_connection=utf8');
        $this->db->query('SET character_set_client=utf8');
        $this->db->query('SET character_set_results=utf8');
    }

}
