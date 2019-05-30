<?php

	require_once "lib.php";

	$sql = "SELECT id, title, writer FROM phpBoards ORDER BY id DESC LIMIT 0, 10";
	$q = $con->prepare($sql);
	$q->execute();
	$list = $q->fetchAll();
?>
<!DOCTYPE html>
<html lang="ko">
<?php require_once "head.php"; ?>
<body>
	<div class="container">
		<h1>게시판</h1>
		<div class="row mt-3">
			<div class="col-10 offset-1">
				<table class="table table-striped">
					<tr>
						<th>글번호</th>
						<th width="60%">글내용</th>
						<th>글쓴이</th>
					</tr>
					
					<?php foreach($list as $item) { ?>
						<tr>
							<td><?= $item->id ?></td>
							<td><a href="/view.php?id=<?= $item->id ?>" ><?= $item->title ?></a></td>
							<td><?= $item->writer ?></td>
						</tr>
					<?php } ?>

				</table>
			</div>
		</div> <!-- End Of row mt-3 -->
	
		<div class="row">
			<div class="col-10 offset-1 text-right">
				<a href="/write.php" class="btn btn-info">글쓰기</a>
			</div> 
		</div><!-- End Of row -->
	</div>
</body>
</html>