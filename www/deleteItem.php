<?php 
session_start();
 if (isset($_GET['deleteItem'])) {
$id = $_GET['deleteItem'];
$servername = "localhost";
    $username = "root";
    $name_db = "alize";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $name_db );
     $sql = "DELETE FROM pizza WHERE id = '$id'";
     $result = $conn->query($sql);
  
  if ($result===True) {
   header("location:admin.php");
     } else {
            echo "Deletion Failed";
     }
 }

?>