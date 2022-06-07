<?php

	$connect = mysqli_connect("localhost", "root", "root", "loya");

	if (!$connect) {
		die("Ошибка подключения к базе данных.");
	}

?>