<?php

// get the request data
$request = $_POST["signUpData"]; // comes as a JSON
$requestObject = json_decode($request);

// import backend processes
// -> check if user has provided all the importat data for creating account (everything you need from the user to insert int DB)
// -> input data validation -> if error: send the error as the response -> ifnot: proceed to the next step
// -> check if a user exist for the data that request provide -> if exist: error out -> ifnot: prceed to the next step
// -> encrypt the password and get the encryt password with salts
// -> create an acount in the DB by inserting data to the DB (insert all the values to the DB that it requests. get referances from DB) -> onerror: response the error -> onsuccess: proceed to the next step
// -> generate the response and output the response

require("../app/templateBackendProcess.php");

// make sure to create classes in 'app' folder for specific tasks.
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
