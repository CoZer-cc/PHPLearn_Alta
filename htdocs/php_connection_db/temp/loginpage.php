<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2>新規登録</h2>
    <div class="panel panel-default">
      <div class="panel-heading">フォーム1</div>
      <div class="panel-body">
        <form action="form.php" method="post">
          <input type="hidden" name="mode" value="add">
          <div class="form-group">
            <label class="control-label">名前</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <label class="control-label">ふりがな</label>
            <input type="text" name="furi" class="form-control" placeholder="ふりがな">
          </div>
          <div class="form-group">
            <label class="control-label">アドレス</label>
            <input type="text" name="address" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="control-label">コメント</label>
            <input type="text" name="comment" class="form-control" placeholder="コメント">
          </div>
          <div>
            <button class="btn-primary">登録</button>
            <a href="./index.php" class="btn-secondary">戻る</a>
          </div>
        <div>
          <?php if (!empty($errors)):?>
            <?php foreach($errors as $error){ ?>
              <p class="alert alert-danger"> <?php echo $error.'<br>'; ?></p>
            <?php } ?>
        <?php endif; ?>
        </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
