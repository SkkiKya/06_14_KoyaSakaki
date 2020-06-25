<?php
$db = 'mysql';
$dbname = 'gs_d06_db14';
$chart = 'utf8';
$port = '3308';
$host = 'localhost';

// DB接続の設定
$dbn = "$db:dbname=$dbname;charset=$chart;port=$port;host=$host";
$user = 'root';
$pwd = '';
// DB接続を確認
try {
  // ここでDB接続処理を実行する
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  // DB接続に失敗した場合はここでエラーを出力し，以降の処理を中止する
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}
 