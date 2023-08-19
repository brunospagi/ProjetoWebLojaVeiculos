<?php

class LoginModel{

    public $id,$nome,$email,$cpf,$senha,$tipo;

    public $rows,$resposta;
    
    public function insert()
    {

        $dao = new LoginDAO();
        if(empty($this->id))
        {
            $dao->insert($this);
        }else{
            $dao->update($this);
        }
    }

    public function select()
    {
        $dao = new LoginDAO();
        $this->rows = $dao->select();
    }

    public function delete(int $id)
    {
        $dao = new LoginDAO();
        $dao->delete($id);
    }

    public function update($id)
    {
      $dao = new LoginDAO();
      $dao->update($id);
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