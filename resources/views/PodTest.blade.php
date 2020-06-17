<html>
  <head><title>PHP TEST</title></head>
  <body>
    <?php
      $dsn = 'mysql:dbname=sampledb;host=localhost';
      $user = 'root';
      $password = '';

try{
    $dbh = new PDO($dsn, $user, $password);

    print('接続に成功しました。<br>');

    $dbh->query('SET NAMES sjis');

    $sql = 'select * from book';
    foreach ($dbh->query($sql) as $row) {
        print($row['id']);
        print($row['name'].'<br>');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$dbh = null;

?>

  </body>
</html>