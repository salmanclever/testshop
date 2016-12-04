<?php

require_once(db.php);

class Data_base{
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    $db;
    $result;
    public function __construct(){
        try{
            $this->db = new PDO($this->dsn, $user, $pass, $this->option);
        }catch(Exeptions $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        
    }
    
    public function fetch_qur($qur){
        try {
            foreach($db->query($qur) as $row) {
                $this->result = $row;
        }
        $db = null;
        }catch(PDOException $e){
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }

?>