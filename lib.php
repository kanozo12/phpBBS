<?php
	session_start();
	$options = [
		\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
		\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING
	];

	$con = new \PDO("mysql:host=gondr.asuscomm.com;dbname=kanozo12;charset=utf8",
		"kanozo12", "1234", $options);


	function msgAndGo($msg, $target){
		echo "<script>";
		echo "alert('$msg');";
		echo "location.href='$target'";
		echo "</script>";
	}

	function msgAndBack($msg){
		echo "<script>";
		echo "alert('$msg');";
		echo "history.back();";
		echo "</script>";	
	}