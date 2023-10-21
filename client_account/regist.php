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
  <header>ナビゲーションバー</header>

  <!-- 入力フォーム -->
  <main>

    <h2>アカウント登録画面</h2>

    <form method="$_POST" action="regist_conform.php">
      <!-- 以下情報を入力 -->
      <div>
        <label>名前（性）</label>
        <input type="text" class="name1" maxlength="10" name="family_name">
      </div>

      <div>
        <label>名前（名）</label>
        <input type="text" class="name2" maxlength="10" name="last_name">
      </div>

      <div>
        <label>カナ（性）</label>
        <input type="text" class="name3" maxlength="10" name="family_name_kana">
      </div>

      <div>
        <label>カナ（名）</label>
        <input type="text" class="name4" maxlength="10" name="last_name_kana">
      </div>

      <div>
        <label>メールアドレス</label>
        <input type="email" class="mail" maxlength="100" name="mail">
      </div>

      <div>
        <label>パスワード</label>
        <input type="text" class="password" maxlength="10" name="password">
      </div>

      <div>
        <label>性別</label>
        <input type="radio" class="radio1" value="XXX" name="gender" checked>男
        <input type="radio" class="radio2" value="XXX" name="gender">女
      </div>

      <div>
        <label>郵便番号</label>
        <input type="text" class="postal" maxlength="7" name="postal_code">
      </div>

      <div>
        <label>都道府県（住所）</label>
        <select name="prefecture">

          <option value="">選択してください</option>

          <!-- $prefectureに都道府県の配列を格納する -->
          <?php

            $prefecture = [
              "北海道", "青森県", "岩手県", "宮城県", "秋田県", "山形県", "福島県",
              "茨城県", "栃木県", "群馬県", "埼玉県", "千葉県", "東京都", "神奈川県",
              "新潟県", "富山県", "石川県", "福井県", "山梨県", "長野県", "岐阜県", 
              "静岡県", "愛知県", "三重県", "滋賀県", "京都府", "大阪府", "兵庫県",
              "奈良県", "和歌山県", "鳥取県", "島根県", "岡山県", "広島県", "山口県",
              "徳島県", "香川県", "愛媛県", "高知県", "福岡県", "佐賀県", "長崎県",
              "熊本県", "大分県", "宮崎県", "鹿児島県", "沖縄県"
            ];

            

          ?>

        </select>
      </div>
    </form>
  </main>

  <footer>フッター</footer>

</body>
</html>l