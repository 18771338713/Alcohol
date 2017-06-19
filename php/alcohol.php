<?php
error_reporting(0);
$conn = mysql_connect('localhost', 'root', 'root') or dir('Connect error');
mysql_select_db('alcohol', $conn) or die('DB error');
$sql = "select * from mvc";  
mysql_query('set names utf8');
$query = mysql_query($sql);

$get = $_GET['act'];
switch ($get) {
  case 'list':
    while($res = mysql_fetch_assoc($query)) {
      $arr[] = $res;
    }
    echo json_encode($arr);
    break;
  case 'add':
    $name = $_GET['name'];
    $mailbox = $_GET['mailbox'];
    $phone = $_GET['phone'];
    $content = $_GET['content'];
    $sql = "insert into mvc (name,mailbox,phone,content) values ('{$name}','{$mailbox}',{$phone},'{$content}')";
    mysql_query($sql);
    break;
  case 'del':
    $id = $_GET['id'];
    $sql = "delete from mvc where id={$id}";
    mysql_query($sql);
    break;
}



















?>

