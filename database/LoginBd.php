<?php

class LoginBd {

    private $host = "localhost";
    private $dbname = "bdmepi";
    private $port = 3306;
    private $usuario = "adminMepi";
    private $senha = "SoftMepi123";
    private $db_charset = "utf8";


    private $conn;

    public function conn()
    {
        try {
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


    public function verificarLogin($username, $password) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM userlogin WHERE login = :username AND senha = :password");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $e) {
            throw new Exception("Erro ao verificar login: " . $e->getMessage());
        }
    }

    // Exemplo de método para fechar a conexão com o banco de dados
    public function fecharConexao() {
        $this->conn = null;
    }
}


?>