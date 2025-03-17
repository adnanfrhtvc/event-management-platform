<?php
require 'vendor/flight/Flight.php';
require 'routes/test.php';

// Define a simple test route
Flight::route('/', function(){
    echo 'FlightPHP is working!';
});

// Start the framework
Flight::start();
?>
