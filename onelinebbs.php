<?php

 if(isset($_POST) && !empty($_POST)){

$dsn='mysql:dbname=online_bbs;host=localhost';
$user='root';
$password='';
$dbh= new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$sql='SELECT*FROM '



 }

?>
 <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>セブ掲示版</title>

</head>
<body>
    <form action="bbs.php" method="post">
      <input type="text" name="nickname" placeholder="nickname" required><br />
      <textarea type="text" name="comment" placeholder="comment" required></textarea>
      <br /><button type="submit" >つぶやく</button>
    </form>

</body>
</html>
