<?php



class ClienteModel{

    public $id,$nome,$email,$cpf,$telefone,$cep,$rua,$numero,$complemento,$bairro,$cidade,$estado;
    public $rows,$resultado;


    public function insertCliente()
    {
        $dao = new ClienteDAO();

        if(empty($this->id))
        {
            $dao->insertCliente($this);
        }else{
            $dao->updateCliente($this);
        }
    }

}