<?php
//phpinfo();
try {
	$pdo = new PDO("mysql:host=localhost;dbname=project", "root", "");
    //$pdo = new PDO("mydb", "root", "");
}catch(PDOException $e) {
	echo "数据库连接失败：".$e->getMessage();
	exit;
}
var_dump($pdo);
echo "创建PDO对象成功!";
