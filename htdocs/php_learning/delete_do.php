<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$id = $_REQUEST['id'];
$delete = $db->prepare('DELETE FROM posts WHERE id=?');
$delete->execute(array($id));
echo '削除しました'
?>
<a href="index.php">投稿一覧</a>
</body>
</html>