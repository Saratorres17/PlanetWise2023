<?php
class User
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function login($firstName, $password)
    {
        $query = 'SELECT * FROM registrousuario WHERE firstName = :firstname AND contraseña = :password';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':firstname', $firstName);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
}

?>