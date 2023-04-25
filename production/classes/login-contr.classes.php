<?php
class LoginContr extends Login{
    private $uid;
    private $upass;
    public function __construct($uid, $upass){
        $this->uid=$uid;
        $this->upass=$upass;
    }

    public function loginUser() { // fonksiyonlardan gelen sonuçları toplamak için kullanılır.
        if($this->emptyInput() == false){
            header("Location:../login.php?error=emptyinput");
            exit;
        }
        $this->getUser($this->uid, $this->upass);
    }

    private function emptyInput(){ // giriş değerlerini boş mu diye kontrol eder.
        $result="";
        if(empty($this->uid) || empty($this->upass)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}
?>