<?php
$error_message="";

$success_url="index.php";

try{
    $dbh = new PDO("mysql:host=localhost; dbname=lesson01; charset=utf8", "root", "");

    $stmt = $dbh->prepare('SELECT * FROM addtest WHERE mail = :mail');

    $stmt->execute(array(':mail' => $_POST['mail']));

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if(password_verify($_POST['password'], $result['password'])){
        echo "ログイン認証に成功しました";
        header("Location:{$success_url}");
    }else{
        echo "ログイン認証に失敗しました";
    } 

}catch(Exception $e){
    echo $error='<font color="red">エラーが発生したためログイン情報を取得できません。</font>'; 
    echo $e->getMessage();
    die();
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>ログイン</title>
</head>

<body>
    <?php
    if($error_message){
        echo $error_message;
    }
    $error_message="";
    ?>
    <h1>ログイン</h1>
    <form action="" method="post">
        <p>
            <label>メールアドレス：</label>
            <input type="text" name="mail">
        </p>

        <p>
            <label>パスワード：</label>
            <input type="password" name="password">
        </p>

        <input type="submit" name="login" value="ログインする">
    </form>
       <form action="index.php">
           
        <input type="hidden" name="mail" value="<?php echo $_POST['mail']; ?>">
       </form>
</body>

</html>
