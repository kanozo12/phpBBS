<?php
require_once("lib.php");

$email = $_POST['email'];
$name = $_POST['name'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if($email == "" || $name == "" || $password1 == "") {
	msgAndBack("필수 값이 누락되었습니다.");
	exit;
}

if($password1 != $password2) {
	msgAndBack("비밀번호와 비밀번호 확인이 다릅니다.");
	exit;
}

$sql = "SELECT * FROM phpUsers WHERE email = ?";
$q = $con->prepare($sql);
$q->execute([$email]);

$arr = $q->fetchAll();
if(count($arr) > 0) {
	msgAndBack("중복된 아이디가 있습니다.");
	exit;
}

$sql = "INSERT INTO phpUsers (email, name, password) VALUES(?, ?, PASSWORD(?))"; 
$q = $con->prepare($sql);
$q->execute([$email, $name, $password1]);

msgAndBack("성공적으로 가입되었습니다.", "/");
