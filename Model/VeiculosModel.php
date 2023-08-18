<?php 


class  VeiculosModel {
    //DECLARAÇÃO DE ATRIBUITOS MINHA ENTIDADE 

    public $id,$placa,$chassi,$cor,$marca,$modelo,$anofabricacao,$anomodelo,$valorentrada,$valorvenda,
    $imagem,$dataentrada,$datasaida,$publicadosite,$km,$descricao,$combustivel;
    //LINHAS DE CONSULTA DAO BANCO DE DADOS
    public $rows;


    public function save()
    {
        
        $dao = new VeiculosDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }else
        {
            $dao->update($this);
        }
    }
    public function getAllRowsIndex()
    {
        $dao = new VeiculosDAO();
        $this->rows = $dao->selectIndex();
    }

    public function getAllRows()
    {
        $dao = new VeiculosDAO();
        $this->rows = $dao->select();
    }

    public function delete(int $id)
    {
        $dao = new VeiculosDAO();
        $dao->delete($id);
    }

    public function selectById(int $id)
    {
        $dao = new VeiculosDAO();
        return $dao->selectById($id);
    }
    public function selectByIdVeiculo(int $id)
    {
        $dao = new VeiculosDAO();
        return $dao->selectByIdVeiculo($id);

    }

}