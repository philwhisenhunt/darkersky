<?php
//make an api that calls api
//api responds with the json 

/*
header('Content-Type: application/json');



// url https://api.darksky.net/forecast/code/37.8267,-122.4233

// echo $received;
echo "working";
//echo json_encode($data);
*/

//$received = file_get_contents('php://input');

//$received = htmlspecialchars($_GET["coordinates"]);
// echo $received;
// die();


//echo "https://api.darksky.net/forecast/code/" . $received;
$received = htmlspecialchars($_GET["coordinates"]);

//$coordinates = '37.8267,-122.4233';
header('Content-Type: application/json');

$homepage = file_get_contents('https://api.darksky.net/forecast/code/' . $received);
$decoded = json_decode($homepage, true);
echo $decoded['currently']['temperature'];
