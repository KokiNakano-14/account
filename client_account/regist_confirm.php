<!-- アカウント登録確認画面 -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アカウント登録</title>
  <link rel="stylesheet" type="text/css" href="confirm.css">
</head>
<body>
  <div class="header">
    <h1>ナビゲーションバー</h1>
  </div>

  <h1>アカウント登録確認画面</h1>

  <div class="kakunin">
    <p>名前（性）</p>
    <p class="box">
      <?php echo $_POST['family_name']?>
    </p>
  </div>
</body>
</html>