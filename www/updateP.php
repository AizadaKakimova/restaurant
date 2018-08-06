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
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Administrator's</strong> page
        </h2>
        <hr class="divider">
        <div class="row">
        <div class="col-sm-4">

<section class="admin-product">
  <div class="container">
    <ul class="row">

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

<section class="admin-product">
  <div class="container">
<table>
  <tr>
    <th>id</th>
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
     
  $pizzaList=array();
    $sql = "SELECT * FROM pizza";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      $i=0;
    while($row = $result->fetch_assoc()) {
      $pizzaList[$i]['id']=$row['id'];
      $pizzaList[$i]['name']=$row['name'];
      $pizzaList[$i]['price']=$row['price'];
      $pizzaList[$i]['description']=$row['description'];
      $i++;
    }
  foreach ($pizzaList as $pizza) :
  ?>
  <tr>
  <form method="POST" action="updateItemP.php">
    <td><textarea name="pizzaList[]" readonly><?php echo $pizza['id'];?></textarea></td>
    <td><input placeholder="<?php echo $pizza['name']; ?>" name="pizzaList[]"></td>
    <td><input placeholder="<?php echo $pizza['price']; ?>" name="pizzaList[]"></td>
    <td><textarea placeholder="<?php echo $pizza['description']; ?>" name="pizzaList[]"></textarea></td>
    <td><input type="submit" class="fa fa-save"></td>
    </form>
  </tr>
  <? 
  endforeach;
}
          ?>          </form>
</table>
</html>
<style type="text/css">
.icons2{
  margin-left: -10px;
  width:30px;
  height:30px;
}
.btn-default {
  background: #FFFAF0;
  font-family: 'PT Sans', sans-serif;
  font-size: 17px;
  width: 180px;
  border-color:   #90EE90;
  color:  #696969;
  margin: 25px;

}
.out{
  float: right;
}
.but{
  margin-left:350px;
  margin-bottom: 300px;
}
  .info {
  color: black;
  font-size: 17px;
}
.icons {
  margin-left: -25px;
  width:30px;
  height: 30px;
}

.delete {
  position: relative;
  top: -35px;
}
.card-top {
  background:   #FAEBD7;
}
.top-btn {
  margin-top: 50px;
}


.card-img-top {
    display: block;
    height: 200px;
    width: 200px;
}

.card-title {
    font-size: 20px;
    font-weight: 700;
    line-height: 1.2857em;
    text-align: center;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
    font-family: 'PT Sans', sans-serif;
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05);
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.profile {
    position: absolute;
    top: -12px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 50%;
}

.text-bold {
    font-weight: 700;
}

.meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
}

.meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
}

.meta a:hover {
    color: rgba(0, 0, 0, .87);
}
.user-info {
  
  padding-top: 10px;
}
table{
  margin-left: 100px;
}

</style>