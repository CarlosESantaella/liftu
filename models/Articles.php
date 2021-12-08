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

        public function get_article_id($id){
            try{
                $stmt = $this->conn->prepare('SELECT * FROM articles WHERE id = :id');
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $article = $stmt->fetch(PDO::FETCH_ASSOC);
                return $article;
            }catch(PDOException $e){
                die('error: '.$e->getMessage().' on '.$e->getLine());
            }
        }
        public function update_article_id($title, $type, $description_short, $description, $image, $link, $date, $id){
            try{
                $stmt = $this->conn->prepare('UPDATE articles SET title=:title, description_short=:description_short, description=:description, image=:image, link=:link, type=:type, date_create=:date WHERE id = :id');
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':description_short', $description_short);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':image', $image);
                $stmt->bindParam(':link', $link);
                $stmt->bindParam(':type', $type);
                $stmt->bindParam(':date', $date);
                $stmt->bindParam(':id', $id);
                $stmt->execute();

            }catch(PDOException $e){
                die('error: '.$e->getMessage().' on '.$e->getLine());
            }
        }
        public function update_article_id_without_image($title, $type, $description_short, $description, $link, $date, $id){
            try{
                $stmt = $this->conn->prepare('UPDATE articles SET title=:title, description_short=:description_short, description=:description, link=:link, type=:type, date_create=:date WHERE id = :id');
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':description_short', $description_short);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':link', $link);
                $stmt->bindParam(':type', $type);
                $stmt->bindParam(':date', $date);
                $stmt->bindParam(':id', $id);
                $stmt->execute();

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