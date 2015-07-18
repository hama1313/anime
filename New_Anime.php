<html>
<html lang="ja">
	<head>
		<meta charset="utf8">
		<title>新作アニメレビュー_登録確認画面</title>
	</head>
<body>
<?php

try {
$dbh=new PDO('mysql:host=localhost;dbname=new_anime','hama','kasaasann');
} catch (PDOException $e){
var_dump($e->getMessage());
exit('データベースを選択できませんでした。');
}

$title    = $_REQUEST['title'];
$year     = $_REQUEST['year'];
$season   = $_REQUEST['season'];
$summary  = $_REQUEST['summary'];
$pv       = $_REQUEST['pv'];

$result = $dbh->query("INSERT INTO anime(title,year,season,summary,pv) VALUES('$title','$year','$season','$summary','$pv')");
if (!$result) {
  exit('データを登録できませんでした。');
}

$dbh=null;

?>

<table border="1">
  <tr>
    <td>タイトル</td><td><?php echo $_POST["title"] ?></td></tr>
    <td>放送年</td><td><?php echo $_POST["year"] ?></td></tr>
    <td>季節</td><td><?php echo $_POST["season"] ?></td></tr>
    <td>ストーリー</td><td><?php echo $_POST["summary"] ?></td></tr>
    <td>PV</td><td><?php echo $_POST["pv"] ?></td></tr>
  

  </tr>
</table>
</body>
</html>
