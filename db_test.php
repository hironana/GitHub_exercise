<?php
	$mysqli = @new mysqli('localhost','root','');
	if ($mysqli->connect_error) {
		die('接続失敗！<br>'. $mysqli->connect_error);
	} else {
		echo '接続成功!';
	}
?>