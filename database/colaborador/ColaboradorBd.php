<?php

class ColaboradorBd {

    private $host = "localhost";
    private $dbname = "bdmepi";
    private $port = 3306;
    private $usuario = "adminMepi";
    private $senha = "SoftMepi123";
    private $db_charset = "utf8";

    public function conn(){

        try{
            $conn = "mysql:host=$this->host;
            dbname=$this->dbname;port=$this->port";

            return new PDO(
            $conn,
            $this->usuario,
            $this->senha,
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $this->db_charset]
            );
        } catch (PDOException $e) {
            // Lidar com a exceção
            echo "Erro de conexão: " . $e->getMessage();
            // Ou você pode lançar a exceção novamente para que quem chama este método a trate
            // throw $e;
        }
    }
    
   
}
