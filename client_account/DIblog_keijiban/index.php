<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=client; host=localhost;","root","nako14");
$stmt = $pdo -> query("select * from keijiban");


?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>diworksblog掲示板</title>
</head>
<body>


  <!-- D.I.Worksのロゴ -->
  <img src="diblog_logo.jpg">

  <header>
    <div class="logo">トップ</div>
    <ul>
      <li>プロフィール</li>
      <li>D.IBlogについて</li>
      <li>登録フォーム</li>
      <!-- お問い合わせフォームに移動 -->
      <li><a href="http://localhost/task/task-nakano/account/client_account/regist.php">アカウント登録</a></li>
      <li>問い合わせ
      <li>その他</li>
    </ul>
  </header>

  <main>
    <div class="main-container">

      <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
      </div>

      <div class="nyuuryoku">
        <h2>入力フォーム</h2>
        <!-- POST送信でinsert.phpに情報を引き渡す -->
        <form method="post" action="insert.php">
          <div>
            <label>ハンドルネーム</label>
            <br>
            <!-- requiredで警告文 -->
            <input type="text" class="text" size="25" name="handlename" >
          </div>

          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="25" name="title" >
          </div>

          <div>
            <label>コメント</label>
            <br>
            <textarea rows="8" cols="60" name="comments" ></textarea>
          </div>

          <div>
            <input type="submit" class="submit" value="投稿する">
          </div>
        </form>
      </div>

      <!-- classを2つ作ることで同じ要素を作る -->
      <?php

      while($row = $stmt -> fetch()){
        echo "<div class='kiji'>";
        echo "<h3>".$row['title']."</h3>";
        echo "<div class='comments'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
        echo "</div>";
      }     

      ?>


      <div class="right">
        <h2>人気の記事</h2>
            <p>PHPオススメ本</p>
            <p>PHP MyAdminの使い方</p>
            <p>いま人気のエディタTops</p>
            <p>HTMLの基礎</p>
        <h2>オススメリンク</h2>
            <p>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</p>
            <p>XAMPPのダウンロード</p>
            <p>Eclipseのダウンロード</p>
            <p>Braketsのダウンロード</p>
        <h2>カテゴリ</h2>
            <p>HTML</p>
            <p>PHP</p>
            <p>MySQL</p>
            <p>JavaScript</p>
      </div>


      
      </div>
    </div>
  </main>

  <footer>
    Copyright D.I.works D.I.blog is the one which procides A to Z about programming
    </footer>

</body>
</html>