<?php
/**
 * Laxmi Kandel
 * 01/15/2020
 * /IT328/chicken/index.php
 */
//TURN ON ERROR REPORTING

ini_set("display_errors", 1);
error_reporting(E_ALL);

//session start() wont work if there is space or any echo statement after php or before php
//session_start();

require "vendor/autoload.php";

//Instantiate F3
$f3 = Base::instance();
//defining a default route
//it means when the user navigate through root directory (chicken) they should see the output
//we wont have index.php

$f3->route('GET /',function ()
{
    echo "Hello";
});
//Run fat free
$f3-> run();
