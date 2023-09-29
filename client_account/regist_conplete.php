<?php  /* PDO文の作成 */

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=client; host=localhost;", "root", "nako14");
$stmt = $pdo->query("select * from user_info");

// DBname=clientに繋ぐためのコード
$pdo->exec("insert into user_info(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority) values('" . $_POST['family_name'] . "','" . $_POST['last_name'] . "','" . $_POST['family_name_kana'] . "','" . $_POST['last_name_kana'] . "','" . $_POST['mail'] . "','" . $_POST['password'] . "','" . $_POST['gender'] . "','" . $_POST['postal_code'] . "','" . $_POST['prefecture'] . "','" . $_POST['address_1'] . "','" . $_POST['address_2'] . "','" . $_POST['authority'] . "');");

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="conplete.css">
  <title>アカウント登録</title>
</head>

<body>
  <div class="header">ナビゲーションバー</div>

  <h1>アカウント登録完了画面</h1>

  <div class="main">
    <p>登録完了しました</p>
  </div>

  <!-- regist.phpに戻る -->
  <form action="regist.php">
    <div class="back_btn">
      <input type="submit" class="button" value="TOPページに戻る">
    </div>
  </form>

  <div class="footer">フッター</div>

</body>
</html>