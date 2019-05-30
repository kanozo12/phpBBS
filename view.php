<?php
	require "lib.php";
	$id = $_GET['id'];

	$sql = "SELECT * FROM phpBoards WHERE id = ?";
	$q = $con->prepare($sql);
	$q->execute([$id]);

	$data = $q->fetch();

	//var_dump($data);
?>
<!DOCTYPE html>
<html lang="ko">
<?php require_once "head.php"; ?>
<body>
	<div class="container">
		<h1><?= $data->id ?> 번 글보기</h1>
		<div class="row">
			<div class="col-10 offset-1">
				<div class="card text">
					<div class="card-header">
						<?= $data->title ?> ( <?= $data->writer ?> )
					</div>
					<div class="card-body">
						<?= $data->content ?>
					</div>
					<div class="card-footer text-right">
						<a href="/board.php" class="btn btn-primary">목록보기</a>
						<a href="/modify.php" class="btn btn-warning">수정</a>
						<a href="/delete.php" class="btn btn-danger">삭제</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>