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

    public function get_user_login($email, $pass, $rol){
        try{
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email AND password = :pass AND rol = :rol");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->bindParam(':rol', $rol);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        }catch(PDOException $e){
            die('error: '.$e->getMessage().' on '.$e->getLine());
        }
    }

    public function get_user_by_id($id){
        try{
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        }catch(PDOException $e){
            die('error: '.$e->getMessage().' on '.$e->getLine());
        }
    }

    public function get_email($email){
        try{
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $email = $stmt->fetch(PDO::FETCH_ASSOC);
            return $email;
        }catch(PDOException $e){
            die('error: '.$e->getMessage().' on '.$e->getLine());
        }
    }

    public function set_user($name, $father_lastname, $mother_lastname, $email, $password, $type){
        try{
            $stmt = $this->conn->prepare("INSERT INTO users (name, father_lastname, mother_lastname, email, password, type) VALUES (:name, :father_lastname, :mother_lastname, :email, :password, :type)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':father_lastname', $father_lastname);
            $stmt->bindParam(':mother_lastname', $mother_lastname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':type', $type);
            $stmt->execute();

        }catch(PDOException $e){
            die('error: '.$e->getMessage().' on '.$e->getLine());
        }
    }

}

?>