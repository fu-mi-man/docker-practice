<?php
echo 'Hello World!!!' . PHP_EOL;

$dsn = 'mysql:dbname=db;host=mysql';
$user = 'user';
$pass = 'pass';
try {
  $dbh = new PDO($dsn, $user, $pass);
  $stmt = $dbh->prepare("SELECT * FROM users");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo $e->getMessage();
}

foreach ($result as $v) {
  echo $v['username'] . PHP_EOL;
  echo $v['email'] . PHP_EOL;
}
