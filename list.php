<!DOCTYPE html>
<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");

$stmt= $pdo->query("select*from addtest");


?>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>登録情報一覧</title>
</head>

<body>
    <div class="list">
        <h3>登録情報一覧</h3>
        <div class="contents">
            <table border="1" width="100%">
                <tr background-color="skyblue">
                    <th scope="col">ID</th>
                    <th scope="col">名前(姓)</th>
                    <th scope="col">名前(名)</th>
                    <th scope="col">カナ(姓)</th>
                    <th scope="col">カナ(名)</th>
                    <th scope="col">メールアドレス</th>
                    <th scope="col">パスワード</th>
                    <th scope="col">性別</th>
                    <th scope="col">郵便番号</th>
                    <th scope="col">住所(都道府県)</th>
                    <th scope="col">住所(市区町村)</th>
                    <th scope="col">住所(番地)</th>
                    <th scope="col">アカウント権限</th>
                    <th scope="col">削除フラグ</th>
                    <th scope="col">登録日時</th>
                    <th scope="col">更新日時</th>
                    <th scope="col2">操作</th>
                </tr>
                <?php 
    while($row=$stmt->fetch()){
        echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['family_name']."</td>";
    echo "<td>".$row['last_name']."</td>";
    echo "<td>".$row['family_name_kana']."</td>";
    echo "<td>".$row['last_name_kana']."</td>";
    echo "<td>".$row['mail']."</td>";
        ?>
                <?php
            $str=$row['password'];
            echo "<td>";
            for($i = 0;$i<strlen($str);$i++){
                echo "●";
            }
            echo "</td>";
//        ●と同じ場所にtd書くとtdまでループ化されてしまったので外に書いています
        ?>
                <?php 
    $gender=$row['gender'];
    if($row['gender']==="0"){
        echo "<td>男性</td>";
    }else{
        echo "<td>女性</td>";
    }
    ?>
                <?php
    echo "<td>".$row['postal_code']."</td>";
    ?>
                <?php
    $prefecture=$row['prefecture'];
    switch($prefecture){

    case 1:
        echo "<td>北海道</td>";
        break;
    case 2:
        echo "<td>青森</td>";
        break; 
    case 3:
        echo "<td>岩手県</td>";
        break;
    case 4:
        echo "<td>宮城県</td>";
        break;
    case 5:
        echo "<td>秋田県</td>";
        break;
    case 6:
        echo "<td>山形県</td>";
        break;
    case 7:
        echo "<td>福島県</td>";
        break;
    case 8:
        echo "<td>茨城県</td>";
        break;
    case 9:
        echo "<td>栃木県</td>";
        break;
    case 10:
        echo "<td>群馬県</td>";
        break;
    case 11:
        echo "<td>埼玉県</td>";
        break;
    case 12:
        echo "<td>千葉県</td>";
        break;
    case 13:
        echo "<td>東京都</td>";
        break;
    case 14:
        echo "<td>神奈川県</td>";
        break;
    case 15:
        echo "<td>新潟県</td>";
        break;
    case 16:
        echo "<td>富山県</td>";
        break;
    case 17:
        echo "<td>石川県</td>";
        break;
    case 18:
        echo "<td>福井県</td>";
        break;
    case 19:
        echo "<td>山梨</td>";
        break;
    case 20:
        echo "<td>長野県</td>";
        break;
    case 21:
        echo "<td>岐阜県</td>";
        break;
    case 22:
        echo "<td>静岡県</td>";
        break;
    case 23:
        echo "<td>愛知県</td>";
        break;
    case 24:
        echo "<td>三重県</td>";
        break;
    case 25:
        echo "<td>滋賀県</td>";
        break;
    case 26:
        echo "<td>京都府</td>";
        break;
    case 27:
        echo "<td>大阪府</td>";
        break;
    case 28:
        echo "<td>兵庫県</td>";
        break;
    case 29:
        echo "<td>奈良県</td>";
        break;
    case 30:
        echo "<td>和歌山県</td>";
        break;
    case 31:
        echo "<td>鳥取県</td>";
        break;
    case 32:
        echo "<td>島根県</td>";
        break;
    case 33:
        echo "<td>岡山県</td>";
        break;
    case 34:
        echo "<td>広島県</td>";
        break;
    case 35:
        echo "<td>山口県</td>";
        break;
    case 36:
        echo "<td>徳島県</td>";
        break;
    case 37:
        echo "<td>香川県</td>";
        break;
    case 38:
        echo "<td>愛媛県</td>";
        break;
    case 39:
        echo "<td>高知県</td>";
        break;
    case 40:
        echo "<td>福岡県</td>";
        break;
    case 41:
        echo "<td>佐賀県</td>";
        break;
    case 42:
        echo "<td>長崎県</td>";
        break;
    case 43:
        echo "<td>熊本県</td>";
        break;
    case 44:
        echo "<td>大分県</td>";
        break;
    case 45:
        echo "<td>宮崎県</td>";
        break;
    case 46:
        echo "<td>鹿児島県</td>";
        break;
    case 47:
        echo "<td>沖縄県</td>";
        break;
    }
    ?>
                <?php
    echo "<td>".$row['address_1']."</td>";
    echo "<td>".$row['address_2']."</td>"; ?>
                <?php
    $authority=$row['authority'];
    if($row['authority']==="0"){
        echo "<td>一般</td>";
    }else{
        echo "<td>管理者</td>";
    }
    ?>
                <?php 
    $delete_flag=$row['delete_flag'];
    if($row['delete_flag']==="0"){
    echo "<td>有効</td>";
    }else{echo "<td>無効</td>";}
    ?>
                <?php
    echo "<td>".$row['registered_time']."</td>";
    echo "<td>".$row['update_time']."</td>";
    ?>

                <td>
                    <form action="update.php" method="post">
                        <input type="submit" value="更新">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                    </form>
                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="submit" value="削除">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    </form>
                </td>
                <?php  
                echo "</tr>";
    }?>


            </table>
        </div>
    </div>
</body>

</html>
