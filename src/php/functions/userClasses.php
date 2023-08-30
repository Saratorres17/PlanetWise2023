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
        $query = 'SELECT * FROM registrousuario WHERE firstName = :firstname';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':firstname', $firstName);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['contraseña'])) {
            return $user;
        }
        else{
            return false;
        }
    }

    
}

?>