<?php

// PDO文の作成
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=client; host=localhost;", "root", "nako14");
$stmt = $pdo->query("select * from user_info");

// パスワードのハッシュ化
$user_password = $_POST['password'];
$hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

// データベースへの挿入処理
$insert_success = $pdo->exec("INSERT INTO user_info(family_name, last_name, family_name_kana, last_name_kana, mail, password, gender, postal_code, prefecture, address_1, address_2, authority) value ('" . $_POST['family_name'] . "','" . $_POST['last_name'] . "','" . $_POST['family_name_kana'] . "','" . $_POST['last_name_kana'] . "','" . $_POST['mail'] . "','" . $hashed_password . "','" . $_POST['gender'] . "','" . $_POST['postal_code'] . "','" . $_POST['prefecture'] . "','" . $_POST['address_1'] . "','" . $_POST['address_2'] . "','" . $_POST['authority'] . "');");

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/complete.css">
  <title>アカウント登録</title>
</head>

<body>
  <header>ヘッダー</header>

  <h2>アカウント登録完了画面</h2>

  <main>
    <?php
    if ($insert_success !== false) {
      echo "<div><p>登録完了しました</p></div>";
    } else {
      echo "<div class='error-message'>エラーが発生したためアカウント登録できません。</div>";
    }
    ?>
  </main>

  <!-- D.I.Blogに移動 -->
  <form action="DIblog_keijiban/index.php">
    <div>
      <input type="submit" class="button" value="TOPページに戻る">
    </div>
  </form>

  <footer>フッター</footer>

</body>
</html>
