<!DOCTYPE html>
<?php
//$id=$_POST['id'];

?>
<!--pdo必要なくてここは表示させるだけでいいかも。次のコンプリートで送ればよくない？-->
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント更新確認画面</title>
</head>

<body>
    <div class="update">

        <h1>登録更新画面</h1>
        <form action="update_complete.php" method="post">
            <?php
//        while($row=$stmt->fetch()):
            ?>
            <p>ID:
                <?php echo $_POST['id'].'<br>';
            ?>
            <p>名前(姓):
                <?php echo $_POST['family_name'].'<br>';
            ?>
            </p>
            <p>名前(名):

                <?php echo $_POST['last_name'].'<br>';
            ?>
            </p>
            <p>カナ(姓):
                <?php echo $_POST['family_name_kana'].'<br>';
            ?>
            </p>
            <p>カナ(名):
                <?php echo $_POST['last_name_kana'].'<br>';
            ?>
            </p>
            <p>メールアドレス:
                <?php echo $_POST['mail'].'<br>';
            ?>
            </p>
            <p>パスワード:
                <?php $str=$_POST['password'];
            for($i = 0;$i<strlen($str);$i++){
                echo "●";
            }
            ?>
            </p>
            <p>性別:
                <?php
            if($_POST['gender']==='0'){
            echo '男';}else{echo '女';}
            ?>
            </p>
            <p>郵便番号:
                <?php echo $_POST['postal_code'].'<br>';
            ?>
            </p>
            <p>住所(都道府県):
                <?php $prefecture=$_POST['prefecture'];
            switch($prefecture){
                case 1:
                    echo "北海道";
                    break;
                case 2:
                    echo "青森";
                    break; 
                case 3:
                    echo "岩手県";
                    break;
                case 4:
                    echo "宮城県";
                    break;
                case 5:
                    echo "秋田県";
                    break;
                case 6:
                    echo "山形県";
                    break;
                case 7:
                    echo "福島県";
                    break;
                case 8:
                    echo "茨城県";
                    break;
                case 9:
                    echo "栃木県";
                    break;
                case 10:
                    echo "群馬県";
                    break;
                case 11:
                    echo "埼玉県";
                    break;
                case 12:
                    echo "千葉県";
                    break;
                case 13:
                    echo "東京都";
                    break;
                case 14:
                    echo "神奈川県";
                    break;
                case 15:
                    echo "新潟県";
                    break;
                case 16:
                    echo "富山県";
                    break;
                case 17:
                    echo "石川県";
                    break;
                case 18:
                    echo "福井県";
                    break;
                case 19:
                    echo "山梨県";
                    break;
                case 20:
                    echo "長野県";
                    break;
                case 21:
                    echo "岐阜県";
                    break;
                case 22:
                    echo "静岡県";
                    break;
                case 23:
                    echo "愛知県";
                    break;
                case 24:
                    echo "三重県";
                    break;
                case 25:
                    echo "滋賀県";
                    break;
                case 26:
                    echo "京都府";
                    break;
                case 27:
                    echo "大阪府";
                    break;
                case 28:
                    echo "兵庫県";
                    break;
                case 29:
                    echo "奈良県";
                    break;
                case 30:
                    echo "和歌山県";
                    break;
                case 31:
                    echo "鳥取県";
                    break;
                case 32:
                    echo "島根県";
                    break;
                case 33:
                    echo "岡山県";
                    break;
                case 34:
                    echo "広島県";
                    break;
                case 35:
                    echo "山口県";
                    break;
                case 36:
                    echo "徳島県";
                    break;
                case 37:
                    echo "香川県";
                    break;
                case 38:
                    echo "愛媛県";
                    break;
                case 39:
                    echo "高知県";
                    break;
                case 40:
                    echo "福岡県";
                    break;
                case 41:
                    echo "佐賀県";
                    break;
                case 42:
                    echo "長崎県";
                    break;
                case 43:
                    echo "熊本県";
                    break;
                case 44:
                    echo "大分県";
                    break;
                case 45:
                    echo "宮崎県";
                    break;
                case 46:
                    echo "鹿児島県";
                    break;
                case 47:
                    echo "沖縄県";
                    break;    
            }
            echo "<br>";
            ?>

            </p>
            <p>住所(市区町村):
                <?php echo $_POST['address_1'].'<br>';
            ?>
            </p>
            <p>住所(番地):
                <?php echo $_POST['address_2'].'<br>';
            ?>
            </p>
            <p>アカウント権限:
                <?php if($_POST['authority']==='0'){
            echo '一般';}else{echo '管理者';}
            ?>
            </p>
            <?php 
//            endwhile;
        ?>
        </form>
        <form action="update_complete.php" method="post">

            <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
            <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
            <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
            <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
            <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
            <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
            <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
            <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
            <input type="hidden" value="<?php echo $_POST['address_1']; ?>" name="address_1">
            <input type="hidden" value="<?php echo $_POST['address_2']; ?>" name="address_2">
            <input type="hidden" value="<?php echo $_POST['authority']; ?>" name="authority">
            <!--            裏（hidden）で更新したいものを送っておく-->
            <input type="submit" value="更新する">
        </form>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
            <input type="submit" value="戻って修正し直す">
        </form>
    </div>

</body>

</html>
