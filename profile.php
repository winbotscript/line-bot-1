<?php


$access_token = '15Yhc+1nOY8U/3fDNe9wFVBWNJeV4Sqay8itVL2k00Jtwtmmz6kwEu759xpoD8/wfq4fvySswNfb0jjAJ4/hf80a/577NYd04yCVVgMF6C1rRhj870I5hfAeehGphGS0Hth5B0EWxp0WZWtcfP3Y7AdB04t89/1O/w1cDnyilFU=';

$userId = 'U61248e44c88554059baf808e0f87c2d4';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

