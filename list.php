<!DOCTYPE html>
<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost","root","");

$stmt= $pdo->query("select*from addtest order by ID desc");


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
                    <!--                    <th scope="col">パスワード</th>-->
                    <th scope="col">性別</th>
                    <!--                    <th scope="col">郵便番号</th>-->
                    <!--                    <th scope="col">住所(都道府県)</th>-->
                    <!--                    <th scope="col">住所(市区町村)</th>-->
                    <!--                    <th scope="col">住所(番地)</th>-->
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

                <!--                // ●と同じ場所にtd書くとtdまでループ化されてしまったので外に書いています-->

                <?php 
    $gender=$row['gender'];
    if($row['gender']==="0"){
        echo "<td>男性</td>";
    }else{
        echo "<td>女性</td>";
    }
    ?>

                <!--//    echo "<td>".$row['postal_code']."</td>";-->



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
                    <?php
                    $class="";
                    if($row['delete_flag']==="0") {$class="hide";
                        
                    }
                    ?>
                    <form action="update.php" method="post">

                        <input type="submit" value="更新" class="<?php echo $class; ?>">
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
    <a href="index.html">トップに戻る</a>
</body>

</html>
