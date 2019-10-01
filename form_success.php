<?php 

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		
		$to = "secikova.petra@gmail.com";
	
		 // Odeslání emailu
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: Petra Sečíková <secikova.petra@gmail.com>' . "\r\n";
		
		$msg = "<i>Zprávu zanechal(a)  '" . $name . "' (" . $email . "): </i><br><br>" . nl2br($message);
		
		if (mail($to, "Nová přihláška", $msg, $headers)) {
			header("location: /", true);
		} else {
			header("location: /", true);
		}
	}


?>
