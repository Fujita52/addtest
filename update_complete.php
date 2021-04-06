<!DOCTYPE html>
<?php
$id=$_POST['id'];
//echo $id;
$family_name=$_POST['family_name'];
//echo $family_name;
$last_name=$_POST['last_name'];
$family_name_kana=$_POST['family_name_kana'];
$last_name_kana=$_POST['last_name_kana'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$postal_code=$_POST['postal_code'];
$prefecture=$_POST['prefecture'];
$address_1=$_POST['address_1'];
$address_2=$_POST['address_2'];
$authority=$_POST['authority'];

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");
$pdo ->exec("update addtest set family_name='$family_name',last_name='$last_name',family_name_kana='$family_name_kana',last_name_kana='$last_name_kana',mail='$mail',password='$password',gender='$gender',postal_code='$postal_code',prefecture='$prefecture',address_1='$address_1',address_2='$address_2',authority='$authority' where id=$id;");

?>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>更新完了画面</title>
</head>

<body>
    <h1>更新完了しました</h1>

</body>

</html>
