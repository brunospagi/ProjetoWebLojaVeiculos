<?php



class ClienteModel{

    public $id,$nome,$email,$cpf,$telefone,$cep,$rua,$numero,$complemento,$bairro,$cidade,$estado;
    public $rows,$resultado;


    public function insert()
    {
        $dao = new ClienteDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }else{
            $dao->update($this);
        }
    }

}