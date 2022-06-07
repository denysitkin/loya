<?php

	$email = $_POST["email"];
	$location = $_POST["location"];
	$body = "От: ".$_POST["firstname"].". Номер телефона: ".$_POST["phone"].". Сообщение: ".$_POST["message"];
	
	mail('loya@gmail.com', '', $body, 'From: '.$email);

	header('Location: ../'.$location);

?>