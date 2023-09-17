<?php  /* PDO文の作成 */

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=client; host=localhost;","root","nako14");
$stmt = $pdo -> query("select * from user_info");



?>
