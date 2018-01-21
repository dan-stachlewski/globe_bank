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

/*
 * Assigning file ROOT URL to PHP CONSTANTS
 * Don't need to include the DOMAIN NAME
 * Use same DOC ROOT as the WEBSERVER
 * We can set a hard-coded value:
 * define("WWW_ROOT", 'http://localhost/tutorials-2017/lynda.com/PHP-essential-training-1/globe_bank/public/'); DEVELOPMENT ENV
 * define("WWW_ROOT",''); PRODUCTION MACHINE
 */
 // Can dynamically find everything in the URL up to "/public"
 //Ref: http://php.net/manual/en/reserved.variables.server.php
 $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public')+7;
 $doc_root = substr($_SERVER['SCRIPT_NAME'], 0,$public_end);
 define("WWW_ROOT", $doc_root);

//This page loads all the functions, libraries, code snippets etc...
require_once('functions.php');
