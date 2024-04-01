<?php


$url = 'https://reqres.in/api/users?page=2';

//CURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

$response = json_decode($response, true);
return $response;
// var_dump($response);

?>