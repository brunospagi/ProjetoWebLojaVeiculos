<?php

class LoginModel{

    public $id,$nome,$email,$cpf,$senha,$tipo;

    public $rows,$resposta;
    
    public function criarUsuario()
    {

        $dao = new LoginDAO();
        if(empty($this->id))
        {
            $dao->criarUsuario($this);
        }else{
            $dao->updateUsuario($this);
        }
    }

    public function listarUsuario()
    {
        $dao = new LoginDAO();
        $this->rows = $dao->selectUsuario();
    }

    public function deleteUsuario(int $id)
    {
        $dao = new LoginDAO();
        $dao->deletarUsuario($id);
    }

    public function updateUsuario($id)
    {
      $dao = new LoginDAO();
      $dao->updateUsuario($id);
    }

    public function logarSistama()
    {
        $dao = new LoginDAO();
        $dao->logarUsuario($this);

    }

    public function selectById($id)
    {
        $dao = new LoginDAO();
        return $dao->selectById($id);
    }


}