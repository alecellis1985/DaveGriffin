<?php

// $debug = true;
$debug = false;
//$random = rand();
$random = date("Y-m-d-H:i:s.u");
$to = "nick@studentservices.help";
$from_mail = "No Reply <noreply@" . $_SERVER['SERVER_NAME'] . ">";
$subject = "Contact Request from " . $_SERVER['SERVER_NAME'] . " " . $random;

$httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' . $from_mail . "\r\n";
$headers .= 'Cc: Van Leo Adrivan <adrivansoft@gmail.com>' . "\r\n";

$post = (filter_input_array(INPUT_GET) ? filter_input_array(INPUT_GET) : (filter_input_array(INPUT_POST) ? filter_input_array(INPUT_POST) : null));

if ($post) {
	if(!isset($post['isvalidtosend'])){
		$valid_form = true;
		$missing_field = '';
			
		$message = '<html><body>';
		$message .= "<table rules=\"all\" style=\"border-color: #666;\" cellpadding=\"10\">";
        
		$url = basename(__FILE__) . '?';
		$i = 1;
		
		foreach ($post as $k => $v) {
			$label = strtoupper(str_replace('_', ' ', $k));
			$j = $i++;
			
			switch($j){
				case 1:
					$background = " style='background: #eee;'";
					$url .= $k."=".$v;
					break;
				default:
					$background = "";
					$url .= "&".$k."=".$v;
					break;
			}
			
			$message .= "	<tr" . $background . ">";
			$message .= "		<td><strong>$label:</strong></td>";
			$message .= "		<td>$v</td>";
			$message .= "	</tr>";
			
			if(empty($v)){
				$valid_form = false;
				$missing_field .= $label . ", ";
			}
		}
		if($httpReferer){
			$message .= "	<tr" . $background . ">";
			$message .= "		<td><strong>NOTE:</strong></td>";
			$message .= "		<td>This email is sent from a contact form on " . str_replace("www.", "", $httpReferer) . "</td>";
			$message .= "	</tr>";
		}
		if($debug){
			$message .= "	<tr" . $background . ">";
			$message .= "		<td><strong>PARAMETERS:</strong></td>";
			$message .= "		<td>$url</td>";
			$message .= "	</tr>";
		}
		
		$message .= "</table>";
		$message .= "</body></html>";
		
		$redirect_url = $url;
		
		if($valid_form){
			if($debug){
				echo $message;
			}
			else{
				// send_email($to, $subject, urlencode($message), $from_mail, $redirect_url);
				
				$message = base64_encode(urlencode($message));
				
				?>
				<script>
					if (confirm("Before we send your enquiry, please prove you are human by pressing the OK button\n\n") == true) {
						window.location = "<?php echo basename(__FILE__); ?>?to=<?php echo $to; ?>&subject=<?php echo $subject; ?>&message=<?php echo $message; ?>?&isvalidtosend=Yes";
					} else {
						alert('Enquiry not sent! Unable to validate the user');
						window.history.back();
					}
				</script>
				<?php
				
			}
		}
		else {
			?>
			<script type="text/javascript">
				alert("ERROR: Form not sent!\r\nThe following fields are empty: <?php echo substr($missing_field, 0, -2);; ?>\r\nPlease make sure you fill all fields correctly");
				window.history.back();
			</script>
			<?php
		}

	}
	elseif(isset($post['isvalidtosend']) == "Yes") {

		mail($to,$subject,urldecode(base64_decode($_GET['message'])),$headers);
		?>
		<script type="text/javascript">
			alert("SUCCESS: Email sent!");
			window.history.back();
		</script>
		<?php
		
	}
	else {
		?>
		<script type="text/javascript">
			alert("ERROR: something went wrong along the way!");
			window.history.back();
		</script>
		<?php
	}
}
else {
	?>
	<script type="text/javascript">
		alert("ERROR: something went wrong along the way!");
		window.history.back();
	</script>
	<?php
}

?>