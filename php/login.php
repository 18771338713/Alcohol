 <?php

error_reporting(0);
$conn = mysql_connect('localhost', 'root', 'root') or dir('Connect error');
mysql_select_db('alcohol', $conn) or die('DB error');
$sql = "select * from login";  
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
    $password = $_GET['password'];
    $sql = "insert into login (name,password) values ('{$name}','{$password}')";
    mysql_query($sql);
    break;
}
?>



