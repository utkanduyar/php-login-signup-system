<?php

if(isset($_POST["new_register"])){
    $uid=$_POST['uid'];
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass'];
    $upass2=$_POST['upass2'];

    //classları include edelim
    include '../classes/dbh.classes.php';
    include '../classes/signup.classes.php';
    include '../classes/signup-contr.classes.php';
    $signup= new SignupContr($uid, $uemail, $upass, $upass2);

    //sistemi çalıştırma işlemi
    $signup->signupUser();

    //ön sayfaya geri döndürme mesajı
    header("Location:../login.php?error=none");
}

?>