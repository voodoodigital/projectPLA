<?php

// catch the data from UI
$mobile = $_GET["mobile"];
$email = $_GET["email"];

// validate inputs
require("../app/inputSenitisor.php");

$senetisor = new Senitisor();
echo ($senetisor->senitizeOutput($mobile));
?>

