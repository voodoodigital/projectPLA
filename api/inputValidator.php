<?php

// catch the data from UI
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$country = $_GET["country"];
$mobile = $_GET["mobile"];
$email = $_GET["email"];

// validate inputs
require("../app/inputValidator.php");

$inputDataObject = new stdClass();
$inputDataObject->firstname = $firstname;
$inputDataObject->lastname = $lastname;
$inputDataObject->country = $country;
$inputDataObject->slmobile = $mobile;
$inputDataObject->email = $email;

$validator = new Validator($inputDataObject);

$errors = $validator->validator();
$errorsJson = json_encode($errors);


// output errors if exist. if not output success message
// 
echo ($errorsJson);
