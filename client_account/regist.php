<!DOCTYPE html>

<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/regist.css">

  <title>アカウント登録</title>

</head>

<body>

  <!-- ヘッダー -->
  <header>
    <p>ナビゲーションバー</p>
  </header>

  <!-- 入力フォーム -->
  <main>

    <h2>アカウント登録画面</h2>

    <form method="$_POST" action="regist_conform.php">
      <!-- 以下情報を入力 -->
      <div class="nyuuryoku">
        <label>名前（性）</label>
        <input type="text" class="name1" maxlength="10" name="family_name">
      </div>

      <div class="nyuuryoku">
        <label>名前（名）</label>
        <input type="text" class="name2" maxlength="10" name="last_name">
      </div>

      <div class="nyuuryoku">
        <label>カナ（性）</label>
        <input type="text" class="name3" maxlength="10" name="family_name_kana">
      </div>

      <div class="nyuuryoku">
        <label>カナ（名）</label>
        <input type="text" class="name4" maxlength="10" name="last_name_kana">
      </div>

      <div class="nyuuryoku">
        <label>メールアドレス</label>
        <input type="email" class="mail" maxlength="100" name="mail">
      </div>

      <div class="nyuuryoku">
        <label>パスワード</label>
        <input type="text" class="password" maxlength="10" name="password">
      </div>

      <div class="nyuuryoku">
        <label>性別</label>
        <input type="radio" class="radio1" value="XXX" name="gender" checked>男
        <input type="radio" class="radio2" value="XXX" name="gender">女
      </div>

      <div class="nyuuryoku">
        <label>郵便番号</label>
        <input type="text" class="postal" maxlength="7" name="postal_code">
      </div>

      <div class="nyuuryoku">
        <label>都道府県（住所）</label>
        <select class="prefecture" name="prefecture">

          <option value="">選択してください</option>

          <!-- $prefectureに都道府県の配列を格納する -->
          <?php

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
              echo "<option value=\"$prefecture\">$prefecture</option>";
            }
          ?>

        </select>
      </div>

      <div class="nyuuryoku">
        <label>住所（市区町村）</label>
        <input type="text" class="address1" maxlength="10" name="address_1">
      </div>

      <div class="nyuuryoku">
        <label>住所（番地）</label>
        <input type="text" class="address2" maxlength="100" name="address_2">
      </div>

      <div class="nyuuryoku">
        <label>アカウント権限</label>
        <select class="authority" name="authority">
          <option value="0">一般</option>
          <option value="1">管理者</option>
        </select>
      </div>

      <div>
        <input type="submit" class="kakunin_btn" value="確認する">
      </div>
    </form>
  </main>

  <footer>
    <p>フッター</p>
  </footer>

</body>
</html>l