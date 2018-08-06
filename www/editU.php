<?php
  session_start();  ?>
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
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Семейный ресторан</div>




    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Главная
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.html">О ресторане</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="menu.html">Меню</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.html">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php

  if(isset($_SESSION['username'])){
    
	 
	 $servername = "localhost";
		$username = "root";
		$name_db = "alize";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $name_db );

		//select to db
		$sql = "SELECT * from users where username='".$_SESSION['username']."' ";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>
    	 <div class="container">
      
      <div class="bg-faded p-4 my-4">
       <hr class="divider">
                        <h4 class="text-center text-lg text-uppercase my-0">
          <strong>Editing account</strong>
        </h4>
                        <hr class="divider">
      <?php
        
		echo " <form method='POST' action='editUser.php'>
		Username: <input type='text' name='uname' placeholder= '" . $row["username"]. "' >   </input>   <br> 
		Password: <input type='password' name='psw' placeholder='Enter your password'></input> <br> 
		First Name:  <input type='text' name='fn' placeholder= '" . $row["firstname"]. "'>      </input> <br> 
		Second Name:  <input type='text' name='sn' placeholder= '" . $row["secondname"]. "'></input><br>
		</form>";?>
		<form method='POST' action='editUser.php'>
		<button class="btn btn-default top-btn"><img src="project/save.png" class="icons2">Save changes</button>
</form>
</div>
</div>
<?php
		
		
		
	}
	} else {
    echo "0 results";
	}
	$conn->close();
	 
	

	 }
  else
      echo "error";
?>
<style>
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
  border-color: 	#90EE90;
  color:	#696969;
  float: left;
  bottom: 5px;
}
</style>