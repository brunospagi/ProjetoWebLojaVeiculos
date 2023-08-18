<?php 


class LoginDAO{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=mydb";

        $this->conexao = new PDO($dsn,'root','2013@Als');
    }

    public function criarUsuario(LoginModel $model)
    {
        $sql = "SELECT * FROM Usuarios WHERE Email=? OR Cpf=? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->email);
        $stmt->bindValue(2, $model->cpf);
        $stmt->execute();
        $resultado = $stmt->rowCount();


         if($resultado == 1 )
         {
            return $model->resposta = 'duplicado';
         } 
         else 
         {
            $sql = " INSERT INTO Usuarios (Nome,Email,Cpf,Senha,Tipo)
            VALUES (?,?,?,?,?)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->email);
            $stmt->bindValue(3, $model->cpf);
            $stmt->bindValue(4, $model->senha);
            $stmt->bindValue(5, $model->tipo);
            $stmt->execute();
            $model->resposta = 'true';
         }     

    }

    public function logarUsuario(LoginModel $model)
    {
        $sql = "SELECT * FROM Usuarios WHERE Email=? AND Senha=? LIMIT 1 ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->email);
        $stmt->bindValue(2, $model->senha);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS);
        $resultado = $stmt->rowCount();

        if($resultado > 0){
            foreach($data as $item){
            }
                session_start();
                $_SESSION['Nome'] = $item->Nome;
                $_SESSION['Email'] = $item->Email;
                $_SESSION['Tipo'] = $item->Tipo;
                header('location: /admin');
        } else {
            header("Location: /admin/login?success=false ");
        }
        

    }

    public function deletarUsuario(int $id)
    {
        $sql = "DELETE FROM Usuarios WHERE Id=? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute(); 
    }

    public function updateUsuario(LoginModel $model)
    {

        if(empty($model->senha)){
            
            $sql = " UPDATE Usuarios SET Nome=?,Email=?,Cpf=?,Tipo=?
        WHERE Id=? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->cpf);
        $stmt->bindValue(4, $model->tipo);
        $stmt->bindValue(5, $model->id);
        $stmt->execute(); 
        $model->resposta = 'update';

        } else{

            $sql = " UPDATE Usuarios SET Nome=?,Email=?,Senha=?,Cpf=?,Tipo=?
        WHERE Id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->bindValue(4, $model->cpf);
        $stmt->bindValue(5, $model->tipo);
        $stmt->bindValue(6, $model->id);
        $stmt->execute(); 
        $model->resposta = 'update';
        }
        

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        $stmt->bindValue(4, $model->cpf);
        $stmt->bindValue(5, $model->tipo);
        $stmt->bindValue(6, $model->id);
        $stmt->execute(); 
        $model->resposta = 'update';
        
    }

    public function selectUsuario()
    {
        $sql = "SELECT Id,Nome,Email,Cpf,Tipo FROM Usuarios ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {

        $sql = "SELECT * FROM Usuarios WHERE Id=? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}