<!DOCTYPE html>
<?php echo $_POST['id']; ?>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント削除確認画面</title>
    <style>
        h1 {
            font-size: 50px;
            text-align: center;
        }

        form {
            display: block;
            text-align: center;
            margin-right: 40px;
        }

    </style>
</head>

<body>
    <h1>本当に削除してもよろしいですか？</h1>

    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
        <input type="submit" value="前に戻る">
    </form>
    <form action="delete_complete.php" method="post">
        <input type="submit" value="削除する">
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
    </form>

</body>

</html>
