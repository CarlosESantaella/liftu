<?php 
    namespace App;
    use PDO;
    use PDOException;

    class Articles{
        private $conn;

        public function __construct(){
            require_once('Connection.php');
            $this->conn = Connect::connection();
        }

        public function set_article($title, $type, $description_short, $description, $link, $fileName, $date){
            try{
                $stmt = $this->conn->prepare('INSERT INTO articles (title, description_short, description, image, link, type, date_create) VALUES (:title, :description_short, :description, :file, :link, :type, :date_create)');
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':description_short', $description_short);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':file', $fileName);
                $stmt->bindParam(':link', $link);
                $stmt->bindParam(':type', $type);
                $stmt->bindParam(':date_create', $date);
                $stmt->execute();
            }catch(PDOException $e){
                die('error: '.$e->getMessage().' on '.$e->getLine());
            }
        }
    }

?>