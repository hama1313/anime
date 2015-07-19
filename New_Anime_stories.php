<html>
<html lang="ja">
	<head>
		<meta charset="utf8">
		<title>新作アニメレビュー_ストーリー登録確認画面</title>
	</head>
<body>

<?php
/*
try {
$dbh=new PDO('mysql:host=localhost;dbname=new_anime','hama','kasaasann');
} catch (PDOException $e){
var_dump($e->getMessage());
exit('データベースを選択できませんでした。');
}

$title    = $_REQUEST['title'];
$summary  = $_REQUEST['summary'];
$preview  = $_REQUEST['preview'];

$result = $dbh->query("INSERT INTO anime(title,summary,preview) VALUES('$title','$summary','$preview')");
if (!$result) {
  exit('データを登録できませんでした。');
}

$dbh=null;
*/
?>

<table border="1">
  <tr>
    <td>ストーリータイトル</td><td><?php echo $_POST["title"] ?></td></tr>
    <td>あらすじ</td><td><?php echo $_POST["summary"] ?></td></tr>
    <td>予告</td><td><?php echo $_POST["pv"] ?></td></tr>
  </tr>
</table>
</body>
</html>
