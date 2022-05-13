<!DOCTYPE html>
<html lang="ja">
<head>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2>一言掲示板・一覧画面_練習用_張</h2>
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="linkWrap btn btn-primary">
          <a href="/php_connection_db/form.php" style="color:white">登録</a>
        </div>
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
            <?php foreach ($sql as $key => $val) { ?>
              <tr>
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['furi']; ?></td>
                <td><?php echo $val['address']; ?></td>
                <td><?php echo $val['comment']; ?></td>
                <td><?php echo $val['create_time']; ?></td>
            </form>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <!-- <div>
      <p><?php echo $val['name']; ?></p>
      <p><?php echo $val['furi']; ?></p>
      <p><?php echo $val['address']; ?></p>
      <p><?php echo $val['comment']; ?></p>
    </div> -->
</body>
</html>
