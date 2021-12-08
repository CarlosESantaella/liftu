<?php 
namespace App;
use PDO;
use PDOException;

class Users{
    private $conn;

    public function __construct(){
        require_once('Connection.php');
        $this->conn = Connect::connection();
    }

    public function get_user_login($email, $pass){
        try{
            $stmt = $this->conn->prepare('SELECT * FROM users WHERE email = :email AND password = :pass');
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        }catch(PDOException $e){
            die('error: '.$e->getMessage().' on '.$e->getLine());
        }
    }
}

?>