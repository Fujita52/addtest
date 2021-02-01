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
        <div>
            <label>名前（姓）</label>
            <input type="text" class="text" name="family_name" size="35" maxlength="10">
        </div>
        <div>
            <label>名前（名）</label>
            <input type="text" class="text" name="last_name" size="35" maxlength="10">
        </div>
        <div>
            <label>カナ（姓）</label>
            <input type="text" class="text" name="family_name_kana" size="35" maxlength="10" pattern="[ア-ン]*">
        </div>
        <div>
            <label>カナ（名）</label>
            <input type="text" class="text" name="last_name_kana" size="35" maxlength="10" pattern="[ア-ン]*">
        </div>
        <div>
            <label>メールアドレス</label>
            <input type="text" class="text" name="mail" size="35" maxlength="100">
        </div>
        <div>
            <label>パスワード</label>
            <input type="text" class="text" name="password" size="35" maxlength="10">
        </div>
        <div>
            <label>性別</label>
            <input type="radio" name="gender" value="0" checked="checked"> 男
            <input type="radio" name="gender" value="1">女
        </div>
        <div>
            <label>郵便番号</label>
            <input type="text" class="text" name="postal_code" size="8" maxlength="7">
        </div>
        <div>
            <label>住所（都道府県）</label>
            <select name="prefecture">
                <option></option>
                <option>北海道</option>
                <option>青森県</option>
                <option>岩手県</option>
                <option>宮城県</option>
                <option>秋田県</option>
                <option>山形県</option>
                <option>福島県</option>
                <option>茨城県</option>
                <option>栃木県</option>
                <option>群馬県</option>
                <option>埼玉県</option>
                <option>千葉県</option>
                <option>東京都</option>
                <option>神奈川県</option>
                <option>新潟県</option>
                <option>富山県</option>
                <option>石川県</option>
                <option>福井県</option>
                <option>山梨県</option>
                <option>長野県</option>
                <option>岐阜県</option>
                <option>静岡県</option>
                <option>愛知県</option>
                <option>三重県</option>
                <option>滋賀県</option>
                <option>京都府</option>
                <option>大阪府</option>
                <option>兵庫県</option>
                <option>奈良県</option>
                <option>和歌山県</option>
                <option>鳥取県</option>
                <option>島根県</option>
                <option>岡山県</option>
                <option>広島県</option>
                <option>山口県</option>
                <option>徳島県</option>
                <option>香川県</option>
                <option>愛媛県</option>
                <option>高知県</option>
                <option>福岡県</option>
                <option>佐賀県</option>
                <option>長崎県</option>
                <option>熊本県</option>
                <option>大分県</option>
                <option>宮崎県</option>
                <option>鹿児島県</option>
                <option>沖縄県</option>
            </select>
        </div>
        <div>
            <label>住所（市区町村）</label>
            <input type="text" class="text" name="address_1" size="35" maxlength="10">
        </div>
        <div>
            <label>住所（番地）</label>
            <input type="text" class="text" name="address_2" size="35" maxlength="100">
        </div>
        <div>
            <label>アカウント権限</label>
            <select name="account">
                <option value="0" selected>一般</option>
                <option value="1">管理者</option>
            </select>
        </div>
        <div>
            <input type="submit" value="確認する" class="submit">
        </div>

    </form>

</body>

</html>
