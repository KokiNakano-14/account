<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="regist.css">

  <title>アカウント登録</title>

</head>
<body>

  <!-- ナビゲーションバー -->
  <header>ナビゲーションバー</header>

  <!-- 顧客情報入力欄 -->
  <main>
  <h1>アカウント登録画面</h1>
    <form method="post" action="regist_confirm.php">
      <!-- patternでひらがな、漢字指定 -->
      <div>
        <label>名前（性）</label>
        <input type="text" class="text" size="20" maxlength="10" name="family_name"
          required
          oninvalid="this.setCustomValidity('名前（性）が未入力です')"
          onchange="this.setCustomValidity('')"
          pattern="[ぁ-んァ-ン一-龯]+"
          value="<?php if( !empty($_POST['family_name']) ){ echo $_POST['family_name']; } ?>">
      </div>
      <!-- patternでひらがな、漢字指定 -->
      <div>
        <label>名前（名）</label>
        <input type="text" class="text" size="20" maxlength="10" name="last_name" 
          required
          oninvalid="this.setCustomValidity('名前（名）が未入力です')"
          onchange="this.setCustomValidity('')"
          pattern="[ぁ-んァ-ン一-龯]+"
          value="<?php if( !empty($_POST['last_name']) ){ echo $_POST['last_name']; } ?>">
      </div>
      <!-- patternでカタカナのみ指定 -->
      <div>
        <label>カナ（性）</label>
        <input type="text" class="text"  size="20" maxlength="10" name="family_name_kana" 
          required
          oninvalid="this.setCustomValidity('カナ（性）が未入力です')"
          onchange="this.setCustomValidity('')"

          value="<?php if( !empty($_POST['family_name_kana']) ){ echo $_POST['family_name_kana']; } ?>">
      </div>
      <!-- patternでカタカナのみ指定 -->
      <div>
        <label>カナ（名）</label>
        <input type="text" class="text"  size="20" maxlength="10" name="last_name_kana"
          required
          oninvalid="this.setCustomValidity('カナ（名）が未入力です')"
          onchange="this.setCustomValidity('')"
        
          value="<?php if( !empty($_POST['last_name_kana']) ){ echo $_POST['last_name_kana']; } ?>">
      </div>
      <!-- type="email"でメール指定 -->
      <div>
        <label>メールアドレス</label>
        <input type="email" class="mail"  size="20" maxlength="100" name="mail" required
          oninvalid="this.setCustomValidity('メールアドレスが未入力です')"
          onchange="this.setCustomValidity('')"
          value="<?php if( !empty($_POST['mail']) ){ echo $_POST['mail']; } ?>">
      </div>
      <!-- 半角英数字指定 -->
      <div>
        <label>パスワード</label>
        <input type="password" class="password" size="20" maxlength="10" name="password" required
          oninvalid="this.setCustomValidity('パスワードが未入力です')"
          onchange="this.setCustomValidity('')"
          value="<?php if( !empty($_POST['password']) ){ echo $_POST['password']; } ?>">
      </div>
      <div>
        <label>性別</label>
        <input type="radio" class="radio1" value="男" name="gender" checked>男
        <input type="radio" class="radio2" value="女" name="gender">女
      </div>
      <!-- 半角数字指定 -->
      <div>
        <label>郵便番号</label>
        <input type="text" class="text" name="postal_code" maxlength="7" required
          oninvalid="this.setCustomValidity('郵便番号が未入力です')"
          onchange="this.setCustomValidity('')"
          
          value="<?php if( !empty($_POST['postal_code']) ){ echo $_POST['postal_code']; } ?>">
      </div>
      <div>
        <label>都道府県（住所）</label>
        <select name="prefecture" required
          oninvalid="this.setCustomValidity('都道府県が未選択です')"
          onchange="this.setCustomValidity('')">

          <option value="" selected>選択してください</option>
          
          <!-- prefecturesに都道府県の配列を入れる。連想配列を利用する -->
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

            // asで&prefecturesの中の全て
            foreach ($prefectures as $prefecture) {
              echo "<option value=\"$prefecture\">$prefecture</option>";
            }
          ?>
        </select>
      </div>
      <div>
        <label>住所（市区町村）</label>
        <input type="text" class="text" size="20" maxlength="10" name="address_1" required
          oninvalid="this.setCustomValidity('住所（市町村）が未入力です')"
          onchange="this.setCustomValidity('')"
          pattern="[^\x21-\x2C\x2E\x2F\x3A-\x40\x5B-\x60\x7B-\x7E]*"
          value="<?php if( !empty($_POST['address_1']) ){ echo $_POST['address_1']; } ?>">
      </div>
      <div>
        <label>住所（番地）</label>
        <input type="text" class="text" size="20" maxlength="100" name="address_2" required
          oninvalid="this.setCustomValidity('住所（番地）が未入力です')"
          onchange="this.setCustomValidity('')"
          pattern="[^\x21-\x2C\x2E\x2F\x3A-\x40\x5B-\x60\x7B-\x7E]*"
          value="<?php if( !empty($_POST['address_2']) ){ echo $_POST['address_2']; } ?>">
      </div>
      <div>
        <label>アカウント権限</label>
        <select name="authority">
          <option value="0" selected>一般</option>
          <option value="1">管理者</option>
        </select>
      </div>
      <div>
        <input type="submit" class="submit" value="確認する">
      </div>
    </form>
  </main>

<footer>フッター</footer>
</body>


</html>