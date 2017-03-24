<?php

class Login extends model {

    public function validaLogin($email, $senha) {

        $sql = "SELECT count(*) as totRec FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql = $this->db->query($sql);

        $totRec = $sql->fetchColumn();

        if ($totRec == 0) {
            echo "<script>alert('Email e/ou senha incorretos!')</script>";    
            return false;
        } else {
            if ($this->validaBloqueio($email) == 'N') {
                return true;
            } else {
                echo "<script>alert('Sua senha foi bloqueada!')</script>";
                return false;
            }
        }
    }

    public function usrLogin($email, $senha) {
        $array = array();

        $sql = "SELECT nome, email, tipo FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function zeraErro($email) {
        $sql = "UPDATE usuarios SET qtd_erros = 0 WHERE email = '$email'";
        $sql = $this->db->query($sql);
    }

    public function loginError($email) {
        $sql = "select * FROM usuarios WHERE email = '$email'";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = array();

            $sql = "select qtd_erros, trocar_senha FROM usuarios WHERE email = '$email'";
            $sql = $this->db->query($sql);
            $array = $sql->fetchAll();
            foreach ($array as $value) {
                $erros = $value['qtd_erros'];
                $trocasenha = $value['trocar_senha'];
            }

            if ($trocasenha != 'S') {
                if ($erros < 3) {
                    $sql = "UPDATE usuarios SET qtd_erros = qtd_erros + 1 WHERE email = '$email'";
                    $this->db->query($sql);
                } else {
                    $sql = "UPDATE usuarios SET qtd_erros = qtd_erros + 1, trocar_senha = 'S' WHERE email = '$email'";
                    $this->db->query($sql);
                }
            } else {
                echo "<script>alert('Sua senha foi bloqueada!')</script>";
            }
        }
    }

    public function validaBloqueio($email) {
        $sql = "SELECT trocar_senha FROM usuarios WHERE email = '$email'";
        $sql = $this->db->query($sql);

        $trocasenha = $sql->fetchColumn();

        return $trocasenha;
    }

    public function validaEmail($email) {
        $sql = "SELECT email FROM usuarios WHERE email ='$email' ";
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $valid = "S";
        } else {
            $valid = "N";
        }
        return $valid;
    }

    public function recSenha($email) {
        $senha = rand(12345678, 98745632);
        $sql = "UPDATE usuarios SET trocar_senha = 'N', qtd_erros = 0, senha = md5('$senha') WHERE email = '$email' ";
        $this->db->query($sql);
        return $senha;
    }

}
