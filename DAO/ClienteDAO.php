<?php 


class ClienteDAO{

    
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=mydb";

        $this->conexao = new PDO($dsn,'root','2013@Als');
    }

    public function insert(ClienteModel $model)
    {
        $sql = "SELECT * FROM Clientes WHERE Email=? OR Cpf=? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->email);
        $stmt->bindValue(2, $model->cpf);
        $stmt->execute();
        $resultado = $stmt->rowCount();


         if($resultado == 1 )
         {
            return $model->resultado = 'duplicado';
         } 
         else 
         {
            $sql = " INSERT INTO Clientes (Nome,Email,Cpf,Telefone,Cep,Rua,Numero,Complemento,Bairro,Cidade,Estado)
            VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);
            $stmt->bindValue(3, $model->cpf);
            $stmt->bindValue(4, $model->telefone);
            $stmt->bindValue(5, $model->cep);
            $stmt->bindValue(6, $model->rua);
            $stmt->bindValue(7, $model->numero);
            $stmt->bindValue(8, $model->complemento);
            $stmt->bindValue(9, $model->bairro);
            $stmt->bindValue(10, $model->cidade);
            $stmt->bindValue(11, $model->estado);
            $stmt->execute();
            $model->resultado = 'true';
         }     
    
    }

    public function update()
    {
        
    }
}