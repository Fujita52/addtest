<?php
//error_reporting(E_ALL & ~E_NOTICE);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント登録</title>
</head>

<body>
    <header>ナビゲーションバー</header>

    <h1>アカウント登録画面</h1>
    <form action="regist_confirm.php" method="post">
        <p>名前（姓）
            <input type="text" class="text" name="family_name" size="35" maxlength="10" value="<?php if(!empty($_POST["family_name"])){
            echo $_POST["family_name"];} ?>">
        </p>
        <p>名前（名）
            <input type="text" class="text" name="last_name" size="35" maxlength="10" value="<?php if(isset($_POST["last_name"])){
            echo $_POST["last_name"];} ?>">
        </p>
        <p>カナ（姓）
            <input type="text" class="text" name="family_name_kana" size="35" maxlength="10" pattern="[ァ-ン]*" value="<?php if(isset($_POST["family_name_kana"])){
            echo $_POST["family_name_kana"];} ?>">
        </p>
        <p>カナ（名）
            <input type="text" class="text" name="last_name_kana" size="35" maxlength="10" pattern="[ァ-ン]*" value="<?php if(isset($_POST["last_name_kana"])){
            echo $_POST["last_name_kana"];} ?>">
        </p>
        <p>メールアドレス
            <input type="email" class="text" name="mail" size="35" maxlength="100" value="<?php if(isset($_POST["mail"])){
            echo $_POST["mail"];} ?>">
        </p>
        <p>パスワード
            <input type="text" class="text" name="password" size="35" maxlength="100" pattern=^[0-9A-Za-z]+$ value="<?php if(isset($_POST["password"])){
            echo $_POST["password"];} ?>">
        </p>
        <p>性別
            <input type="radio" name="gender" value="0" <?php if( !empty($_POST['gender']) && $_POST['gender'] === "0" ){ echo 'checked'; } ?> checked="checked"> 男
            <input type="radio" name="gender" value="1" <?php if( !empty($_POST['gender']) && $_POST['gender'] === "1" ){ echo 'checked'; } ?>>女
        </p>
        <p>郵便番号
            <input type="number" name="postal_code" size="8" value="<?php if(isset($_POST["postal_code"])){
            echo $_POST["postal_code"];} ?>">
        </p>



        <p>住所（都道府県）:<select name="prefecture">
                <option value="0" style="display:none;" <?php if(empty($_POST['prefecture'])) echo 'selected'; ?>>選択してください</option>
                <option value="1" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "1" ){ echo 'selected'; } ?>>北海道</option>
                <option value="2" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='2'?'selected':'';?>>青森県</option>
                <option value="3" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='3'?'selected':'';?>>岩手県</option>
                <option value="4" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='4'?'selected':'';?>>宮城県</option>
                <option value="5" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='5'?'selected':'';?>>秋田県</option>
                <option value="6" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='6'?'selected':'';?>>山形県</option>
                <option value="7" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='7'?'selected':'';?>>福島県</option>
                <option value="8" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='8'?'selected':'';?>>茨城県</option>
                <option value="9" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='9'?'selected':'';?>>栃木県</option>
                <option value="10" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='10'?'selected':'';?>>群馬県</option>
                <option value="11" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='11'?'selected':'';?>>埼玉県</option>
                <option value="12" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='12'?'selected':'';?>>千葉県</option>
                <option value="13" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='13'?'selected':'';?>>東京都</option>
                <option value="14" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='14'?'selected':'';?>>神奈川県</option>
                <option value="15" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='15'?'selected':'';?>>新潟県</option>
                <option value="16" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='16'?'selected':'';?>>富山県</option>
                <option value="17" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='17'?'selected':'';?>>石川県</option>
                <option value="18" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='18'?'selected':'';?>>福井県</option>
                <option value="19" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='19'?'selected':'';?>>山梨県</option>
                <option value="20" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='20'?'selected':'';?>>長野県</option>
                <option value="21" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='21'?'selected':'';?>>岐阜県</option>
                <option value="22" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='22'?'selected':'';?>>静岡県</option>
                <option value="23" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='23'?'selected':'';?>>愛知県</option>
                <option value="24" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='24'?'selected':'';?>>三重県</option>
                <option value="25" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='25'?'selected':'';?>>滋賀県</option>
                <option value="26" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='26'?'selected':'';?>>京都府</option>
                <option value="27" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='27'?'selected':'';?>>大阪府</option>
                <option value="28" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='28'?'selected':'';?>>兵庫県</option>
                <option value="29" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='29'?'selected':'';?>>奈良県</option>
                <option value="30" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='30'?'selected':'';?>>和歌山県</option>
                <option value="31" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='31'?'selected':'';?>>鳥取県</option>
                <option value="32" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='32'?'selected':'';?>>島根県</option>
                <option value="33" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='33'?'selected':'';?>>岡山県</option>
                <option value="34" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='34'?'selected':'';?>>広島県</option>
                <option value="35" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='35'?'selected':'';?>>山口県</option>
                <option value="36" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='36'?'selected':'';?>>徳島県</option>
                <option value="37" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='37'?'selected':'';?>>香川県</option>
                <option value="38" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='38'?'selected':'';?>>愛媛県</option>
                <option value="39" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='39'?'selected':'';?>>高知県</option>
                <option value="40" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='40'?'selected':'';?>>福岡県</option>
                <option value="41" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='41'?'selected':'';?>>佐賀県</option>
                <option value="42" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='42'?'selected':'';?>>長崎県</option>
                <option value="43" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='43'?'selected':'';?>>熊本県</option>
                <option value="44" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='44'?'selected':'';?>>大分県</option>
                <option value="45" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='45'?'selected':'';?>>宮崎県</option>
                <option value="46" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='46'?'selected':'';?>>鹿児島県</option>
                <option value="47" <?php echo array_key_exists('prefecture',$_POST)&& $_POST['prefecture']=='47'?'selected':'';?>>沖縄県</option>
            </select>
        </p>

        <p>住所（市区町村）
            <input type="text" class="text" name="address_1" size="35" maxlength="10" value="<?php if(isset($_POST["address_1"])){
            echo $_POST["address_1"];} ?>">
        </p>
        <p>住所（番地）
            <input type="text" class="text" name="address_2" size="35" maxlength="100" value="<?php if(isset($_POST["address_2"])){
            echo $_POST["address_2"];} ?>">
        </p>
        <p>アカウント権限
            <select name="authority">
                <option value="0" <?php echo array_key_exists('authority',$_POST)&& $_POST['authority']=='0'?'selected':'';?> selected>一般</option>
                <option value="1" <?php echo array_key_exists('authority',$_POST)&& $_POST['authority']=='1'?'selected':'';?>>管理者</option>
            </select>
        </p>
        <!--        削除フラグが裏で送られてきている-->
        <input type="hidden" value="0" name="delete_flag">
        <input type="submit" value="確認する" class="submit">
    </form>

</body>

</html>
