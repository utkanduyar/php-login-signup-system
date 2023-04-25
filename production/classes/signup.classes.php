<?php

//Sorgu işemlerin bu classta gerçekleşir
class Signup extends Dbh{
    
    protected function setUser($uid, $uemail, $upass){ // kullanıcı kaydetme fonksiyonu
        $stmt = $this->connect()->prepare('INSERT INTO user (user_uid, user_uemail, user_upass) VALUES (?,?,?);');
        $hashedPass=password_hash($upass, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $uemail, $hashedPass))){
            $stmt=null;
            header("Location:../login.php?error=stmtfailed");
            exit();
        }
        $stmt= null;
    }
    
    protected function checkUser($uid, $uemail){ // kullanıcı sorgulama fonksiyonu
        $stmt=$this->connect()->prepare('SELECT user_uid FROM user WHERE user_uid = ? OR user_uemail = ?;');

        if(!$stmt->execute(array($uid, $uemail))){
            $stmt = null;
            header("Location:../login.php?error=stmtfailed");
            exit();
        }
        $resultCheck="";
        if($stmt->rowCount()>0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}

?>