<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $user = $_POST['uname'];
	$pass = $_POST['psw'];
	
	if ($user!=NULL && $pass!=NULL) {
		
		
		$servername = "localhost";
		$username = "root";
		$name_db = "alize";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $name_db );

		//select to db
		$sql = "SELECT username, password from users where username='".$user."' AND password='".$pass."'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo " userName: " . $row["username"]. " - Pass: " . $row["password"]. " " . $row["lastname"]. "<br>";
		if ($row["username"]=="admin"){
		$_SESSION["username"] = $user;
		$_SESSION["password"] = $pass;
		header("location:admin.php"); 
		}
		else header("location:main.php"); 
		$_SESSION["username"] = $user;
	}
	} else {
    echo "0 results";
	}
	$conn->close();
		
		
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";

		
		
		
	}
	else echo "User or password is empty";


}
else echo "error #123";
?>