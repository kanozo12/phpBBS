<?php
require_once("lib.php");

$uid = $_POST['uid'];
$password = $_POST['password'];

$sql = "SELECT * FROM `phpUsers` 
		WHERE `email` = ? AND `password` = PASSWORD(?)";
$q = $con->prepare($sql);
$q->execute([$uid, $password]);

$user = $q->fetch();

if (!$user){
	msgAndBack("아이디 또는 비밀번호가 올바르지 않습니다.");
	exit;
}

$_SESSION['user'] = $user;

msgAndGo("성공적으로 로그인되었습니다.", "/");