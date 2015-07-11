<?php

try {
$dbh=new PDO('mysql:host=localhost;dbname=personal','hama','kasaasann');
} catch (PDOException $e){
var_dump($e->getMessage());
exit;
}

echo "success!";

$dbh=null;
