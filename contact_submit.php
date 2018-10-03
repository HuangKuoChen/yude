<?php
	var_dump($_POST);
	mail("jimcorn615@gmail.com", "詢問信件", $_POST["question"], "From: customer@yude.com");
	header("index.php");
?>