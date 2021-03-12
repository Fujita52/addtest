<!DOCTYPE html>
<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");

$stmt= $pdo->query("select id from addtest");


?>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>更新画面</title>
</head>

<body>
    <h1>アカウント更新画面</h1>
    <form action="update_confirm.php" method="post">
        <p>名前（姓）
            <input type="text" class="text" name="family_name" size="35" maxlength="10" value="<?php if(!empty($_POST["family_name"])){
            echo $_POST["family_name"];} ?>">
        </p>
    </form>
</body>

</html>
