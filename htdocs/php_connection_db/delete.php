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
try {
    $db = new PDO('mysql:dbname=sample; host=localhost; charset=utf8', 'root', '');
    $id = $_REQUEST['id'];
    $delete = $db->prepare('DELETE FROM user WHERE id=?');
    $delete->execute(array($id));
    if ($delete){
        header('Location: ./admin.php');
        exit;
    }
    $db = null;
    $delete = null;
} catch(PDOException $e) {
    echo '接続エラー:' . $e->getMessage();
}
?>
</body>
</html>