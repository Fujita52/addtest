<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>登録情報一覧</title>
</head>

<body>
    <div class="list">
        <h3>登録情報一覧</h3>
        <div class="contents">
            <table border="1" cellspacing="0">
                <tr>
                    <th>名前(姓)</th>
                    <th>名前(名)</th>
                </tr>
                <tr>
                    <td>藤田</td>
                    <td>稜平</td>
                </tr>
            </table>
        </div>
    </div>
    <?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");

$stmt= $pdo->query("select*from addtest");
while($row=$stmt->fetch()){
    echo $row['family_name'];
    echo $row['last_name'];
    echo $row['family_name_kana'];
    echo $row['last_name_kana'];
    echo $row['mail'];
    echo $row['password'];
    echo $row['gender'];
    echo $row['postal_code'];
    echo $row['prefecture'];
    echo $row['address_1'];
    echo $row['address_2'];
    echo $row['authority'];
  
}


//header("Location:http://localhost/regist.php");
?>
    <?php 
    for($id=1;$id<=20;$id++){
        echo $row
    }

</body>

</html>
