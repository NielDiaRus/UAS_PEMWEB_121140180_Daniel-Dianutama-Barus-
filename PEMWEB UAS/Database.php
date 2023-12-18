<?php


class Database {
    private $host = '	sql104.infinityfree.com';
    private $username = 'if0_35637660';
    private $password = 'HintFnyxP5ddG';
    private $dbname = 'if0_35637660_db_tdl';

    private $conn;

    public function connect() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function close() {
        $this->conn->close();
    }

    public function insertTask($task, $priority, $completed, $category) {
        $stmt = $this->conn->prepare("INSERT INTO tasks (task, priority, completed, category) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $task, $priority, $completed, $category);
        $stmt->execute();
        $stmt->close();
    }
}
?>
