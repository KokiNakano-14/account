<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="regist.css">
  <title>アカウント登録</title>

  <!-- 平仮名・漢字・カナで入力を制限する関数をここに記載する -->

</head>

<body>


<?php  /* PDO文の作成 */

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=client; host=localhost;","root","nako14");
$stmt = $pdo -> query("select * from user_info");

?>

<!-- ナビゲーションバー -->
  <div class="header">
    <p>ナビゲーションバー</p>
  </div>


<!-- 顧客情報入力欄 -->
  <h1>アカウント登録画面</h1>
  <form method="post" action="regist_conplete.php">

    <div>
      <label>名前（性）</label>
      <input type="text" class="text" size="20" maxlength="10" name="family_name">
    </div>
    <div>
      <label>名前（名）</label>
      <input type="text" class="text" size="20" maxlength="10" name="last_name">
    </div>
    <div>
      <label>カナ（性）</label>
      <input type="text" class="text" size="20" maxlength="10" name="family_name_kana">
    </div>
  </form>
</body>
</html>