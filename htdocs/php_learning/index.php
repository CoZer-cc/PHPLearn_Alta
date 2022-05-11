<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>なおやん掲示板</title>
</head>
<body>
<header>
    <h1>なおやん掲示板</h1>
    <a class="post" href="input.html"><strong>新規投稿</strong></a>
</header>
<div class="container">
    <?php
    $messages = $db->query('SELECT * FROM posts');
    while ($message = $messages->fetch()): ?>
        <?php print($message['message']); ?>
        <br>
        <?php print('投稿ID:' . $message['id']); ?>
        <?php print('投稿日時：' . $message['modified']); ?>
        <a href="delete.php?id=<?php print($message['id']); ?>">削除</a>
        <br>
        <hr>
    <?php endwhile; ?>
</div>
</body>
</html>