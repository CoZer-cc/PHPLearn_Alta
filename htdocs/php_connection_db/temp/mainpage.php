<!DOCTYPE html>
<html lang="ja">
<head>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2 class="text-center">一言掲示板・一覧画面_練習用_張</h2>
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="btn btn-info">
          <a href="/php_connection_db/form.php" style="color:black">登録</a>
        </div>
        <div class="btn btn-info">
          <a href="/php_connection_db/admin.php" style="color:black">管理ページ</a>
        </div>
        <table class="table table-hover">
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
</body>
</html>
