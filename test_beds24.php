<?php

/*
* The following sample uses a PHP array to construct the JSON data and php-curl to post it to the API.
* This sample will get the availability for one property with the specified parameters.
* Change the propId and other parameters to values for your account to use and test.
*/

$auth = array();
$auth['apiKey'] = 'mpzUE_sMX3A2v4E93ASJEg'; // mm
// $auth['apiKey'] = 'mpzUE_sMX3A2v4E93QWERy'; // fm

$auth['propKey'] = '2fa9QjME7ScxafEQZ_5k7w'; // mm
// $auth['propKey'] = '2fa9QjME7ScxafEQZ_5f8s'; //fm

$data = array();
// $data['authentication'] = $auth;
/* Restrict the bookings using any combination of the following */
// $data['roomId'] = '12345';
// $data['bookId'] = '12345678';
// $data['masterId'] = '12345678';
// $data['arrivalFrom'] = '20141001';
// $data['arrivalTo'] = '20151001';
// $data['departureFrom'] = '20141001';
// $data['departureTo'] = '20151201';
// $data['modifiedSince'] = '20131001 12:30:00';
// $data['includeInvoice'] = false;
// $data['includeInfoItems'] = false;
// $data['status'] = '1';

$room = array();
$room['action'] = 'modify';
$room['roomId'] = '253599';
$room['name'] = 'Doppelzimmer XYZ edit farid2';

$roomTypes = array();
$roomTypes[] = $room;

$prop = array();
$prop['action'] = 'modify';
// $prop['currency'] = 'EUR';
$prop['roomTypes'] = $roomTypes;

$setProperty = array();
$setProperty[] = $prop;

$data = array();
$data['authentication'] = $auth;
$data['setProperty'] = $setProperty;
$json = json_encode($data);
echo $json;
// $url = "https://api.beds24.com/json/getBookings";
//
// $ch=curl_init();
// curl_setopt($ch, CURLOPT_POST, 1) ;
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
// $result = curl_exec($ch);
// curl_close ($ch);
// echo $result;
$url = "https://api.beds24.com/json/getProperties";

$ch=curl_init();
curl_setopt($ch, CURLOPT_POST, 1) ;
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
$result = curl_exec($ch);
curl_close ($ch);
echo $result;
?>