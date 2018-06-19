<?php
	$admin_email = 'spikirard@gmail.com';
	$name = $_POST['field1'];
	$email = $_POST['field2'];
	$comment = $_POST['field3'];
			
	mail($admin_email, 'Contact', $comment, 'From: ' .$email);
	
	Header('Location: index.html');
?>