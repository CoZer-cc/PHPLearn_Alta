<?php
try {
    $db = new PDO('mysql:dbname=original_bbs; host=localhost; charset=utf8', 'root', '');
} catch(PDOException $e) {
    echo '接続エラー:' . $e->getMessage();
}
?>