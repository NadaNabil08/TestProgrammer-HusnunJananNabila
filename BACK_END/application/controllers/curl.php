<?php 
	$authorId = "12345";
	$url = "http://resreq.com/api/authors/{$authorId}";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	$response = curl_exec($ch);
	$resultInfo = curl_getinfo($ch);
	curl_close($ch);
	$authorJSON = json_decode($response);
?>