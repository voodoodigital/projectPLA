<?php

// get the request data
$request = $_POST["signUpData"]; // comes as a JSON
$requestObject = json_decode($request);

// import backend processes
// -> check if user has provided all the importat data signIn (everything you need from the user signIN in DB)
// -> input data validation -> if error: send the error as the response -> ifnot: proceed to the next step
// -> check if a user exist for the data that request provide -> if exist: proceed to the next step -> ifnot: error out that invalid credintial errorrs
// -> get the salt from db for the email that provided
// -> generate the password hash and check the similerty with DB and Generated ones. -> if matches: procced to the next step -> ifnot: error out
// -> create a session and store data init
// -> generate the response and output the response

require("../app/templateBackendProcess.php");// import relevent files


// only program bias process for the eact usecase and repeated processes can be create in the 'app' as classes and can  reuse in here


// send the response
$responseObject = new stdClass(); // if response in object format
$responseObject->objectProperty1 = 'response data'; //  add data to an object
$responseObject->objectProperty2 = 'response data';

$responseArray = array(); //  if response in array format
$responseArray = array_push($responseArray, 'new data to array'); // add data to array

$responseJsonText = json_encode($response); // for arrays and objects
echo ($responseJsonText);


$response = 'array or a value or an object which contains all the response data'; // if response in just text
echo ($response); // for just text responses
