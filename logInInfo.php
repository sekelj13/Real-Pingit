<?php
#include utility.php
	require("utility.php")
	#if($_SERVER["REQUEST_METHOD"] == "POST"){
	  # $fname = cleanInput($_POST["fname"]);
	   #$lname = cleanInput($_POST["lname"]);
	   #$dobM = cleanInput($_POST["dobM"]);
	   #$dobD = cleanInput($_POST["dobD"]);
	   #$dobY = cleanInput($_POST["dobY"]);
	   #$email = cleanInput($_POST["email"]);
	   #$pass = cleanInput($_POST["pass"]);
	   
	   $fname = "Bob";
           $lname = "Smith";
           $dobM = "3";
           $dobD = "14";
           $dobY = "1996";
           $email = "bob@bob.com";
           $pass = "#Cooper101";
           error_log("Processing: $fname $lname");

	   error_log("Processing: $fname $lname");

	   logMsg('Storing Data:'.$fname);
	   $dbconn = connectToDB();
	   $query = "INSERT into logIn_PingIt (fname, lname, dobM, dobD, dobY, email, pass) values ('$fname','$lname','$dobM','$dobD','$dobY','$email','$pass');";
	   logMsg($query);
	   $result = $dbconn->query($query);
	   if(!$result){
	      logMsgAndDie('Error loading data!!!!');
	   } else {
  	      logMsg('Good data load!');
	   }
	   disconnectDB($dbconn);
	#}
?>
