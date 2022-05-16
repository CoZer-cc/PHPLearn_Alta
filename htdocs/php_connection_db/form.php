<?php
require_once "db.php";
date_default_timezone_set("Asia/Tokyo");//国指定

// 初期値保存
$errors = [];
$mode = 'form';
$mode = $_REQUEST['mode'];
if($mode === 'add') {
  try {
    // formからのrequestで各変数に格納
    $name = $_REQUEST['name'];
    $furi = $_REQUEST['furi'];
    $address = $_REQUEST['address'];
    $comment = $_REQUEST['comment'];
    $create_time = date("Y-m-d h:i:s");//時間追加

          //入力エラーの提示
          if(empty($_POST['name'])){
            $errors[] .= "名前を入力してください";
        }
          if(empty($_POST['furi'])){
            $errors[] .= "ふりがなを入力してください";
        }
          if(empty($_POST['address'])){
            $errors[] .= "メールアドレスを入力してください";
        }
          if(empty($_POST['comment'])){
            $errors[] .= "投稿内容を入力してください";
        }

    if (!$errors){
      // データベースの接続 第四引数にエラーが出るように配列で渡す
          $db = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false,));
          // 上記で作成した物に値を挿入する
          // 空のINSERTを作成
          $sql = "INSERT INTO user (name, furi, address, comment, create_time) VALUES (:name, :furi, :address, :comment, :create_time)";
          $stmt = $db->prepare($sql);
          $params = array(':name' => $name, ':furi' => $furi, ':address' => $address, ':comment' => $comment, 'create_time' => $create_time);
          // 保存をする
          $stmt->execute($params);
          $stmt = null;
          header('Location: ./index.php');
          exit();
        
    }else{
      include './temp/loginpage.php';
      exit();
    }
    $db = null;

  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $errors[] = $e->getMessage());
  }
} else {
  include './temp/loginpage.php';
  exit();
}

?>