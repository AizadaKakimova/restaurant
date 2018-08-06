<?
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["saladList"]) && is_array($_POST["saladList"])) {
 $id=$_POST['saladList'][0];
 $name=$_POST['saladList'][1];
 $price=$_POST['saladList'][2];
 $description=$_POST['saladList'][3];

$servername = "localhost";
    $username = "root";
    $name_db = "alize";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $name_db );
    
  $sql = "UPDATE salad SET name = '$name' , price = '$price', description = '$description' WHERE id = '$id' ";
 
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

?>