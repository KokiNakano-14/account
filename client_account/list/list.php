<?php
  // 文字化け防止のコード
  mb_internal_encoding("utf8");
  // DBに接続する
  $pdo = new PDO("mysql:dbname=client;host=localhost;","root","nako14");
  // order by id desc でidを下から表示
  $stmt = $pdo -> query("select * from user_info ORDER BY ID DESC");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アカウント一覧</title>
  <link rel="stylesheet" type="text/css" href="list.css">
</head>
<body>
  
  <header>
    <div class="haeder">ヘッダー</div>
  </header>

  <h1>アカウント一覧画面</h1>

  <main>

  <div id="user_list">
  <?php

      echo "<table border='1' cellspacing='1'>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>名前（性）</th>";
      echo "<th>名前（名）</th>";
      echo "<th>カナ（性）</th>";
      echo "<th>カナ（名）</th>";
      echo "<th>メールアドレス</th>";
      echo "<th>性別</th>";
      echo "<th>アカウント権限</th>";
      echo "<th>削除フラグ</th>";
      echo "<th>登録日時</th>";
      echo "<th>更新日時</th>";
      echo "<th>操作</th>";
      echo "</tr>";

      
      foreach ($stmt as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['family_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['family_name_kana'] . "</td>";
        echo "<td>" . $row['last_name_kana'] . "</td>";
        echo "<td>" . $row['mail'] . "</td>";
        echo "<td>";
        if ($row['gender'] == 0) {
            echo "男";
        } else {
            echo "女";
        }
        echo "</td>";
        echo "<td>";
        if ($row['authority'] == 0) {
          echo "一般";
        } else {
          echo "管理者";
        }
        echo "</td>";
        echo "<td>" ;
        if ($row['delete_flag'] == 0) {
          echo "有効";
        } else {
          echo "無効";
        }
        echo "</td>";
        // 登録日時を年月日の形式にフォーマットして表示
        $registeredTime = date('Y/m/d', strtotime($row['registered_time']));
        echo "<td>" . $registeredTime . "</td>";
        // 更新日時を年月日の形式にフォーマットして表示
        $updatedTime = date('Y/m/d', strtotime($row['update_time']));
        echo "<td>" . $updatedTime . "</td>";


        // 遷移先のページ指定が上手くいっていない
        
        echo "<td>"; // 更新・削除ボタン
        echo "<form action='update/update.php' method='post'>"; // 更新用のフォーム
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='submit' value='更新'>";
        echo "</form>";


        echo "<form action='delete/delete.php' method='post'>"; // 削除用のフォーム
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='submit' value='削除'>";
        echo "</form>";
        echo "</td>"; 
        

        echo "</tr>";
      }

echo "</table>";

?>
</div>
  

  </main>

  <footer>
    <div class="footer">フッター</div>
  </footer>

</body>
</html>