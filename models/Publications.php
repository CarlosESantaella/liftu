<?php 
    namespace App;
    use PDO;
    use PDOException;

    class Publications{
        private $conn;

        public function __construct(){
            require_once('Connection.php');
            $this->conn = Connect::connection();
        }

        public function set_publication($title, $type, $description, $link, $region){
            try{
                $stmt = $this->conn->prepare("INSERT INTO publications (title, type, description, link, region) VALUES (:title, :type, :description, :link, :region)");
                $stmt->bindParam(":title", $title);
                $stmt->bindParam(":type", $type);
                $stmt->bindParam(":description", $description);
                $stmt->bindParam(":link", $link);
                $stmt->bindParam(":region", $region);
                $stmt->execute();
                
            }catch(PDOException $e){
                die('error: '.$e->getMessage());
            }
        }

        public function get_publications(){
            try{
                $stmt = $this->conn->prepare("SELECT * FROM publications");
                $stmt->execute();
                $publications = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $publications;
            }catch(PDOException $e){
                die('error: '.$e->getMessage);
            }
        }
        public function get_publication_id(){
            try{
                $stmt = $this->conn->prepare("SELECT * FROM publications WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();
                $publication = $stmt->fetch(PDO::FETCH_ASSOC);
                return $publication;
            }catch(PDOException $e){
                die('error: '.$e->getMessage);
            }
        }

        public function delete_publication($id){
            try{
                $stmt = $this->conn->prepare("DELETE FROM publications WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();
            }catch(PDOException $e){
                die('error: '.$e->getMessage);
            }
        }

    }

?>