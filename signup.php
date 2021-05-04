<?php
$user ="";
$password = "";
try{
    $dbh = new PDO("mysql:host=localhost; dbname=test_db5; charset=utf8","$user","$password");
    $stmt= $dbh->prepare("insert into users (email,password) values (:email,:password)");
    $stmt->execute(array(':email'=>$_POST['email'],':password' =>password_hash($_POST['pass'],password_default)));
}
?>
