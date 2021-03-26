<!DOCTYPE html>
<?php
echo $_POST['id'];
$id=$_POST['id'];
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");

$stmt= $pdo->query("select * from addtest where id=$id");


?>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>更新画面</title>
</head>

<body>
    <h1>アカウント更新画面</h1>
    <form action="update.php" method="post">
        <?php
        while($row=$stmt->fetch()):
            ?>
        <p>名前(姓):
            <input type="text" class="text" name="family_name" size="35" maxlength="10" value="<?php
            echo $row['family_name']; ?>">
        </p>


        <?php endwhile; 
        ?>
    </form>
</body>

</html>
