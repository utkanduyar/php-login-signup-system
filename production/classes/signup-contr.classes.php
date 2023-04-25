<?php

class SignupContr extends Signup{
    private $uid;
    private $uemail;
    private $upass;
    private $upass2;

    public function __construct($uid, $uemail, $upass, $upass2){
        $this->uid=$uid;
        $this->uemail=$uemail;
        $this->upass=$upass;
        $this->upass2=$upass2;
    }

    public function signupUser() { // fonksiyonlardan gelen sonuçları toplamak için kullanılır.
        if($this->emptyInput() == false){
            header("Location:../login.php?error=emptyinput");
            exit;
        }
        if($this->invalidUid() == false){
            header("Location:../login.php?error=username");
            exit;
        }
        if($this->invalidEmail() == false){
            header("Location:../login.php?error=email");
            exit;
        }
        if($this->pass2check() == false){
            header("Location:../login.php?error=pass2check");
            exit;
        }
        if($this->uidTakenCheck() == false){
            header("Location:../login.php?error=useroremailtaken");
            exit;
        }

        $this->setUser($this->uid, $this->uemail, $this->upass);
    }

    private function emptyInput(){ // giriş değerlerini boş mu diye kontrol eder.
        $result="";
        if(empty($this->uid) || empty($this->uemail) || empty($this->upass) || empty($this->upass2)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidUid(){ // kullanıcı adını kontrol eder
        $result="";
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){ // e mail adresini kontrol eder.
        $result="";
        if(!filter_var($this->uemail, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function pass2check(){ // şifre gir ve şifre onayla kısımları eşit mi diye kontrol eder
        $result="";
        if($this->upass !== $this->upass2){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck(){ // kullanıcı var mı sorgusunun çalışıp çalışmadığını kontrol eder.
        $result="";
        if(!$this->checkUser($this->uid, $this->uemail)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }


}

?>