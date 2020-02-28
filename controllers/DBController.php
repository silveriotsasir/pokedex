<?php 
    class DBController {

        private $servername;
        private $username;
        private $password;
        private $dbname;

        public function __construct($servername, $username, $password, $dbname){
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }

        public function getConnection (){
            $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            return $conn;
        }

        public function getPokemon($id){
            $conn = $this->getConnection();
            $sql = "SELECT * FROM pokemon WHERE id=$id";
            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
                while($row = $result->fetch_assoc()) {
                    $pokemon = new Pokemon($row['id'], $row['name'],$row['height'], $row['weight'], $row['base_experience']);
                }
                return $pokemon;
            }
            else{
                return null;
            }
            $conn->close();
                    }

    }
?>