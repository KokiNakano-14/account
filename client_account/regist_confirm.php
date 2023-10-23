<?php

  $user_password = $_POST['password'];
  // パスワードをハッシュ化する
  $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アカウント登録</title>
  <link rel="stylesheet" type="text/css" href="confirm.css">
</head>

<body>
  <div class="header">ナビゲーションバー</div>

  <!-- アカウント情報 -->
  <h1>アカウント登録確認画面</h1>

  <div class="kakunin">
    <label>名前（性）</label>
    <label class="box">
      <?php echo $_POST['family_name'] ?>
    </label>
  </div>
  <div class="kakunin">
    <label>名前（名）</label>
    <label class="box">
      <?php echo $_POST['last_name'] ?>
    </label>
  </div>
  <div class="kakunin">
    <label>カナ（性）</label>
    <label class="box">
      <?php echo $_POST['family_name_kana'] ?>
    </label>
  </div>
  <div class="kakunin">
    <label>カナ（名）</label>
    <label class="box">
      <?php echo $_POST['last_name_kana'] ?>
    </label>
  </div>
  <div class="kakunin">
    <label>メールアドレス</label>
    <label class="box">
      <?php echo $_POST['mail'] ?>
    </label>
  </div>
  <div class="kakunin">
    <label>パスワード</label>
    <label class="box">
      <?php echo $_POST['password'];?>
    </label>
  </div>
  <div class="kakunin">
    <label>性別</label>
    <label class="box">
      <?php echo $_POST['gender'] ?>
    </label>
  </div>
  <div class="kakunin">
    <label>郵便番号</label>
    <label class="box">
      <?php echo $_POST['postal_code'] ?>
    </label>
  </div>
  <div class="kakunin">
    <label>都道府県（住所）</label>
    <label class="box">
      <?php echo $_POST['prefecture'] ?>
    </label>
  </div>
  <div class="kakunin">
    <label>住所（市区町村）</label>
    <label class="box">
      <?php echo $_POST['address_1'] ?>
    </label>
  </div>
  <div class="kakunin">
    <label>住所（番地）</label>
    <label class="box">
      <?php echo $_POST['address_2'] ?>
    </label>
  </div>
  <div class="kakunin">
    <label>アカウント権限</label>
    <label class="box">
      <?php echo $_POST['authority'] ?>
    </label>
  </div>

  <!-- regist.phpに戻って修正する -->
  <form action="regist.php" method="post">
    <input type="submit" class="button1" value="前に戻る">
    <input type="hidden" value="<?php echo $_POST['family_name'] ?>" name="family_name">
    <input type="hidden" value="<?php echo $_POST['last_name'] ?>" name="last_name">
    <input type="hidden" value="<?php echo $_POST['family_name_kana'] ?>" name="family_name_kana">
    <input type="hidden" value="<?php echo $_POST['last_name_kana'] ?>" name="last_name_kana">
    <input type="hidden" value="<?php echo $_POST['mail'] ?>" name="mail">
    <input type="hidden" value="<?php echo $_POST['password'] ?>" name="password">
    <input type="hidden" value="<?php echo $_POST['gender'] ?>" name="gender">
    <input type="hidden" value="<?php echo $_POST['postal_code'] ?>" name="postal_code">
    <input type="hidden" value="<?php echo $_POST['prefecture'] ?>" name="prefecture">
    <input type="hidden" value="<?php echo $_POST['address_1'] ?>" name="address_1">
    <input type="hidden" value="<?php echo $_POST['address_2'] ?>" name="address_2">
    <input type="hidden" value="<?php echo $_POST['authority'] ?>" name="authority">
  </form>

  <!-- regist_conplete.phpに送る -->
  <form action="regist_conplete.php" method="post">
    <input type="submit" class="button2" value="登録する">
    <input type="hidden" value="<?php echo $_POST['family_name'] ?>" name="family_name">
    <input type="hidden" value="<?php echo $_POST['last_name'] ?>" name="last_name">
    <input type="hidden" value="<?php echo $_POST['family_name_kana'] ?>" name="family_name_kana">
    <input type="hidden" value="<?php echo $_POST['last_name_kana'] ?>" name="last_name_kana">
    <input type="hidden" value="<?php echo $_POST['mail'] ?>" name="mail">
    <input type="hidden" value="<?php echo $_POST['password'] ?>" name="password">
    <input type="hidden" value="<?php echo $_POST['gender'] ?>" name="gender">
    <input type="hidden" value="<?php echo $_POST['postal_code'] ?>" name="postal_code">
    <input type="hidden" value="<?php echo $_POST['prefecture'] ?>" name="prefecture">
    <input type="hidden" value="<?php echo $_POST['address_1'] ?>" name="address_1">
    <input type="hidden" value="<?php echo $_POST['address_2'] ?>" name="address_2">
    <input type="hidden" value="<?php echo $_POST['authority'] ?>" name="authority">
  </form>

  <div class="footer">フッター</div>
</body>
</html>