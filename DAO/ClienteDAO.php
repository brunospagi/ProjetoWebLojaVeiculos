<?php 


class ClienteDAO{

    
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=mydb";

        $this->conexao = new PDO($dsn,'root','2013@Als');
    }

    public function insert()
    {
    
    }

    public function update()
    {
        
    }
}