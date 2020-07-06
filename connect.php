<?php
	$dbhost = "localhost";	
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "cpanel";
    $conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$dbName);
     //check connection 
if($conn->connect_error){
    echo "Could not connect connect";
}

