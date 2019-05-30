<?php

$options = [
	\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
	\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING
];

$con = new \PDO("mysql:host=gondr.asuscomm.com;dbname=kanozo12;charset=utf8",
	"kanozo12", "1234");

$sql = "INSERT INTO phpBoards (title, writer, content) VALUES (?, ?, ?)";

$q = $con->prepare($sql);
$q->execute( ['제목입니다', 'gondr', '글 내용입니다.']);

echo "성공적으로 글 작성되었습니다.";

                                