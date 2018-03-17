<?php
 if(isset($_POST['submit']))
 {
 	$address = $_POST['address'];

 	$secret = '6LdQNE0UAAAAAJ2WmdKFcJLvB7b9YMEI2IiQsyJX';
 	$response = $_POST['g-recaptcha-response'];
 	$remoteip = $_SERVER['REMOTE_ADDR'];

 	$url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$response.'&remoteip='.$remoteip;

 	//Download from link : https://curl.haxx.se/ca/cacert.pem
 	$options=array(
	   'ssl'=>array(
	       'cafile'            => '/Applications/AMPPS/cacert.pem',
	       'verify_peer'       => true,
	       'verify_peer_name'  => true,
	   ),
	);
	$context = stream_context_create( $options );

 	$verify = file_get_contents($url,FILE_TEXT,$context);
 	$json = json_decode($verify);
 	if($json->success)
 	{
 		echo "Human Detected";
 	}
 	else
 	{
 		echo "Bot Detected";
 	}
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recaptcha Form</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="address" placeholder="Address"><br>
		<div class="g-recaptcha" data-sitekey="6LdQNE0UAAAAACdTuAFi79VJnqSBnPkGbzm9uTJ5"></div>
		<input type="submit" name="submit" value="Save">
	</form>
</body>
</html>