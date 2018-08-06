<?php

  session_start();  
?>
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
        $firstName=$row['firstname'];
      $secondName=$row['secondname'];
      $username=$row['username'];
      $email=$row['email'];
      $password=$row['password'];
		?>
		  <div class="container">
      
      <div class="bg-faded p-4 my-4">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 user-info">
                
                <div class="col-sm-4">
                  <img class="card-img-top" src="project/alize.png" >
                  </div>
                  <div class="col-sm-4 ">
                  <form method="POST" action="editU.php">
                  <button class="btn btn-default top-btn"><img src="project/edit.png" class="icons">Edit account</button>
                  </form>
                  <form method="POST" action="deleteU.php">
                    <button class="btn btn-default top-btn delete"><img src="project/delete.png" class="icons2">Delete account</button>

                  </form>
                  </div>
                </div>
                    <div class="card-block">
                        <figure class="profile">
                            <img src="project/alize.png" class="profile-avatar" alt="">
                        </figure>
        <hr class="divider">
                        <h4 class="card-title"><?php echo $firstName. " " .$secondName; ?></h4>
                        <hr class="divider">
                        <div class="meta card-text">
                            <a>Username: </a>
                            <p class="info"><?php echo $username; ?></p>
                        </div>
                        <div class="meta card-text">
                            <a>E-mail: </a>
                            <p class="info"><?php echo $email; ?></p>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>

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
      echo "eror";

?>

    <footer class="bg-faded text-center py-5">
     <div class="footer-left">

        <h3><strong>Alize</strong></h3>

        <p class="footer-links">
          <a class="text-uppercase text-expanded link" href="alize.html">Главная</a>
          ·
          <a class="text-uppercase text-expanded link" href="about.html">О ресторане</a>
          ·
          <a class="text-uppercase text-expanded link" href="menu.html">Меню</a>
          ·
          <a class="text-uppercase text-expanded link" href="contact.html">Контакты</a>
          ·
           </p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <span>Улица Жарбосынова, 83B</span>
              
             
        </div>

        <div>
          <i class="fa fa-phone"></i>
          +7-701-044-05-55, +7-708-183-03-73
        </div>

        

      </div>
        <div class="footer-icons">

          <a href="https://www.instagram.com/alize_kz/" target="_blank" class="link"><i class="fa fa-facebook"></i></a>
          <a href="https://www.instagram.com/alize_kz/" target="_blank" class="link"><i class="fa fa-twitter"></i></a>
          <a href="https://www.instagram.com/alize_kz/" target="_blank" class="link"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.instagram.com/alize_kz/" target="_blank" class="link"><i class="fa fa-github"></i></a>

        </div>

      </div>
    </footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

<style type="text/css">

  .info {
  color: black;
  font-size: 17px;
}
.icons {
  margin-left: -25px;
  width:30px;
  height: 30px;
}
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
}
.delete {
  position: relative;
  top: -35px;
}
.card-top {
  background: 	#FAEBD7;
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
.out{
	float: right;
}

</style>
