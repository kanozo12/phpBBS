<?php
	require "lib.php";

	$sql = "SELECT * FROM boards";

	$q = $con->prepare($sql);
	$q->execute();

	$list = $q->fetchAll();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<th>글번호</th>
			<th>제목</th>
			<th>글쓴이</th>
		</tr>
		<?php 
			foreach($list as $value){
				echo "<tr>
						<td>". $value->id ."</td>
						<td>" . $value->title . "</td>
						<td>" . $value->writer ."</td>
					</tr>";
			}
		?>
	</table>
	<a href="write.php">글쓰기</a>
</body>
</html>