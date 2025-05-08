<?php 
class Database {
    public $dbHost = 'localhost';
    public $dbUser = 'root';
    public $dbPassword = '';
    public $dbName = 'newsstand';
    public $connection;

    public function openConnection() {
        $this->connection = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
        if ($this->connection->connect_error) {
            echo "Error in Connection: ".$this->connection->connect_error;
            return false;
        } else {
            return true;
        }
    }

    public function closeConnection() {
        if ($this->connection) {
            $this->connection->close();
            $this->connection = null; 
            return true;
        } else {
            return false;
        }
    }

    public function select($query) {   
        $result = $this->connection->query($query);
        if (!$result) {
            // echo "Error: ".mysqli_error($this->connection);
            return false;
        } else {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function insert($query) {
        $result = $this->connection->query($query);
        if (!$result) {
            // echo "Error: ".mysqli_error($this->connection);
            return false;
        }
        else {
            return $this->connection->insert_id;
        }
    }

    public function delete($query) {
        $result = $this->connection->query($query);
        if (!$result) {
            // echo "Error: ".mysqli_error($this->connection);
            return false;
        } else {
            return ($this->connection->affected_rows > 0);
        }
    }
    
    // Consider adding an update method for completeness
    public function update($query) {
        $result = $this->connection->query($query);
        if (!$result) {
            // echo "Error: ".mysqli_error($this->connection);
            return false;
        } else {
            return ($this->connection->affected_rows > 0);
        }
    }
}
