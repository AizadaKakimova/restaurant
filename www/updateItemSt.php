<?
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["steakList"]) && is_array($_POST["steakList"])) {
 $id=$_POST['steakList'][0];
 $name=$_POST['steakList'][1];
 $price=$_POST['steakList'][2];
 $description=$_POST['steakList'][3];

$servername = "localhost";
    $username = "root";
    $name_db = "alize";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $name_db );
    
  $sql = "UPDATE steak SET name = '$name' , price = '$price', description = '$description' WHERE id = '$id' ";
 
  $result = $conn->query($sql);
  
  if ($result===True) {
       header("location:admin.php");
     } else {
          echo '<script language="javascript">';
          echo 'alert("Edit failed")';
          echo '</script>';
     }
}
else {
 echo "Not set";
}