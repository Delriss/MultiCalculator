<?php

require_once("jRoute/_load.php");

//Create jRoute instance
$jRoute = new jRoute();

//Add index route
$jRoute->Route(["get"], "/", function() {
    echo "Hello World!";
});


//Create currency Route
$jRoute->Route(["get"], "/", "content/home.php");
$jRoute->Route(["get"], "/currency", "content/currency.php");
$jRoute->Route(["get"], "/temperature", "content/temperature.php");

echo $jRoute->Dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);