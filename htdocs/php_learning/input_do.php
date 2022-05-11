<?php require('dbconnect.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>なおやん掲示板</title>
</head>
<body>
    <?php
    $message = $_POST['message'];
    if (strlen($message) >= 1 && strlen($message) <= 200) {
        $statement = $db->prepare('INSERT INTO posts SET message=?');
        $statement->execute(array($_POST['message']));
        echo '投稿を送信しました';
    } else {
        echo '投稿エラー: 200文字以内で入力してください';
    }
    ?>
    <a href="index.php">投稿一覧</a>
</body>
</html>