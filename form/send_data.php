    <?php
	
// 	include 'config.php';

	$action = $_GET['action'];
	if($action == 'form_submission'){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$url = $_POST['url'];
		$domain = $_POST['domain'];
		$subject = $_POST['subject'];
		if(isset($_POST['optional'])){
			$optional = $_POST['optional'];
		}else{
			$optional = null;
		}
		// $return_table = insert_into_table($name, null, $email, $phone, $url, $domain, $subject, $conn, null, $message);
		$return_param = send_mail_to_admin($name, null, $email, $phone, $url, $domain, $subject, null, $message, 'info@bestsellerbookpublisher.com', $optional);
		echo json_encode(array('response' => $return_param, 'response_table' => $return_table));
	}

	// function insert_into_table($f_name, $l_name, $email, $number, $url, $domain, $subject, $conn, $services, $message){
	// 	$sql = "INSERT INTO leads (f_name, l_name, email, phone, url, domain, subject, services, message)
	// 			VALUES ('$f_name', '$l_name', '$email', '$number', '$url', '$domain', '$subject', '$services', '$message')";
	//  	if ($conn->query($sql)) {
	//  		$last_id = $conn->insert_id;
	//  		session_start();
	//  		$_SESSION["customer_email"] = $email;
	//  		$_SESSION["customer_phone"] = $number;
	//  		$_SESSION["customer_url"] = $url;
	//  		$_SESSION["customer_id"] = $last_id;
	//  		return $last_id;
	//  	}
	//  	return 0;
	// }

	function send_mail_to_admin($f_name, $l_name, $email, $number, $url, $domain, $subject, $services, $param_message, $admin_email, $optional){
		$to = $admin_email;
		$subject = $subject;
		$from = $email;
		$optional = json_encode($optional);
		// Always set content-type when sending HTML email
		$header = "From:abc@domain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

		// Compose a simple HTML email message
		$message = " First Name: $f_name \n Last Name: $l_name \n Email: $email \n Number: $number \n Url: $url \n Domain: $domain \n Service: $services \n Message: $param_message \n Optional: $optional";
		
		if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
	        $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	    }else{
	        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	    }
	    $url_components = parse_url($url);

	    if($url_components['host'] == 'localhost'){
	    	return true;
	    }
	    // Sending email
	    if(mail('info@bestsellerbookpublisher.com', $subject, $message)){
			return true;
		} else{
			return false;
		}
	}
?>