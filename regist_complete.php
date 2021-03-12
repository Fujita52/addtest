<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");

$pdo ->exec("insert into addtest(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag)values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."','".$_POST['delete_flag']."');");

?>
<!doctype HTML>
<html lang="ja">

<head>
    <meta charaset="utf-8">
    <title>追加課題１</title>
</head>

<body>
    <h1>登録完了しました</h1>
    <form action="index.html">
        <input type="submit" value="最初のページに戻る" class="button">

    </form>
</body>

</html>
