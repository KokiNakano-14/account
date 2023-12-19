<?php
  // 文字化け防止のコード
  mb_internal_encoding("utf8");
  // DBに接続する
  $pdo = new PDO("mysql:dbname=client;host=localhost;","root","nako14");
  // order by id desc でidを下から表示
  $stmt = $pdo -> query("select * from user_info");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アカウント一覧</title>
</head>
<body>
  
  <header>
    <div class="haeder">ヘッダー</div>
  </header>

  <main>

  <?php

    echo"<table>";
      echo"<tr>";
        echo"<th>ID</th>";
        echo"<th>名前（性）</th>";
        echo"<th>名前（名）</th>";
        echo"<th>カナ（性）</th>";
        echo"<th>カナ（名）</th>";
        echo"<th>メールアドレス</th>";
        echo"<th>性別</th>";
        echo"<th>アカウント権限</th>";
        echo"<th>削除フラグ</th>";
        echo"<th>登録日時</th>";
        echo"<th>操作</th>";
      echo"</tr>";
      echo"<tr>";
        foreach($stmt as $row) {
        echo"<th>".$row['id']."</th>";
        echo"<th>".$row['family_name']."</th>";
        echo"<th>".$row['last_name']."</th>";
        echo"<th>".$row['family_name_kana']."</th>";
        echo"<th>".$row['last_name_kana']."</th>";
        echo"<th>".$row['mail']."</th>";
        echo"<th>".$row['gender']."</th>";
        echo"<th>".$row['authority']."</th>";
        echo"<th>".$row['registered_time']."</th>";

        }
      echo"</tr>";
  echo"</table>";

?>

  

  </main>

  <footer>
    <div class="footer">フッター</div>
  </footer>

</body>
</html>