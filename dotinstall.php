<?php

try {
$dbh=new PDO('mysql:host=localhost;dbname=personal','hama','kasaasann');
} catch (PDOException $e){
var_dump($e->getMessage());
exit;
}

$stmt=$dbh->prepare("insert into personal_info(id,name,old)values(?,?,?)");
$stmt->execute(array("N","M","25"));

echo "dane!";
/*$sql = "select * from personal_info";
$stmt = $dbh->query($sql);
foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $user){
	var_dump($user['name']);
}
echo $dbh->query("select count(*) from personal_info")->fetchColumn()."records found";
*/
$dbh=null;

