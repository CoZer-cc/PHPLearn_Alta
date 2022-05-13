<?php
require_once "db.php";

  try {
    // データベースの接続
    $db = new PDO($dsn, $user, $password);
    // sql文をデーターベースからuserテーブルの中身を全部取得する
    $sql = $db->query("SELECT * FROM user ORDER BY create_time DESC");
    
    include './temp/test.php';
    exit();
  } catch (PDOException $e) {
    echo '接続失敗';
    var_dump($e);
    exit;
  }
?>
