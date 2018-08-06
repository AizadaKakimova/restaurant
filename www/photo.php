<?php 
$file_get = $_FILES['foto']['name'];
$temp = $_FILES['foto']['tmp_name'];

$file_to_saved = "project/".$file_get; //Documents folder, should exist in       your host in there you're going to save the file just uploaded
move_uploaded_file($temp, $file_to_saved);

echo $file_to_saved;

$insert_img = mysql_query("INSERT INTO users (field_image) values  ('".$file_to_saved."')");
if ($insert_img) {
# code...
echo "Img inserted successfully";
}
else{
 echo "There is something wrong with this code. Eff!";
}

 ?>