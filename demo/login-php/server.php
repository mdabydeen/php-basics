<?php
	
	/* 
	 *	File Name: client.html 
	 *	Project Name: Login-PHP
	 *  Project URL : https://github.com/mdabydeen/php-basics
	 *  Author: Michael Dabydeen (@firelinks)
	 *  Author URL: http://www.michaeldabydeen.com
	 *  Description: A basic PHP Script that will handle the data from the HTTP POST request.
	 *  
	 * Note: (this is still work in progress)
	 */

	//all php varibales starts with $ e.g $var, $name
	// int i, char name; 

	//php - associate = arr["name"] = value 
	
	//get the values that are being sent from the client
	
	//SUPER GLOBAL ARRAYS 
	//GET POST SESSION SERVER
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	//check to see if they are empty
	if($username == null || $password == null){
		echo "You fool, you didn't enter anything";
		//return to client page
		include('client.html');
	}else{
		echo "Hello".$username;

	//connect to a database 


	//retrieve the data base


	}

	 

?>
