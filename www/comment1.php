<?
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 

 $id=$_POST['id'];
 $comment=$_POST['comment'];

    $servername = "localhost";
    $username = "root";
    $name_db = "alize";
    $password = "";
 
  $sql = "INSERT INTO comments (`id`, comment, ) VALUES ('$id', '$comment')";
 
  $result = $conn->query($sql);
  
  if ($result===True) {
         header("location: contact.php");
     } else {
            echo "Failed";
     }
}
?>