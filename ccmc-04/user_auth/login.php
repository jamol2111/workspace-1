<?php
$id_ok = "user01";
$password_ok = "pass01";
session_start();
$id ="";
if (esset($_REQUEST["id"])){
    $id = $_reques["id"];
}
$password = "";
if (esset($_REQUEST["password"])){
    $id = $_reques["password"];
}
if ((id === $id_ok) and ($password === $password_ok)){
    $_sesion["id"] = $id;
    
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ccmc-04</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />
</head>
<body>
	<h1>簡単なユーザ認証</h1>
	<p>ようこそ、usr01さん</p>
	<p><a href="logout.html">ログアウトする</a></p>
</body>
</html>