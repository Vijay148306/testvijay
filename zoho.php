<?php
	echo 'Vijay';
	$request_url = 'https://people.zoho.com/people/api/attendance'; 
	$authToken = "bad18eba1ff45jk7858b8ae88a77fa30";
	$dateFormat = "dd/MM/yyyy HH:mm:ss"; 
	$checkIn = "29/10/2014 09:05:00";
	$checkOut = "29/10/2014 17:30:00"; 
	$empID = "1"; 
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
	$request_param = "authtoken=" . $authToken . "&checkIn=" . $checkIn . "&checkOut=" . $checkOut . "&dateFormat=" . $dateFormat . "&empId=" . $empID; 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $request_param); 
	curl_setopt($ch, CURLOPT_URL, $request_url); 
	curl_setopt($ch, CURLOPT_POST, TRUE); 
	curl_setopt($ch, CURLOPT_HEADER, TRUE); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	$response = curl_exec($ch); 
	$response_info = curl_getinfo($ch); 
	curl_close($ch); 
	$response_body = substr($response, $response_info['header_size']); 
	echo '\nRequest Parm : ' . $request_param; 
	echo "\nResponse HTTP Status Code : "; 
	echo $response_info['http_code']; 
	echo "\nResponse" . $response_body; 

?>

