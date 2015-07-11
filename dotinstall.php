<?php

try {
$dbh=new PDO('mysql:host=localhost;dbname=personal','hama','kasaasann');
} catch (PDOException $e){
var_dump($e->getMessage());
exit;
}

$sql = "select * from personal_info";
$stmt = $dbh->query($sql);
foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $user){
	var_dump($user['name']);
}
echo $dbh->query("select count(*) from personal_info")->fetchColumn()."records found";

$dbh=null;

