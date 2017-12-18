<?php

class Mysql {

    protected $conn = false;

    protected $sql;

    public function __construct($config=array()) {

        $host = isset($config['host']) ? $config['host'] : 'localhost';

        $user = isset($config['user']) ? $config['user'] : 'root';

        $password = isset($config['password']) ? $config['password'] : '';

        $dbname = isset($config['dbname']) ? $config['dbname'] : '';

        $port = isset($config['port']) ? $config['port'] : '3306';

        $this->conn = mysqli_connect("$host:$port", $user, $password) or die('Database connection error.');

        mysqli_select_db($conn, $dbname) or die('Database selection error.');

        // $this->setChar($charset);
    }

    public function setChar($charset) {

        $sql = 'set names ' . $charset;

        // $this->query($sql);
    }

    public function query() {

    }

    public function getOne() {

    }

    public function getRow() {

    }

    public function getAll() {

    }

    public function getCol() {

    }

    public function getInsertId() {

    }

    public function errno() {

    }

    public function error() {

    }
}
