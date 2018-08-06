<?php
  session_start();  
  if(isset($_SESSION['username'])){
     
	 
	 $servername = "localhost";
		$username = "root";
		$name_db = "back3";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $name_db );

		//select to db
		$sql = "Delete from users where username='".$_SESSION['username']."' ";
		$result = $conn->query($sql);
		
		if ($result===True) {
    // output data of each row
	 session_unset(); 

// destroy the session 
session_destroy(); 
  
	echo "delete successfully";
	
	
	} else {
    echo "delete Failed ";
	}
   
	$conn->close();
	 
	

	 }
  else
      echo "eror";
?>