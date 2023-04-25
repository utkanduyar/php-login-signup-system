<?php

if(isset($_POST['new_login'])){
    $uid=$_POST['uid'];
    $upass=$_POST['upass'];

    //class include
    include '../classes/dbh.classes.php';
    include '../classes/login.classes.php';
    include '../classes/login-contr.classes.php';

    $login= new LoginContr($uid, $upass);

    //system work process
    $login->LoginUser();

    // get back frontpage
    header("Location:../login.php?error=no");
}

?>