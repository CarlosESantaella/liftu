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

        public function get_articles(){
            try{
                $stmt = $this->conn->prepare('SELECT * FROM articles');
                $stmt->execute();
                $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $articles;
            }catch(PDOException $e){
                die('error: '.$e->getMessage().' on '.$e->getLine());
            }
        }

        public function delete_article($id){
            try{
                $stmt = $this->conn->prepare('DELETE FROM articles WHERE id = :id');
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            }catch(PDOException $e){
                die('error: '.$e->getMessage());
            }
        }

    }

?>