<?php

class VeiculosDAO{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=mydb";

        $this->conexao = new PDO($dsn,'root','2013@Als');
    }
    public function update(VeiculosModel $model)
    {
        $sql = " UPDATE Veiculos SET Placa=?,Chassi=?,Cor=?,Marca=?,Modelo=?,Ano_Fabricacao=?,
        Ano_Modelo=?,Valor_Entrada=?,Valor_Venda=?,Publicado_Site=?,Km=?,Descricao=?,Combustivel=?
        WHERE Id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->placa);
        $stmt->bindValue(2, $model->chassi);
        $stmt->bindValue(3, $model->cor);
        $stmt->bindValue(4, $model->marca);
        $stmt->bindValue(5, $model->modelo);
        $stmt->bindValue(6, $model->anofabricacao);
        $stmt->bindValue(7, $model->anomodelo);
        $stmt->bindValue(8, $model->valorentrada);
        $stmt->bindValue(9, $model->valorvenda);
        $stmt->bindValue(10, $model->publicadosite);
        $stmt->bindValue(11, $model->km);
        $stmt->bindValue(12, $model->descricao);
        $stmt->bindValue(13, $model->combustivel);
        $stmt->bindValue(14, $model->id);
        $stmt->execute();

    }

    public function insert(VeiculosModel $model)
    {
        $sql = " INSERT INTO Veiculos (Placa,Chassi,Cor,Marca,Modelo,Ano_Fabricacao,
        Ano_Modelo,Valor_Entrada,Valor_Venda,Imagem,Data_Entrada,Publicado_Site,Km,Combustivel,Descricao)
         VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
         $stmt = $this->conexao->prepare($sql);
         $stmt->bindValue(1, $model->placa);
         $stmt->bindValue(2, $model->chassi);
         $stmt->bindValue(3, $model->cor);
         $stmt->bindValue(4, $model->marca);
         $stmt->bindValue(5, $model->modelo);
         $stmt->bindValue(6, $model->anofabricacao);
         $stmt->bindValue(7, $model->anomodelo);
         $stmt->bindValue(8, $model->valorentrada);
         $stmt->bindValue(9, $model->valorvenda);
         $stmt->bindValue(10, $model->imagem);
         $stmt->bindValue(11, $model->dataentrada);
         $stmt->bindValue(12, $model->publicadosite);
         $stmt->bindValue(13, $model->km);
         $stmt->bindValue(14, $model->combustivel);
         $stmt->bindValue(15, $model->descricao);
         $stmt->execute();

    }

    public function selectIndex()
    {
        $sql = "SELECT Id,Marca,Modelo,Ano_Modelo,Valor_Venda,Imagem,Km,Combustivel,Descricao FROM 
        Veiculos WHERE Publicado_Site='Sim' ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function select()
    {
        $sql = "SELECT * FROM Veiculos ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Veiculos WHERE Id=? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute(); 
    }

    public function selectById(int $id)
    {

        $sql = "SELECT * FROM Veiculos WHERE Id=? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectByIdVeiculo(int $id)
    {

        $sql = "SELECT * FROM Veiculos WHERE Id=? AND Publicado_Site='Sim' ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }


}