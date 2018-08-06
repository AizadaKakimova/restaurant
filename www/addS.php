 <?
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $name=$_POST['name'];
 $price=$_POST['price'];
 $description=$_POST['description'];
 if($name!=NULL && $price!=NULL && $description!=NULL){
            $servername = "localhost";
    $username = "root";
    $name_db = "alize";
    $password = "";
 $conn = new mysqli($servername, $username, $password, $name_db );
            $sql = "INSERT INTO `salad` (`name`, `price`, `description`) VALUES ('".$name."', '".$price."', '".$description."');";
            
            $result = $conn->query($sql);

            
           
  if($result===True){
    header("location:/admin.php");
  }

else {
 echo "Not set";
}
if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);

}
echo "Connnected successfully";

  } 
  else echo "Some data is empty";  
  }   
        ?>