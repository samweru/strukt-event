<?php

use Strukt\Loop;
use Strukt\Cmd;

require "vendor/autoload.php";

/**
* Authentication
*
* @param username
* @param password
*/
Loop::add("auth", ["admin", "p@55w0rd"], function($username, $password){

	echo sprintf("username:%s|password:%s\n", $username, $password);
});

/**
* Help
*/
Loop::add("help", function(){

	echo "Docs\n";
});

// Loop::add("hello", function($name){

// 	echo sprintf("Hello %s", $name);
// });

// Loop::run();
// Cmd::exec("help");
// Cmd::exec("auth", ["pitsolu", "pazzw0rd"]);
// Cmd::exec("hello", ["Sam"]);