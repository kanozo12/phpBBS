<?php 
	require_once("lib.php");

	unset($_SESSION['user']);

	msgAndGo("안녕히 가세요", "/");