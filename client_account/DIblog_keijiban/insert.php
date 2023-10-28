<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=client; host=localhost;","root","nako14");

$pdo -> exec("insert into keijiban(handlename,title,comments) values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

// リダイレクト
header("Location:http://localhost/client_account/DIblog_keijiban/index.php"); 


?>