<!DOCTYPE html>
<html lang="ja">
<?php
$mail=$_POST['mail'];
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");

$stmt= $pdo->query("select * from addtest where mail=$mail");
echo $_POST['mail'];
foreach($stmt as $row){
    
echo $row['authority'];
}
            
        
            
    ?>




<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.abc').bxSlider({
                auto: true,
                mode: 'horizontal',
                speed: 2000,

            });
        });

    </script>
</head>

<body>
    <header>
        <div class="logo">
            <img src="diblog_logo.jpg">
        </div>
        <div class="menu">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>

                if(authority)
                <li><a href="regist.php">アカウント登録</a></li>
                <li><a href="list.php">アカウント一覧</a></li>
            </ul>
        </div>


    </header>

    <main>

        <div class="main-container">
            <div class="left">
                <h2>プログラミングに役立つ書籍</h2>
                <p>2017年1月15日</p>
                <div class="abc">
                    <div><img src="jQuery_image1.jpg"></div>
                    <div><img src="jQuery_image2.jpg"></div>
                    <div><img src="jQuery_image3.jpg"></div>
                    <div><img src="jQuery_image4.jpg"></div>
                    <div><img src="jQuery_image5.jpg"></div>
                </div>
                <p>D.I.BlogはD.I.Worksが提供する演習課題です</p>
                <h3>記事中身</h3>
                <div class="box1">
                    <div class="box_pic2">
                        <img src="pic1.jpg">
                        <p>ドメイン取得方法</p>
                    </div>
                    <div class="box_pic2">
                        <img src="pic2.jpg">
                        <p>快適な職場環境</p>
                    </div>
                    <div class="box_pic2">
                        <img src="pic3.jpg">
                        <p>Linuxの基礎</p>
                    </div>
                    <div class="box_pic2">
                        <img src="pic4.jpg">
                        <p>マーケティング入門</p>
                    </div>
                </div>
                <div class="box1">
                    <div class="box_pic2">
                        <img src="pic5.jpg">
                        <p>アクティブラーニング</p>
                    </div>
                    <div class="box_pic2">
                        <img src="pic6.jpg">
                        <p>CSSの効率的な勉強方法</p>
                    </div>
                    <div class="box_pic2">
                        <img src="pic7.jpg">
                        <p>リーダブルコードとは</p>
                    </div>
                    <div class="box_pic2">
                        <img src="pic8.jpg">
                        <p>HTML5の可能性</p>
                    </div>
                </div>
            </div>

            <div class="right">
                <h3>人気の記事</h3>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタTops</li>
                    <li>HTMLの基礎</li>
                </ul>
                <h3>オススメリンク</h3>
                <ul>
                    <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Braketsのダウンロード</li>
                </ul>
                <h3>カテゴリ</h3>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>
    </main>

    <footer>
        <p>
            Copyright D.Iworks D.I.blog is the one which provides A to Z about programing
        </p>
    </footer>

</body>

</html>
