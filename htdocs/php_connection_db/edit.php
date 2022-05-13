<?php
define('PASSWORD', '1234');
$error_message = array();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>一言掲示板・一覧画面_edit_page</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2>一言掲示板・一覧画面_edit_page</h2>
    <?php

            if( !empty($error_message) ): ?>
                <ul class="error_message">
                    <?php foreach( $error_message as $value ): ?>
                        <li>・<?php echo $value; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

    <?php if(empty($_SESSION['admin_login']) || $_SESSION['admin_login'] === true){
        //go to login page
        header("Location: ./admin.php");
        exit;
    }   
    ?>
        
    <div class="panel panel-default">
      <div class="panel-body">
        <table class="table">
          <thead>
            <tr>
              <th>名前</th>
              <th>ふりがな</th>
              <th>アドレス</th>
              <th>コメント</th>
              <th>投稿時間</th>
            </tr>
          </thead>
          <tbody>
            <?php require_once "db.php"; ?>
              <tr>
                <?php
                try {
                    // データベースの接続
                    $db = new PDO($dsn, $user, $password);
                    // sql文をデーターベースからuserテーブルの中身を全部取得する
                    $sql = $db->query("SELECT * FROM user ORDER BY create_time DESC");
                    
                  } catch (PDOException $e) {
                    echo '接続失敗';
                    var_dump($e);
                    $error_message[] = $e->getMessage();
                    exit;
                  }?>
                  <?php foreach ($sql as $key => $val) ;?>
                
              <tr>
            <form action = "delete.php" method="POST">
                <input type="hidden" name = "id" value=<?php echo $val ['id'];?>> 
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['furi']; ?></td>
                <td><?php echo $val['address']; ?></td>
                <td><?php echo $val['comment']; ?></td>
                <td><?php echo $val['create_time']; ?></td>
                <td><button id="button1" >削除</button></td>
            </form>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>