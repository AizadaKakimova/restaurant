<?
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pizzaList"]) && is_array($_POST["pizzaList"])) {
 $id=$_POST['pizzaList'][0];
 $name=$_POST['pizzaList'][1];
 $price=$_POST['pizzaList'][2];
 $description=$_POST['pizzaList'][3];

$servername = "localhost";
    $username = "root";
    $name_db = "alize";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $name_db );
    
  $sql = "UPDATE pizza SET name = '$name' , price = '$price', description = '$description' WHERE id = '$id' ";
 
  $result = $conn->query($sql);
  
  if ($result===True) {
       header("location:pizza.php");
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