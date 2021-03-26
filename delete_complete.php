<?php
echo $_POST['id'];
$id=$_POST['id'];
$pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");
$pdo ->exec("update addtest set delete_flag =1 where id=$id;
");
?>
<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>削除完了画面</title>
</head>

<body>
    <h1>削除完了しました</h1>

</body>

</html>
