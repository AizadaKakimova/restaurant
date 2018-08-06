
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $user = $_POST['uname'];
    $firstName = $_POST['fn'];
	$secondName = $_POST['sn'];
	$pass = $_POST['psw'];
	

	
	if ($user!=NULL && $pass!=NULL && $firstName!=NULL && $secondName!=NULL) {
	$servername = "localhost";
		$username = "root";
		$name_db = "alize";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $name_db );

		//select to db
		$sql = "INSERT INTO `users` (`firstname`, `secondname`,  `username`, `password`) VALUES ('".$firstName."', '".$secondName."',  '".$user."', '".$pass."');";
		$result = $conn->query($sql);
		
		if ($result===True) {
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
<button class="btn btn-default top-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
<button class="btn btn-default top-btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign up</button></div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="index.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="project/alize.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<div id="id02" class="modal2">
  
  <form class="modal-content animate" action="registration.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label for="fn"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fn" required>
      <label for="sn"><b>Second Name</b></label>
      <input type="text" placeholder="Enter Second Name" name="sn" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

        
      <button type="submit">Sign up</button>
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

</script>


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

    <div class="container">

      <div class="bg-faded p-4 my-4">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="project/eda/slide1.jpeg" alt="">
              
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="project/eda/slide2.jpeg" alt="">
             
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="project/eda/slide33.jpeg" alt="">
             
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

    
        

      </div>
      


      

    </div>
    

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
  .btn-default {
  background: #FFFAF0;
  font-family: 'PT Sans', sans-serif;
  font-size: 17px;
  width: 180px;
  border-color:   #90EE90;
  color:  #696969;
  float: right;

</style>
<?php
	} else {
    echo "You have already registered";
	}
	
		
		
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";

		
		
		
	}
	else echo "User or password is empty";


}

?>