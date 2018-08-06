<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $user = $_POST['uname'];
	$pass = $_POST['psw'];
	$firstName = $_POST['fn'];
	$secondName = $_POST['sn'];

	
	
	$servername = "localhost";
		$username = "root";
		$name_db = "alize";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $name_db );

		//select to db
		$sql = "UPDATE `users` SET  `firstname` = '".$firstName."', `secondname` = '".$secondName."' , `username` = '".$user."' ,`password` = '".$pass."'  WHERE `users`.`username` = '".$_SESSION['username']."'";
	
		$result = $conn->query($sql);
		
		if ($result===True) {
    // output data of each row
	echo "edit successfully, welcome to our service ";
	$_SESSION["username"] = $user;
	} else {
    echo "Edit Failed";
	}
	
		
		
		
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";

		
		
		
	


}
else echo "error #123";
?>