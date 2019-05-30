<!DOCTYPE html>
<html lang="ko">
<?php require_once "head.php"; ?>
<body>
	<?php require_once "header.php"; ?>

	<div class="container">
		<div class="row mt-5"></div>
		<h1>회원가입</h1>
		<form action="register_ok.php" method="post">
			<div class="form-group">
				<label for="email">이메일 입력</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="이메일 입력">
				<small id="emailHelp" class="form-text text-muted">이메일은 아이디로 사용하게 됩니다.</small>
			</div>
						<div class="form-group">
				<label for="name">회원이름</label>
				<input type="name" class="form-control" id="name" name="name" placeholder="이름 입력">
			</div>
			<div class="form-group">
				<label for="password">비밀번호 입력</label>
				<input type="password" class="form-control" id="password" name="password1" placeholder="비밀번호">
			</div>
			<div class="form-group">
				<label for="password2">비밀번호 확인</label>
				<input type="password" class="form-control" id="password2" name="password2" placeholder="비밀번호를 한번더 입력하세요">
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>