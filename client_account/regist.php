<!-- 再現できていない項目 -->
<!-- 
  ・削除フラグを初期値1でデータベースに登録する
  ・データ登録時に登録日時が自動で入力されるようにする
  ・phpmyadmin内でデータを更新した際に、自動で更新日時が変化するようにする
  ・メールアドレスの入力欄にドットから始まる文字列をチェックできるようにする
  ・ページのサイズを変更した際に、表記崩れを起こさないようにする
-->

<!DOCTYPE html>

<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/regist.css">
  <link rel="stylesheet" href="DIblog_js/js.css">

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

    <form method="post" action="regist_confirm.php">
      <!-- 以下情報を入力 -->
      <!-- patternで入力できる文字列制限 -->
      <div class="nyuuryoku">
        <label>名前（性）</label>
        <!-- value以下で入力したデータを保存する -->
        <input type="text" class="name1" maxlength="10" name="family_name" 
        pattern="[ぁ-んァ-ン一-龯]+" 
        title="ひらがな、漢字のみ入力できます"
        value="<?php if( !empty($_POST['family_name']) ){ echo $_POST['family_name']; } ?>"> 
      </div>

      <div class="nyuuryoku">
        <label>名前（名）</label>
        <input type="text" class="name2" maxlength="10" name="last_name"
        pattern="[ぁ-んァ-ン一-龯]+" 
        title="ひらがな、漢字のみ入力できます"
        value="<?php if( !empty($_POST['last_name']) ){ echo $_POST['last_name']; } ?>">
      </div>

      <div class="nyuuryoku">
        <label>カナ（性）</label>
        <input type="text" class="name3" maxlength="10" name="family_name_kana"
        pattern="[ァ-ヶー]+" 
        title="カタカナのみ入力できます"
        value="<?php if( !empty($_POST['family_name_kana']) ){ echo $_POST['family_name_kana']; } ?>">
      </div>

      <div class="nyuuryoku">
        <label>カナ（名）</label>
        <input type="text" class="name4" maxlength="10" name="last_name_kana"
        pattern="[ァ-ヶー]+" 
        title="カタカナのみ入力できます"
        value="<?php if( !empty($_POST['last_name_kana']) ){ echo $_POST['last_name_kana']; } ?>">
      </div>

      <div class="nyuuryoku">
        <label>メールアドレス</label>
        <input type="email" class="mail" maxlength="100" name="mail"
        pattern="[a-zA-Z0-9@-]+" 
        title="半角英数字、半角ハイフン、半角記号（ハイフンとアットマーク）のみ入力できます"
        value="<?php if( !empty($_POST['mail']) ){ echo $_POST['mail']; } ?>">
      </div>

      <div class="nyuuryoku">
        <label>パスワード</label>
        <input type="text" class="password" maxlength="10" name="password"
        pattern="[a-zA-Z0-9]+" 
        title="英数字のみ入力できます"
        value="<?php if( !empty($_POST['password']) ){ echo $_POST['password']; } ?>">
      </div>

      <div class="nyuuryoku">
        <label>性別</label>
        <!-- isset()でgenderでチェックされている値にchecked属性が追加される -->
          <input type="radio" class="radio1" value="男" name="gender" <?php if(isset($_POST['gender']) && $_POST['gender'] == '男') echo 'checked'; ?> checked >男
          <input type="radio" class="radio2" value="女" name="gender" <?php if(isset($_POST['gender']) && $_POST['gender'] == '女') echo 'checked'; ?>>女
      </div>
      <div class="error-message" id="gender-error"></div>


      <div class="nyuuryoku">
        <label>郵便番号</label>
        <input type="text" class="postal" maxlength="7" name="postal_code"
        pattern="\d{7}"
        title="半角数字7桁で入力してください"
        value="<?php if( !empty($_POST['postal_code']) ){ echo $_POST['postal_code']; } ?>">
      </div>

      <div class="nyuuryoku">
        <label>都道府県（住所）</label>
        <select class="prefecture" name="prefecture">

          <option value="">選択してください</option>

          <!-- $prefectureに都道府県の配列を格納する -->
          <?php

            $selectedPrefecture = isset($_POST['prefecture']) ? $_POST['prefecture'] : ''; // 選択されたデータを保持

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
        <label>住所（市区町村）</label>
        <input type="text" class="address1" maxlength="10" name="address_1"
        pattern="[ぁ-んァ-ヶー一-龠0-9\s\-]+" 
        title="ひらがな、カタカナ、漢字、数字、ハイフン、スペースのみ入力できます"
        value="<?php if( !empty($_POST['address_1']) ){ echo $_POST['address_1']; } ?>">
      </div>

      <div class="nyuuryoku">
        <label>住所（番地）</label>
        <input type="text" class="address2" maxlength="100" name="address_2"
        pattern="[ぁ-んァ-ヶー一-龠0-9\s\-]+" 
        title="ひらがな、カタカナ、漢字、数字、ハイフン、スペースのみ入力できます"
        value="<?php if( !empty($_POST['address_2']) ){ echo $_POST['address_2']; } ?>">
      </div>

      <div class="nyuuryoku">
        <label>アカウント権限</label>
        <select class="authority" name="authority">
          <option value="一般">一般</option>
          <option value="管理者">管理者</option>
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

  <script src="DIblog_js/regist.js"></script>

</body>
</html>