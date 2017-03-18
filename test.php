<?php
	if(isset($_POST['contactForm'])){
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$secret = '6Lc3UygTAAAAAJ3Olsgm46E_WoDAFwda7qFq8_KN';
		
		$response = file_get_contents($url."?secret=".$secret."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
		$data = json_decode($response);
		
		if(isset($data->success) AND $data->success==true){
			//redirect to thank you page
			// header('location: thank-you.php');
			echo "success";
			echo "<textarea style='width: 100%;height: 100vh;'>";
			print_r($response);
			echo "</textarea>";
			die();
		} else {
			//show error message
			echo "failed";
			echo "<textarea style='width: 100%;height: 100vh;'>";
			print_r($response);
			echo "</textarea>";
			die();
		}
	}
?>
<!doctype html>
<html>
	<head>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
		<form method="post">
			<input type="text" name="name" placeholder="your name" />
			<div class="g-recaptcha" data-sitekey="6Lc3UygTAAAAAHUowLLwW5e-_9aaZDpIxVYwnddh"></div>
			<input name="contactForm" type="submit" />
		</form>
	</body>
</html>
