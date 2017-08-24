<?php
$access_token = 'vTkivC73wipxokOoIjneZxUPCz2P8tAECuWOWSx3jh7w/vwH/8fmSJcU7UmX/AnLbz6Cbljgaay7+P9/aOfmW9Cq2+ycggA1qq9qJurBvPQj70pqWIy4W6OKOo/gzw1VxoRnSMWSlbcPL7WbCDU7uQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
