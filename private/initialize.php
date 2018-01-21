<?php

/*
 * Assigning file paths to PHP CONSTANTS
 * __FILE__ returns the current path to this file
 * dirname() returns the path to the parent dir
 */
//Find this files location & get the DIR name
//The below contstants can be used to easily locate the files within the below dirs...
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

//This page loads all the functions, libraries, code snippets etc...
require_once('functions.php');
