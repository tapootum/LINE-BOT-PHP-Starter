<?php
$access_token = 'Xqs5qIxucIVe7ZGk5Cx1uiLV45hwwiGSxFuIPSgXN6d0pLBXhvrhWKMYz7ftdxuzwEfu3k8/8Mj8z4vrCYOlY5YJj/dOe4/qbfcdm6dRYxJbphD23UzrSWAft4PfPGMl8gWrXLd3c7Yr64NwicfOgwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
