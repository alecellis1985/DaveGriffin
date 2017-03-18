<?php

error_reporting( 0 );

// $debug = true;
$debug = false;

$random = date("Y-m-d-H:i:s");
$to = "nick@studentservices.help";
$website = str_replace("www.", "", $_SERVER['SERVER_NAME']);
$from_mail = "No Reply <noreply@" . $website . ">";
$subject = "Contact Request from " . $website . " " . $random;

//reCaptcha
$reCaptcha = false;
$reCaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$reCaptcha_secret = '6Lc3UygTAAAAAJ3Olsgm46E_WoDAFwda7qFq8_KN';

$httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "n/a";

$post = (filter_input_array(INPUT_GET) ? filter_input_array(INPUT_GET) : (filter_input_array(INPUT_POST) ? filter_input_array(INPUT_POST) : null));

//$email = ($post['email'] ? $post['email'] : ($post['e-mail'] ? $post['e-mail'] : ($post['mail'] ? $post['mail'] : false)));

$email = (array_key_exists('email', $post)  ? $post['email'] : (array_key_exists('mail', $post) ? $post['mail'] : (array_key_exists('e-mail', $post) ? $post['e-mail'] : false ) ));

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' . $from_mail . "\r\n";
$headers .= 'Cc: Van Leo Adrivan <adrivansoft@gmail.com>' . "\r\n";
if($email){
	$headers .= 'Reply-To: ' . $email . "\r\n";
}

if ($post) {
	
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
        
        $key[] = $k;
        $value[] = "'" . $v . "'";
        $key_value[] = $k . "='" . $v . "'";
    }

    $insert_keys = implode(", ", $key);
    $insert_values = implode(", ", $value);
    $select_keys_values = implode(" AND ", $key_value);
    $update_keys_values = implode(", ", $key_value);
    
    
	if($httpReferer){
		$message .= "	<tr" . $background . ">";
		$message .= "		<td><strong>NOTE:</strong></td>";
		$message .= "		<td>This email is sent from a contact form on " . $httpReferer . "</td>";
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
			
			if($reCaptcha){
				$response = file_get_contents($reCaptcha_url."?secret=".$reCaptcha_secret."&response=".$post['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
				$data = json_decode($response);
				
				if(isset($data->success) AND $data->success==true){
					//redirect to thank you page
					
					mail($to,$subject,$message,$headers);
					header('location: thank-you.php');
				} else {
					//show error message
					?>
					<script type="text/javascript">
						alert("ERROR: Form not sent!\r\nCaptcha is incorrect");
						window.history.back();
					</script>
					<?php
				}
			}
			else {
                
                if($post['source']){
                    
                    require_once('MySQL.php');
                    
                    StartMyConnection($mysql_host, $mysql_user, $mysql_pass, $mysql_data);
                    
                    $sql = "UPDATE track SET $update_keys_values WHERE session_id='" . $post['session_id'] . "'";
                    
                    $query = mysqli_query($conn, $sql);

                    if(!$query) {
                        echo "Line " . __LINE__ ."\r\n<br />";
                        echo "Error: " . mysqli_error($conn) ."\r\n<br />";
                        echo $sql ."\r\n<br />";
                        exit();
                    }
                    
                    CloseMyConnection();
                    
                    /*
                    $name = explode(" ", $post["name"]);
                    
                    $first_name = explode(" ", $post["name"]);
                    array_pop($first_name);
                    $first_name = count($name) >= 2 ? implode(" ", $first_name) : $post["name"];
                    $last_name = count($name) == 1 ? "n/a" : end($name);
                    
                    $phone_number = $post["phone"];
                    $email = $post["email"];
                    
                    $url = "https://teletree.ytel.com/x5/api/non_agent.php?source=Internet&user=101&pass=PnGdr97MJx14VwR&function=add_lead&phone_number=$phone_number&campaign_dnc_check=Y&campaign_id=1000&list_id=1010&duplicate_check=DUPLIST&hopper_priority=99&add_to_hopper=Y&first_name=$first_name&last_name=$last_name&city=na&state=na&postal_code=na&email=$email&vendor_lead_code=na&comments=na&custom_fields=Y";
                    
                    $data = file_get_contents($url);
                    
                    if($data){
                        if(!mail($to,$subject,$message,$headers)){
                            die('<h1>ERROR: NOT SENT</h1><p>Please try again later!</p>');
                        }
                        header('location: thank-you.php');
                    } else {
                        die('<h1>ERROR: NOT SENT</h1><p>Please try again later!</p>');
                        print_r($data);
                    }
					*/
                    
                    if(!mail($to,$subject,$message,$headers)){
                        die('<h1>ERROR: NOT SENT</h1><p>Please try again later!</p>');
                    } else {
                        if($post['source'] == 'processor.php'){
                            header('location: thank-you.php');
                        } elseif($post['source'] == 'processor-p.php'){
                            header('location: thank-you-p.php');
                        } else {
                            die("<h1>ERROR: unknown source</h1>");
                        }
                        
                    }
                    
                } else {
                    if(!mail($to,$subject,$message,$headers)){
                        die('<h1>ERROR: NOT SENT</h1><p>Please try again later!</p>');
                    } else {
                        header('location: thank-you.php');
                    }
                }
			}
		}
	}
	else {
		?>
		<script type="text/javascript">
			alert("ERROR: Form not sent!\r\nThe following fields are empty: <?php echo substr($missing_field, 0, -2); ?>\r\nPlease make sure you fill all fields correctly");
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

function url_get_contents ($url) {
    if (function_exists('curl_exec')){ 
        $conn = curl_init($url);
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($conn, CURLOPT_FRESH_CONNECT,  true);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $url_get_contents_data = (curl_exec($conn));
        curl_close($conn);
    }elseif(function_exists('file_get_contents')){
        $url_get_contents_data = file_get_contents($url);
    }elseif(function_exists('fopen') && function_exists('stream_get_contents')){
        $handle = fopen ($url, "r");
        $url_get_contents_data = stream_get_contents($handle);
    }else{
        $url_get_contents_data = false;
    }
    
    return $url_get_contents_data;
} 
?>