<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント登録画面</title>
    <script type="text/script"></script>
</head>

<body>

    <h1>アカウント登録確認画面</h1>

    <div class="confirm">

        <p>名前（姓）
            <?php echo $_POST['family_name']; 
            ?>
        </p>

        <p>名前（名）
            <?php echo $_POST['last_name']; 
            ?>
        </p>

        <p>カナ（姓）
            <?php echo $_POST['family_name_kana']; ?>
        </p>

        <p>カナ（名）
            <?php echo $_POST['last_name_kana']; ?>
        </p>
        <p>メールアドレス
            <?php echo $_POST['mail']; ?>
        </p>
        <p>パスワード
            <?php
            $str=$_POST['password'];
            for($i = 0;$i<strlen($str)
                ;$i++){
                echo "●";
            };
            ?>
        </p>
        <p>性別
            <?php 
            $gender=$_POST['gender']; 
            switch($gender){
                case 0:
                    echo "男";
                    break;
                case 1:
                    echo "女";
                    break;
            }
            ?>
        </p>
        <p>郵便番号
            <?php echo $_POST['postal_code']; ?>
        </p>
        <p>住所（都道府県）
            <?php echo $_POST['prefecture']; ?>
        </p>
        <p>住所（市区町村）
            <?php echo $_POST['address_1']; ?>
        </p>
        <p>住所（番地）
            <?php echo $_POST['address_2']; ?>
        </p>
        <p>アカウント権限
            <?php 
                $account=$_POST['account'];
            switch($account){
                case 0:
                    echo "一般";
                    break;
                case 1:
                    echo "管理者";
                    break;
            }
    ?>
        </p>
    </div>


</body>

</html>
