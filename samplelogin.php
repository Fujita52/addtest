<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>

<body>
    <?php
if($error_message){
    echo $error_message;
}
?>
    <form action="index.html">
        <p>ログインID:<input type="text" name="mail"></p>
        <p>パスワード:<input type="password" name="password"></p>
        <input type="submit" name="login" value="ログイン">
    </form>

    <?php
    session_start();
    $error_message ="";
    
    if(isset($_POST["login"])){
        
        if($_POST["mail"] == "" && $_POST["password"]==""){
            $_SESSION["mail"]= $_POST["mail"];
            $logoin_success_url ="index.html";
            header("Location:{$login_success_url}");
            exit;
        }
        $error_message ="IDもしくはパスワードが間違っています。<br>もう一度入力してください";
    }
?>
</body>

</html>
