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

  
  <table>
      <tr>
        <th>ID</th><th>名前（性）</th><th>名前（名）</th><th>カナ（性）</th><th>カナ（名）</th><th>メールアドレス</th><th>性別</th><th>アカウント権限</th><th>削除フラグ</th><th>登録日時</th><th>操作</th>
      </tr>
      <tr>
        <?php
        <th></th>
        ?>
      </tr>
  </table>

  </main>

  <footer>
    <div class="footer">フッター</div>
  </footer>

</body>
</html>