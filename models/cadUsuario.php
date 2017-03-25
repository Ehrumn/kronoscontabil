<?php

class cadUsuario extends model {

    public function salvarUsuario($array) {
        $nome = $array['nome'];
        $email = $array['email'];
        $senha = $array['senha'];
        $tipo = $array['tipo'];

        $sql = "INSERT INTO usuarios SET nome = '$nome' , email = '$email', senha = '$senha', tipo = '$tipo', qtd_erros = 0, trocar_senha = 'N' ";
        //$this->db->query($sql);       
        echo "<script>alert('cadastrado');</script>";
    }

    public function checkEmail($email) {
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            return false;
        }else{
            return true;
        }
    }

}
