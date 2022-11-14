<?php

class Dbh{ 
    public function connect(){
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "fitstop_db"; 
        $charset = "utf8mb4";
        try{
            $DSN = "mysql:host=".$servername.";dbname=".$dbname.";charset=".$charset; 
            $PDO = new PDO($DSN, $username, $password);
            $PDO -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
            return $PDO;
        }catch(PDOException $e){
            echo "CONNECTION FAILED : ".$e -> getMessage();
        } 
    }
}
?>