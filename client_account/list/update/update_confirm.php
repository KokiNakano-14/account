<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アカウント更新確認画面</title>
</head>

<body>
  <!-- アカウント情報 -->
  <h1>アカウント登録確認画面</h1>

  <div>
    <label class="box">名前（性）</label>
    <label class="name1">
      <?php echo $_POST['family_name'] ?>
    </label>
  </div>

  <div>
    <label class="box">名前（名）</label>
    <label class="name2">
      <?php echo $_POST['last_name'] ?>
    </label>
  </div>

  <div>
    <label class="box">カナ（性）</label>
    <label class="name3">
      <?php echo $_POST['family_name_kana'] ?>
    </label>
  </div>

  <div>
    <label class="box">カナ（名）</label>
    <label class="name4">
      <?php echo $_POST['last_name_kana'] ?>
    </label>
  </div>

  <div>
    <label class="box">メールアドレス</label>
    <label class="mail">
      <?php echo $_POST['mail'] ?>
    </label>
  </div>

  <div>
  <label class="box">パスワード</label>
  <label class="password">
    <?php
    $hidden_password = str_repeat('●', strlen(base64_decode($_POST['password'])));
    echo $hidden_password;
    // 更新画面では再度encodeして送信
    ?>
  </label>
</div>
  <div>
    <label class="box">性別</label>
    <label class="gender">
      <?php
      if ($_POST['gender'] == 0) {
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
      <?php echo $_POST['postal_code'] ?>
    </label>
  </div>

  <div>
    <label class="box">都道府県（住所）</label>
    <label class="prefecture">
      <?php echo $_POST['prefecture'] ?>
    </label>
  </div>

  <div>
    <label class="box">住所（市区町村）</label>
    <label class="address1">
      <?php echo $_POST['address_1'] ?>
    </label>
  </div>

  <div>
    <label class="box">住所（番地）</label>
    <label class="address2">
      <?php echo $_POST['address_2'] ?>
    </label>
  </div>

  <div>
    <label class="box">アカウント権限</label>
    <label class="authority">
      <?php
      if ($_POST['authority'] == 0) {
        echo '一般';
      } else {
        echo '管理者';
      }
      ?>
    </label>
  </div>

  <form action="update.php" method="post">
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

  <form action="update_complete.php" method="POST">
  <input type="submit" class="button2" value="更新する">
    <input type="hidden" value="<?php echo $_POST['family_name'] ?>" name="family_name">
    <input type="hidden" value="<?php echo $_POST['last_name'] ?>" name="last_name">
    <input type="hidden" value="<?php echo $_POST['family_name_kana'] ?>" name="family_name_kana">
    <input type="hidden" value="<?php echo $_POST['last_name_kana'] ?>" name="last_name_kana">
    <input type="hidden" value="<?php echo $_POST['mail'] ?>" name="mail">
    <input type="hidden" value="<?php echo $hidden_password ?>" name="password">
    <input type="hidden" value="<?php echo $_POST['gender'] ?>" name="gender">
    <input type="hidden" value="<?php echo $_POST['postal_code'] ?>" name="postal_code">
    <input type="hidden" value="<?php echo $_POST['prefecture'] ?>" name="prefecture">
    <input type="hidden" value="<?php echo $_POST['address_1'] ?>" name="address_1">
    <input type="hidden" value="<?php echo $_POST['address_2'] ?>" name="address_2">
    <input type="hidden" value="<?php echo $_POST['authority'] ?>" name="authority">
  </form>
</body>

</html>