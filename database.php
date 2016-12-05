<?php

require_once('db.php');

class Database{
    private $dsn = 'mysql:host=localhost;dbname=testshop;charset=utf8';
    private $option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    private $db;
    private $statement;
    public $result;
    public function __construct(){
        try{
            $this->db = new PDO($this->dsn, 'root', '123456', $this->option);
        }catch(Exeptions $e){
          echo $this->dsn;
          echo $dsn;
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        
    }
    
    public function fetch_qur($qur){
        try {
          
          $this->statement = $this->db->query($qur);
          $this->result = $this->statement->fetchAll(PDO::FETCH_ASSOC);
            
        $db = null;
        }catch(PDOException $e){
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    public function get_id(){
      return "TSP_" . substr(uniqid(),0,10);
    }
    }

?>