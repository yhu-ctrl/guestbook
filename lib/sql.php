<?php
class MySQL {
    private $db;
    public function __construct($host, $user, $passwd, $dbname) {
        echo '构造函数被调用';
        $this->db = mysqli_connect($host, $user, $passwd, $dbname);
    }

    public function getError() {
        return mysqli_errno($this->db);
    }

    public function query($sql) {
        $query = mysqli_query($this->db, $sql);
        if (!$query) {
            die ($this->getError());
        }
        return $query;
    }

    public function getRow($sql) {
        $query = $this->query($sql);
        $info = mysqli_fetch_array($query);
        return $info;
    }

    public function getRows($sql) {
        $query = $this->query($sql);
        $info = mysqli_fetch_all($query);
        return $info;
    }

    public function getInsertID() {
        return mysqli_insert_id($this->db);
    }

    public function getNum($sql) {
        $query = $this->query($sql);
        return mysqli_num_rows($query);
    }
}