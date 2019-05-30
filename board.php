<?php
	require_once "lib.php";

	$page = 1;
	if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] >= 1){
		$page = $_GET['page'];
	}
	$start = ($page - 1) * 10;

	$sql = "SELECT id, title, name FROM phpUsers AS u, phpBoards AS b WHERE u.email = b.writer ORDER BY id DESC LIMIT $start, 10";
	$q = $con->prepare($sql);
	$q->execute();
	$list = $q->fetchAll();

?>
<!DOCTYPE html>
<html lang="ko">
<?php require_once "head.php"; ?>
<body>
	<?php require_once "header.php"; ?>
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
							<td><?= $item->name ?></td>
						</tr>
					<?php } ?>

				</table>
			</div>
		</div> <!-- end of row mt-3 -->
		<?php if(isset($_SESSION['user'])) { ?>
		<div class="row">
			<div class="col-10 offset-1 text-right">
				<a href="/write.php" class="btn btn-info">글쓰기</a>
			</div>
		</div><!-- end of row -->
		<?php } ?>
	</div>
</body>
</html>