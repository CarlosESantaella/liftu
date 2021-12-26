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

        public function set_publication($title, $type, $description, $link, $region, $date){
            try{
                $stmt = $this->conn->prepare("INSERT INTO publications (title, type, description, link, region, create_date) VALUES (:title, :type, :description, :link, :region, :date)");
                $stmt->bindParam(":title", $title);
                $stmt->bindParam(":type", $type);
                // $stmt->bindParam(":descriptionShort", $descriptionShort);
                $stmt->bindParam(":description", $description);
                $stmt->bindParam(":link", $link);
                $stmt->bindParam(":region", $region);
                $stmt->bindParam(":date", $date);
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
                die('error: '.$e->getMessage());
            }
        }

        public function get_publications_query($query, $start, $limit){
            try{
                $stmt = $this->conn->prepare("SELECT * FROM publications ".$query." LIMIT :start, :limit");
                $stmt->bindParam(":start", $start, PDO::PARAM_INT);
                $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
                $stmt->execute();
                $publications = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $publications;
            }catch(PDOException $e){
                die('error: '.$e->getMessage());
            }
        }
        public function get_publication_id($id){
            try{
                $stmt = $this->conn->prepare("SELECT * FROM publications WHERE id = :id");
                $stmt->bindParam(":id", $id);
                $stmt->execute();
                $publication = $stmt->fetch(PDO::FETCH_ASSOC);
                return $publication;
            }catch(PDOException $e){
                die('error: '.$e->getMessage());
            }
        }

        public function count_publications_query($query){
            try{
                $stmt = $this->conn->prepare("SELECT COUNT(*) as total_p FROM publications ".$query);
                $stmt->execute();
                $nRows = $stmt->fetch(PDO::FETCH_ASSOC);
                return $nRows['total_p'];
            }catch(PDOException $e){
                die('error: '.$e->getMessage());
            }
        }

        public function update_publication_id($title, $type, $description, $link, $region, $date, $id){
            try{
                $stmt = $this->conn->prepare("UPDATE publications SET title = :title, type = :type, description = :description, link = :link, region = :region, create_date = :date  WHERE id = :id");
                $stmt->bindParam(":title", $title);
                $stmt->bindParam(":type", $type);
                // $stmt->bindParam(":descriptionShort", $descriptionShort);
                $stmt->bindParam(":description", $description);
                $stmt->bindParam(":link", $link);
                $stmt->bindParam(":region", $region);
                $stmt->bindParam(":date", $date);
                $stmt->bindParam(":id", $id);
                $stmt->execute();
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