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

        <p>名前(姓):
            <?php echo $_POST['family_name'].'<br>';
            mb_regex_encoding("UTF-8");
             $family_name = $_POST['family_name'];
            if(!preg_match("/^[ぁ-んァ-ヶー一-龠]+$/u",$family_name)) {
               echo $error = '<font color="red">日本語のみ使用可能です。</font>';    
            }
            if(empty($_POST['family_name'])){
                echo $error ='<font color="red">名前（姓）が未入力です。</font>';
            }
            ?>
        </p>

        <p>名前(名):
            <?php echo $_POST['last_name']."<br>"; 
            mb_regex_encoding("UTF-8");
             $last_name = $_POST['last_name'];
            if(!preg_match("/^[ぁ-んァ-ヶー一-龠]+$/u",$last_name)) {
               echo $error = '<font color="red">日本語のみ使用可能です。</font>'; }
            if(empty($_POST['last_name'])){
                 echo $error ='<font color="red">名前（名）が未入力です。</font>';
            }?>
        </p>

        <p>カナ(姓):
            <?php echo $_POST['family_name_kana']."<br>"; 
            mb_regex_encoding("UTF-8");
            $family_name_kana=$_POST['family_name_kana'];
            if(!preg_match("/^[ァ-ヶーー]+$/u",$family_name_kana)){
                echo $error = '<font color="red">カタカナのみ使用可能です。</font>'; }
            if(empty($_POST['family_name_kana'])){
             echo $error ='<font color="red">カナ（姓）が未入力です。</font>';
            }?>
        </p>

        <p>カナ(名):
            <?php echo $_POST['last_name_kana']."<br>";
              mb_regex_encoding("UTF-8");
            $last_name_kana=$_POST['last_name_kana'];
            if(!preg_match("/^[ァ-ヶーー]+$/u",$last_name_kana)){
                echo $error = '<font color="red">カタカナのみ使用可能です。</font>'; }
            if(empty($_POST['last_name_kana'])){
              echo $error ='<font color="red">カナ（名）が未入力です。</font>'; 
            }?>
        </p>
        <p>メールアドレス:
            <?php echo $_POST['mail'];
            $mail=$_POST['mail'];
            if(!preg_match('|^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$|',$mail)){
                print $error ='<font color="red">メールアドレスが正しくありません。</font>';
            }
             if(empty($_POST['mail'])){
                 echo $error ='<font color="red">メールアドレスが未入力です。</font>';
             }?>
        </p>
        <p>パスワード:
            <?php
            $str=$_POST['password'];
            for($i = 0;$i<strlen($str)
                ;$i++){
                echo "●";
            };
             mb_regex_encoding("UTF-8");
            $password=$_POST['password'];
            if(!preg_match("/^[0-9A-Za-z]+$/u",$password)){
                echo $error = '<font color="red">アルファベット・英数字のみ使用可能です。</font>'; }
             if(empty($_POST['password'])){
               echo $error ='<font color="red">パスワードが未入力です。</font>';
             }?>
        </p>
        <p>性別:
            <?php 
            if($_POST['gender']==="0"){echo '男';}
            else{echo '女';}
            ?>
        </p>
        <p>郵便番号:
            <?php 
            echo $_POST['postal_code'];
            $postal_code=$_POST['postal_code'];
            $limit=7;
            $postal_codeLength=strlen($postal_code);
            if(!preg_match("/^[0-9]+$/",$postal_code)||($limit<$postal_codeLength || $postal_codeLength < $limit)){
                print $error ='<font color="red">:郵便番号は正しくありません。</font>';}
          
             if(empty($_POST['postal_code'])){
                 echo $error ='<font color="red">郵便番号が未入力です。</font>';
             }?>
        </p>
        <p>住所(都道府県):
            <?php  $prefecture=$_POST['prefecture']; 
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
             if(empty($_POST['prefecture'])){
           echo $error ='<font color="red">住所（都道府県）が未入力です</font>';
             }
            ?>
        </p>
        <p>住所(市区町村):
            <?php echo $_POST['address_1']."<br>";
                mb_regex_encoding("UTF-8");
             $address_1 = $_POST['address_1'];
            if(!preg_match("/^[ぁ-んァ-ヶー一-龠0-9]+$/u",$address_1)) {
               echo $error = '<font color="red">ひらがな、カタカナ、漢字、半角数字、記号（ハイフン）のみ使用可能です。</font>'; }
                
             if(empty($_POST['address_1'])){
              echo $error='<font color="red">住所（市区町村）が未入力です</font>';
             }
            ?>
        </p>
        <p>住所(番地):
            <?php echo $_POST['address_2']."<br>";
              mb_regex_encoding("UTF-8");
             $address_1 = $_POST['address_1'];
            if(!preg_match("/^[ぁ-んァ-ヶー一-龠0-9]+$/u",$address_1)) {
               echo $error = '<font color="red">ひらがな、カタカナ、漢字、半角数字、記号（ハイフン）のみ使用可能です。</font>'; }
            if(empty($_POST['address_2'])){
               echo $error='<font color="red">住所（番地）が未入力です</font>';
            }
            ?>
        </p>
        <p>アカウント権限:
            <?php if($_POST['authority']==='0'){echo '一般';}else{echo '管理者';}
            ?>
        </p>



        <style>
            .hide {
                display: none;
            }

        </style>
        <?php 
        $class="";
        if(!empty($error)) $class="hide";
        ?>
        <form action="regist_complete.php" method="post">
            <input type="submit" id="accept" value="登録する" class="<?php echo $class; ?>">
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
            <input type="hidden" value="<?php echo $_POST['delete_flag']; ?>" name="delete_flag">
        </form>

        <form action="regist.php" method="post">
            <input type="submit" value="前に戻る" class="button">
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
        </form>
        <form action="index.html">
            <input type="submit" value="最初のページに戻る" class="button">

        </form>
    </div>

</body>

</html>
