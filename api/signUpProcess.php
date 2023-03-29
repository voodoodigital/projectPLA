<?php
// import backend processes
require("../app/inputValidator.php");
require("../app/dbQuery.php");
require("../app/passwordEncryptor.php");

// get the request data
$request = $_POST["signUpData"]; // comes as a JSON
$requestObject = json_decode($request);
// -> check if user has provided all the importat data for creating account (everything you need from the user to insert int DB)
$email = $requestObject->email;
$firstName = $requestObject->firstname;
$lastName = $requestObject->lastname;
$mobile = $requestObject->slmobile;
$gender_id = $requestObject->gender_id;
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


// -> check if a user exist for the data that request provide -> if exist: error out -> ifnot: prceed to the next step
$database = new DB();
$checkerQuery = "SELECT * FROM `user` WHERE `email`=? ";
$preparedStatement1 = $database->prepare($checkerQuery, 's', array($email));
$userExists = $preparedStatement1->get_result();

if ($userExists->num_rows) {
    echo ("A user exists with the same email address");
    die();
}


// -> encrypt the password and get the encryt password with salts
$passwordEncryptor = new StrongPasswordEncryptor();
$enctyptedData = $passwordEncryptor->encryptPassword($password); // salt with hash
$salt = $enctyptedData['salt'];
$hash = $enctyptedData['hash'];


// -> create an acount in the DB by inserting data to the DB (insert all the values to the DB that it requests. get referances from DB) -> onerror: response the error -> onsuccess: proceed to the next step
date_default_timezone_set('Asia/Colombo');
$current_time = date('Y-m-d H:i:s');
$insertQuery = 'INSERT INTO `user` (`email`, `first_name`, `last_name`, `mobile`, `registed_datetime`, `password`, `salt`, `user_status_id`, `user_gender_id`) 
VALUES (?, ?, ?, ?, ?, ?, ?, 1, ?)';
$preparedStatement2 = $database->prepare($insertQuery, 'sssssssi', array($email, $firstName, $lastName, $mobile, $current_time, $hash, $salt, $gender_id));
$userExists = $preparedStatement2->get_result();

// -> generate the response and output the response
echo ('success');
