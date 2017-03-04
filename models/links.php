<?php
class Links extends model {
        public function getLinks(){
            $array = array();
            
            $sql = "SELECT * FROM tb_links_uteis order by tipo, titulo";
            $sql = $this->db->query($sql);
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            
            return $array;
        }
        public function setLinks($tittle, $link, $type){
            
        }
}