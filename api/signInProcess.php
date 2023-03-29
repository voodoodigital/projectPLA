<?php
// import backend processes
require("../app/inputValidator.php");
require("../app/dbQuery.php");
require("../app/passwordEncryptor.php");

// get the request data
$request = $_POST["signInData"]; // comes as a JSON
$requestObject = json_decode($request);
// -> check if user has provided all the importat data signIn (everything you need from the user signIN in DB)
$email = $requestObject->email;
$password = $requestObject->password;
// if other data exists to be send from frontend goes here


// -> input data validation -> if error: send the error as the response -> ifnot: proceed to the next step
$validator = new Validator($requestObject);
$validation = $validator->validator();
$validationArray = get_object_vars($validation);
foreach ($validationArray as $key => $value) {
    if ($value != null) {
        echo ($value);
        die();
    }
}


// -> check if a user exist for the data that request provide -> if exist: proceed to the next step -> ifnot: error out that invalid credintial errorrs
$database = new DB();
$checkerQuery = "SELECT * FROM `user` WHERE `email`=? ";
$preparedStatement1 = $database->prepare($checkerQuery, 's', array($email));
$userDataRaw = $preparedStatement1->get_result();
$userData = $userDataRaw->fetch_assoc();

if (!$userDataRaw->num_rows) {
    echo ("Wrong email address");
    die();
}


// -> get the salt from db for the email that provided
$salt = $userData["salt"];
$hash = $userData["password"];


// -> generate the password hash and check the similerty with DB and Generated ones. -> if matches: procced to the next step -> ifnot: error out
$passwordValidator = new PasswordHashVerifier();
if (!$passwordValidator->isValid($password, $salt, $hash)) {
    echo ('wrong password');
    die();
}


// -> create a session and store data init
session_start();
$_SESSION["pla_user"] = $userData;

// -> generate the response and output the response
echo ('login success');
