<?php
require_once "db.php";
// 初期値は保存をかけないので決め打ち

$mode = 'form';
// $errors = [];
$mode = $_REQUEST['mode'];
if($mode === 'add') {
  try {
    // formからのrequestで各変数に格納
    $name = $_REQUEST['name'];
    $furi = $_REQUEST['furi'];
    $address = $_REQUEST['address'];
    $comment = $_REQUEST['comment'];
    date_default_timezone_set("Asia/Tokyo");//国指定
    $create_time = date("Y-m-d h:i:s");//時間追加
    //$create_time = $_REQUEST['create_time'];
/*     if (strlen($name) != 0 and strlen($furi) != 0 and strlen($address) != 0 and strlen($comment) != 0){
          // 上記で作成した物に値を挿入する

          //var_dump(checkname($name));exit;
            $params = array(':name' => $name, ':furi' => $furi, ':address' => $address, ':comment' => $comment, 'create_time' => $create_time);
            // 保存をする
            $stmt->execute($params);
            include './index.php';
            exit();
  }else{ */
          //入力エラーの提示、一覧へ移動
          $errors = [];
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
          //var_dump(checkname($name));exit;
          // 空のINSERTを作成
          $sql = "INSERT INTO user (name, furi, address, comment, create_time) VALUES (:name, :furi, :address, :comment, :create_time)";
          $stmt = $db->prepare($sql);
          $params = array(':name' => $name, ':furi' => $furi, ':address' => $address, ':comment' => $comment, 'create_time' => $create_time);
          // 保存をする
          $stmt->execute($params);
          $stmt = null;
          include './index.php';
          exit();
        
    }else{
      include './temp/forms.php';
      exit();
    }
    $db = null;

  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
  }
} else {
  include './temp/forms.php';
  exit();
}

?>