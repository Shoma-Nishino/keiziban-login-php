<?php

$dsn = 'mysql:dbname=mini_bbs;host=localhost;charset=utf8';
$user = 'root';
$password = 'root';

try{

    $db = new PDO($dsn, $user, $password);
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*$sql = "";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    接続だけを確認する場合、以上3行は不要でした。
    「Connection failed:SQLSTATE[42000]: Syntax error or access violation: 1065 Query was empty」というエラーが出ますので削除してお試しください。*/
    // echo '接続に成功しています';

}catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
}