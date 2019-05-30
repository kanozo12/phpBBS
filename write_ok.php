<?php
	require "lib.php";

	$title = $_POST['title'];
	$writer = $_POST['writer'];
	$content = $_POST['content'];

	if($title == "" || $writer == "" || $content == "") {
		msgAndBack("필수 입력사항이 빈칸입니다.");
		exit;
	}


	$sql = "INSERT INTO phpBoards (title, writer, content) VALUES(?, ?, ?)";

	$q = $con->prepare($sql);
	$q->execute([$title, $writer, $content]);

	if($q->rowCount() == 1) {
		msgAndGo("성공적으로 글이 작성되었습니다.", "/board.php");
	}else{
		echo "<h1>글작성 실패</h1>";
		echo "<a href='/write.php'>다시 작성하기</a>";
	}

	function msgAndBack($msg) {
		echo "<script>";
		echo "alert('$msg');";
		echo "history.back();";
		echo "</script>";
	} 
?>