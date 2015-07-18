<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>サンプル</title>
	</head>
<body>
<?php

try {
$dbh=new PDO('mysql:host=localhost;dbname=new_anime','hama','kasaasann');
} catch (PDOException $e){
var_dump($e->getMessage());
exit('データベースを選択できませんでした。');
}

$stmt = $dbh->query('SELECT * FROM anime');/*WHERE id >= 1 AND id <= 10*/
if (!$stmt) {
  $info = $dbh->errorInfo();

  exit($info[2]);
}

while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo '<p>' . $data['id'] . ':' . $data['title'] .':' . $data['year'] . ':' . $data['season'] . ':' . $data['summary'] . ':' . $data['pv'] . "</p>\n";
}

$dbh = null;
?>