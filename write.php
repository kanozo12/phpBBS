<!DOCTYPE html>
<html lang="ko">
<?php require_once "head.php"; ?>
<body>
	<div class="container">
		<h1>글쓰기</h1>
		<div class="row">
			<div class="col-10 offset-1">
				<form action="/write_ok.php" method="post">
					<div class="form-group row">
						<label for="writer" class="col-sm-2 col-form-label">
							글쓴이
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="writer" name="writer">
						</div>
					</div>
					<div class="form-group row">
						<label for="title" class="col-sm-2 col-form-label">
							제목
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="title" name="title">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="content" class="col-sm-2 col-form-label">
							글내용
						</label>
						<div class="col-sm-10">
							<textarea rows="10" class="form-control" name="content" id="content"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-12 text-right">
							<button type="submit" class="btn btn-success">전송</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</body>
</html>