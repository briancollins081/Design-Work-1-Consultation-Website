<?php


define("DB_HOST",'localhost');
define("DB_Name",'mcs');
define("DB_USER",'root');
define("DB_PASS",'');

abstract class Model
{
    public $conn, $query;

    public function __construct(){
        $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_Name."",DB_USER,DB_PASS);
    }

    public function prepareQuery($query){
        $this->query = $this->conn->prepare($query);
    }

    public function runQuery(){
        $this->query->execute();
    }

    public function resultSet(){
        $this->runQuery();
        return $this->query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function singleResult(){
        $this->runQuery();
        return $this->query->fetch(PDO::FETCH_ASSOC);
    }

    public function confirmEntry(){
        return $this->conn->lastInsertId();
    }
}