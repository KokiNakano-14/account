<?php
  // 文字化け防止のコード
  mb_internal_encoding("utf8");
  // DBに接続する
  $pdo = new PDO("mysql:dbname=client;host=localhost;","root","nako14");
  // IDが渡されているか確認
if(isset($_POST['id'])) {
  // IDを取得
  $id = $_POST['id'];

  // SQL文を準備
  $stmt = $pdo->prepare("SELECT * FROM user_info WHERE id = ?");
  $stmt->execute([$id]);

  // 結果を取得
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  // 取得したデータを次の画面に渡すためにセッションに保存
  session_start();
  $_SESSION['account_data'] = $row;

}
// セッションからデータを取得
$account_data = $_SESSION['account_data'];

// セッション内のデータが存在するか確認
if (!$account_data) {
    // データがない場合の処理
    echo "データベースに接続できませんでした。";
    exit;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アカウント更新画面</title>
</head>
<body>

<header>ナビゲーションバー</header>

<!-- アカウント情報 -->
<h1>アカウント更新画面</h1>

<div>
  <label class="box">名前（性）</label>
  <label class="name1">
  <?php echo $account_data['family_name']; ?>
  </label>
</div>

<div>
  <label class="box">名前（名）</label>
  <label class="name2">
  <?php echo $account_data['last_name']; ?>
  </label>
</div>

<div>
  <label class="box">カナ（性）</label>
  <label class="name3">
  <?php echo $account_data['family_name_kana']; ?>
  </label>
</div>

<div>
  <label class="box">カナ（名）</label>
  <label class="name4">
  <?php echo $account_data['last_name_kana']; ?>
  </label>
</div>

<div>
  <label class="box">メールアドレス</label>
  <label class="mail">
  <?php echo $account_data['mail']; ?>
  </label>
</div>

<div>
  <label class="box">パスワード</label>
  <label class="password">
  <?php 
    $password = $account_data['password'];
    $hidden_password = str_repeat('●', strlen($password));
    echo $hidden_password;
    ?>
  </label>
</div>

<div>
  <label class="box">性別</label>
  <label class="gender">
  <?php
  if ($account_data['gender'] == 0) {
    echo '男';
  } else {
    echo '女';
  }
  ?>
  </label>
</div>

<div>
  <label class="box">郵便番号</label>
  <label class="postal">
  <?php echo $account_data['postal_code']; ?>
  </label>
</div>

<div>
  <label class="box">都道府県（住所）</label>
  <label class="prefecture">
  <?php echo $account_data['prefecture']; ?>
  </label>
</div>

<div>
  <label class="box">住所（市区町村）</label>
  <label class="address1">
  <?php echo $account_data['address_1']; ?>
  </label>
</div>

<div>
  <label class="box">住所（番地）</label>
  <label class="address2">
  <?php echo $account_data['address_2']; ?>
  </label>
</div>

<div>
  <label class="box">アカウント権限</label>
  <label class="authority">
  <?php
  if ($account_data['authority'] == 0) {
    echo '一般';
  } else {
    echo '管理者';
  }
  ?>
  </label>
</div>


</body>
</html>