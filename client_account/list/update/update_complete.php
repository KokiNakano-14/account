<?php
// 文字化け防止のコード
mb_internal_encoding("utf8");
// DBに接続する
$pdo = new PDO("mysql:dbname=client;host=localhost;", "root", "nako14");
// パスワードの base64 エンコード
// セキュリティ性の低い暗号化であるため注意
$user_password = $_POST['password'];
$encoded_password = base64_encode($user_password);

// データベースへの更新処理
$sql = "UPDATE user_info SET 
        family_name = :family_name,
        last_name = :last_name,
        family_name_kana = :family_name_kana,
        last_name_kana = :last_name_kana,
        mail = :mail,
        password = :password,
        gender = :gender,
        postal_code = :postal_code,
        prefecture = :prefecture,
        address_1 = :address_1,
        address_2 = :address_2,
        authority = :authority
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$update_data = array(
  ':family_name' => $_POST['family_name'],
  ':last_name' => $_POST['last_name'],
  ':family_name_kana' => $_POST['family_name_kana'],
  ':last_name_kana' => $_POST['last_name_kana'],
  ':mail' => $_POST['mail'],
  ':password' => $encoded_password,
  ':gender' => $_POST['gender'],
  ':postal_code' => $_POST['postal_code'],
  ':prefecture' => $_POST['prefecture'],
  ':address_1' => $_POST['address_1'],
  ':address_2' => $_POST['address_2'],
  ':authority' => $_POST['authority'],
  ':id' => $_POST['id']
);

$update_success = $stmt->execute($update_data);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="update_complete.css">
  <title>アカウント削除完了画面</title>
</head>

<body>

  <header>ヘッダー</header>

  <h2>アカウント更新完了画面</h2>

  <main>
    <?php
    if ($update_success !== false) {
      echo "<div><p>更新完了しました</p></div>";
    } else {
      echo "<div class='error-message'>エラーが発生したためアカウント更新できません。</div>";
    }
    ?>
  </main>

  <!-- D.I.Blogに移動 -->
  <form action="../../DIblog_keijiban/index.php" method="post">
    <div>
      <input type="submit" class="button" value="TOPページに戻る">
    </div>
  </form>

  <footer>フッター</footer>

</body>

</html>