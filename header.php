<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">양영게시판</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/board.php">게시판</a>
    </li>
</ul>
<?php if(isset($_SESSION['user'])) { ?>
    <button class="btn btn-outline-primary mr-2">
        <?= $_SESSION['user']->name ?>님
    </button>
    <a class="btn btn-outline-danger" href="/logout.php">로그아웃</a>
<?php } else { ?>
    <form class="form-inline my-2" action="login_ok.php" method="post">
        <input class="form-control mr-2" name="uid" placeholder="아이디" type="text">
        <input class="form-control mr-2" name="password" placeholder="비밀번호" type="password">
        <button class="btn btn-outline-success m-2" type="submit">
            로그인
        </button>
        <a href="/register.php" class="btn btn-outline-primary my-2 my-sm-0">
            회원가입
        </a>
    </form>
<?php } ?>
</div>
</nav>