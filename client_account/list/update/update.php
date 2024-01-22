<?php
// 文字化け防止のコード
mb_internal_encoding("utf8");
// DBに接続する
$pdo = new PDO("mysql:dbname=client;host=localhost;", "root", "nako14");


// update.phpで実装すべき内容
// 選択されたidを元にデータを取得


// IDが渡されているか確認
// if (isset($_POST['id'])) {
  // IDを取得
  // $id = $_POST['id'];

  // SQL文を準備
  // $stmt = $pdo->prepare("SELECT * FROM user_info WHERE id = ?");
  // $stmt->execute([$id]);

  // 結果を取得
  // $row = $stmt->fetch(PDO::FETCH_ASSOC);

  // 取得したデータを次の画面に渡すためにセッションに保存
  // session_start();
  // $_SESSION['account_data'] = $row;
// }
// セッションからデータを取得
// $account_data = $_SESSION['account_data'];

// セッション内のデータが存在するか確認
// if (!$account_data) {
  // データがない場合の処理
  // echo "データベースに接続できませんでした。";
  // exit;
// }

// エンコードしたパスワードをデコード
// $user_password = $account_data['password'];
// $decoded_password = base64_decode($user_password);



?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アカウント更新画面</title>
  <link rel="stylesheet" type="text/css" href="update.css">
</head>

<body>

  <header>ナビゲーションバー</header>

  <!-- アカウント情報 -->
  <h2>アカウント更新画面</h2>

  <form action="update_confirm.php" method="post">
  <div class="nyuuryoku">
    <label class="box">名前（性）</label>
    <input type="text" maxlength="10" class="name1" name="family_name" pattern="[ぁ-んァ-ン一-龯]+" value="<?php echo $account_data['family_name']; ?>">
  </div>

  <div class="nyuuryoku">
    <label class="box">名前（名）</label>
    <input type="text" maxlength="10" class="name2" name="last_name" pattern="[ぁ-んァ-ン一-龯]+" value="<?php echo $account_data['last_name']; ?>">
  </div>

  <div class="nyuuryoku">
  <label class="box">カナ（性）</label>
    <input type="text" maxlength="10" class="name3" name="family_name_kana" pattern="[ぁ-んァ-ン一-龯]+" value="<?php echo $account_data['family_name_kana']; ?>">
  </div>

  <div class="nyuuryoku">
    <label class="box">カナ（名）</label>
    <input type="text" maxlength="10" class="name4" name="last_name_kana" pattern="[ぁ-んァ-ン一-龯]+" value="<?php echo $account_data['last_name_kana']; ?>">
  </div>

  <div class="nyuuryoku">
    <label class="box">メールアドレス</label>
    <input type="email" maxlength="100" class="mail" name="mail" pattern="[a-zA-Z0-9@-]+" value="<?php echo $account_data['mail']; ?>">
  </div>

  <div class="nyuuryoku">
    <label class="box">パスワード</label>
    <input type="password" maxlength="10" class="password" name="password" 
    value="<?php 
      $hidden_password = str_repeat('●', strlen($decoded_password));
      echo $hidden_password;
      // デコードされたパスワードの表示を確認済み
      // echo $decoded_password;
    ?>">
  </div>

  <div class="nyuuryoku">
  <label class="box">性別</label>
  <input type="radio" class="radio1" name="gender" value="0" <?php echo ($account_data['gender'] == 0) ? 'checked' : ''; ?>> 男
  <input type="radio" class="radio2" name="gender" value="1" <?php echo ($account_data['gender'] == 1) ? 'checked' : ''; ?>> 女
</div>
</div>

  <div class="nyuuryoku">
    <label class="box">郵便番号</label>
    <input type="text" maxlength="7" class="postal" name="postal_code" value="<?php echo $account_data['postal_code']; ?>">
  </div>

  <div class="nyuuryoku">
  <label>都道府県（住所）</label>
    <select class="prefecture" name="prefecture">
    <option value=""><?php echo $account_data['prefecture'] ?></option>

    <!-- $prefectureに都道府県の配列を格納する -->
    <?php
      $selectedPrefecture = isset($account_data['prefecture']) ? $_POST['prefecture'] : ''; // 選択されたデータを保持
      $prefectures = [
        "北海道", "青森県", "岩手県", "宮城県", "秋田県", "山形県", "福島県",
        "茨城県", "栃木県", "群馬県", "埼玉県", "千葉県", "東京都", "神奈川県",
        "新潟県", "富山県", "石川県", "福井県", "山梨県", "長野県", "岐阜県", 
        "静岡県", "愛知県", "三重県", "滋賀県", "京都府", "大阪府", "兵庫県",
        "奈良県", "和歌山県", "鳥取県", "島根県", "岡山県", "広島県", "山口県",
        "徳島県", "香川県", "愛媛県", "高知県", "福岡県", "佐賀県", "長崎県",
        "熊本県", "大分県", "宮崎県", "鹿児島県", "沖縄県"
      ];

      // asで$prefectureの中全て選択
      foreach ($prefectures as $prefecture) {
        $isSelected = ($prefecture == $selectedPrefecture) ? 'selected' : ''; // 選択状態を設定
        echo "<option value=\"$prefecture\" $isSelected>$prefecture</option>";
      }          
      
    ?>
    </select>
  </div>

  <div class="nyuuryoku">
    <label class="box">住所（市区町村）</label>
    <input type="text" maxlength="10" class="address1" name="address_1" pattern="[ぁ-んァ-ヶー一-龠0-9\s\-]+" value="<?php echo $account_data['address_1']; ?>">
  </div>


  <div class="nyuuryoku">
    <label class="box">住所（番地）</label>
    <input type="text" maxlength="100" class="address2" name="address_2" pattern="[ぁ-んァ-ヶー一-龠0-9\s\-]+" value="<?php echo $account_data['address_2']; ?>">
  </div>

  <div class="nyuuryoku">
  <label class="box">アカウント権限</label>
  <select name="authority">
    <option value="0" <?php echo ($account_data['authority'] == 0) ? 'selected' : ''; ?>>一般</option>
    <option value="1" <?php echo ($account_data['authority'] == 1) ? 'selected' : ''; ?>>管理者</option>
  </select>
  </div>

<!-- ページ移行更新ボタン -->
  <div>
    <input type="submit" class="update_btn" value="確認する">
  </div>

  </form>

  <footer>フッター</footer>

</body>

</html>