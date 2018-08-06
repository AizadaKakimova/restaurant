<?php session_start(); ?>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Семейный ресторан Alize</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="project/restoran/ali.jpeg">
    
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


    <link href="alize.css" rel="stylesheet">

  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Alize</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Семейный ресторан
    <form method="POST" action="logOut.php">
                    <button class="btn btn-default top-btn out"><img src="project/logout.png" class="icons2">Logout</button>

                  </form></div>
                  <div class="container">
      
      <div class="bg-faded p-4 my-4">
<table>
  <tr>
    <th>name</th>
    <th>price</th>
    <th>description</th>
  </tr>
  <?
  $servername = "localhost";
    $username = "root";
    $name_db = "alize";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $name_db );
?>
  <tr>
  <form method="POST" action="addP.php">
    <td><input class="edit" placeholder="Name..." name="name"></td>
    <td><input class="edit" placeholder="Price.." name="price"></td>
    <td><textarea class="edit" placeholder="Description.." name="description"></textarea></td>
    <td><input type="submit" name=""></td>
    </form>
  </tr>
</table>
</div>
</div>
</body>
</html>
<style type="text/css">
.btn-default {
  background: #FFFAF0;
  font-family: 'PT Sans', sans-serif;
  font-size: 17px;
  width: 180px;
  border-color:   #90EE90;
  color:  #696969;
  float: left;
}
.icons2{
  margin-left: -10px;
  width:30px;
  height:30px;
}
.out{
  float:right;
}
#edit{
  width: 30px;
  height: 30px;
}
button{
  width:35px;
  height:35px;
}
.edit{
  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
table{
  margin-left: 200px;
}
</style>