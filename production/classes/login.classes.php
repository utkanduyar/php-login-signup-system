<?php 
class Login extends Dbh{
    protected function getUser($uid, $upass){ // user control function
        $stmt = $this->connect()->prepare('SELECT user_upass FROM user WHERE user_uid = ? OR user_uemail = ?;');


        if(!$stmt->execute(array($uid, $upass))){
            $stmt=null;
            header("Location:../login.php?error=stmtfailed");
            exit();
        }
        
        if($stmt->rowCount() == 0){
            $stmt = null;
            header("Location:../login.php?error=usernotfound");
            exit();
        }

        $hashedPass=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPass = password_verify($upass, $hashedPass[0]["user_upass"]);

        if($checkPass == false){
            $stmt = null;
            header("Location:../login.php?error=wrongpassword");
            exit();
        }elseif($checkPass == true){
            $stmt = $this->connect()->prepare('SELECT * FROM user WHERE user_uid = ? OR user_uemail = ? AND user_upass = ?;');

            if(!$stmt->execute(array($uid, $uid, $upass))){
                $stmt=null;
                header("Location:../login.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                header("Location:../login.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["useruid"] = $user[1]["user_uid"];
            
            $stmt=null;
        }

        $stmt=null;
    }
}

?>