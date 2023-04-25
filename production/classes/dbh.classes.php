<?php

class Dbh{
    
    protected function connect(){
        try{
            $username = "root";
            $password = "";
            $db=new PDO("mysql:host=localhost;dbname=users",$username,$password);
            return $db;
        }catch(PDOException $error){
            echo "database connection error :",$error->getMessage();
            die();
        }
    }
}

?>