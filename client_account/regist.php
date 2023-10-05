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
  <div class="header">
    <p>ナビゲーションバー</p>
  </div>

  <!-- 顧客情報入力欄 -->
  <h1>アカウント登録画面</h1>
  <form method="post" action="regist_confirm.php">

      <!-- patternでひらがな、漢字指定 -->
      <div class="info">
        <label>名前（性）</label>
        <input type="text" class="text" size="20" maxlength="10"    name="family_name">
      </div>
      <!-- patternでひらがな、漢字指定 -->
      <div class="info">
        <label>名前（名）</label>
        <input type="text" class="text" size="20" maxlength="10"    name="last_name">
      </div>
      <!-- patternでカタカナのみ指定 -->
      <div class="info">
        <label>カナ（性）</label>
        <input type="text" class="text"  size="20" maxlength="10"    name="family_name_kana">
      </div>
      <!-- patternでカタカナのみ指定 -->
      <div class="info">
        <label>カナ（名）</label>
        <input type="text" class="text"  size="20" maxlength="10"    name="last_name_kana">
      </div>
      <!-- type="email"でメール指定 -->
      <div class="info">
        <label>メールアドレス</label>
        <input type="email" class="mail"  size="20" maxlength="100" name="mail">
      </div>
      <!-- 半角英数字指定 -->
      <div class="info">
        <label>パスワード</label>
        <input type="password" class="password" size="20" maxlength="10" name="password" pattern="^[0-9A-Za-z]+$">
      </div>

      <div class="info">
        <label>性別</label>
        <input type="radio" class="radio" value="男" name="gender" checked>男
        <input type="radio" class="radio" value="女" name="gender">女
      </div>

      <!-- 半角数字指定 -->
      <div class="info">
        <label>郵便番号</label>
        <input type="text" class="text" name="postal_code" maxlength="7" pattern="^[0-9]+$">
      </div>

      <div class="info">
        <label>都道府県（住所）</label>
        <select name="prefecture">
          <option value="" selected>選択してください</option>
          <option value="1">北海道</option>
          <option value="2">青森県</option>
          <option value="3">岩手県</option>
          <option value="4">宮城県</option>
          <option value="5">秋田県</option>
          <option value="6">山形県</option>
          <option value="7">福島県</option>
          <option value="8">茨城県</option>
          <option value="9">栃木県</option>
          <option value="10">群馬県</option>
          <option value="11">埼玉県</option>
          <option value="12">千葉県</option>
          <option value="13">東京都</option>
          <option value="14">神奈川県</option>
          <option value="15">新潟県</option>
          <option value="16">富山県</option>
          <option value="17">石川県</option>
          <option value="18">福井県</option>
          <option value="19">山梨県</option>
          <option value="20">長野県</option>
          <option value="21">岐阜県</option>
          <option value="22">静岡県</option>
          <option value="23">愛知県</option>
          <option value="24">三重県</option>
          <option value="25">滋賀県</option>
          <option value="26">京都府</option>
          <option value="27">大阪府</option>
          <option value="28">兵庫県</option>
          <option value="29">奈良県</option>
          <option value="30">和歌山県</option>
          <option value="31">鳥取県</option>
          <option value="32">島根県</option>
          <option value="33">岡山県</option>
          <option value="34">広島県</option>
          <option value="35">山口県</option>
          <option value="36">徳島県</option>
          <option value="37">香川県</option>
          <option value="38">愛媛県</option>
          <option value="39">高知県</option>
          <option value="40">福岡県</option>
          <option value="41">佐賀県</option>
          <option value="42">長崎県</option>
          <option value="43">熊本県</option>
          <option value="44">大分県</option>
          <option value="45">宮崎県</option>
          <option value="46">鹿児島県</option>
          <option value="47">沖縄県</option>
        </select>
      </div>

      <div class="info">
        <label>住所（市区町村）</label>
        <input type="text" class="text" size="20" maxlength="10" name="address_1">
      </div>

      <div class="info">
        <label>住所（番地）</label>
        <input type="text" class="text" size="20" maxlength="100" name="address_2">
      </div>

      <div class="info">
        <label>アカウント権限</label>
        <select name="authority">
          <option value="0" selected>一般</option>
          <option value="1">管理者</option>
        </select>
      </div>

      <div class="info_btn">
        <input type="submit" class="submit" value="確認する">
      </div>
    </div>
  </form>

  <div class="footer">
    <p>フッター</p>
  </div>
</body>


</html>