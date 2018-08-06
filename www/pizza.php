<?php 
session_start();?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Пиццы</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <link rel="icon" href="project/restoran/ali.jpeg">
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
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="alize.html">Главная
               
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.html">О ресторане</a>
               <span class="sr-only">(current)</span>
            </li>
            <li class="nav-item active px-lg-4">
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
    <a href="menu.html" class="btn btn-secondary">Назад</a>
        <hr class="divider">

        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>PIZZA</strong>
        </h2>
        <hr class="divider">
        <div class="row">
        <?php

   $servername = "localhost";
    $username = "root";
    $name_db = "alize";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $name_db );
       
   $pizzas=array();
    $sql = "SELECT * FROM pizza LIMIT 12";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    // output data of each row
      $i=0;
    while($row = $result->fetch_assoc()) {
      $pizzas[$i]['id']=$row['id'];
      $pizzas[$i]['name']=$row['name'];
      $pizzas[$i]['price']=$row['price'];
      $pizzas[$i]['description']=$row['description'];
      $pizzas[$i]['photo']=$row['photo'];
      
      $i++;
    }
  }
    foreach ($pizzas as $pizza) :
      ?>
      
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="project/eda/<?php echo $pizza['photo'];?>"" alt="" width="300" height="200">
              <h4 class="card-title m-0"><?php echo $pizza['name']?><strong style="color:red"><?php echo $pizza['price']?></strong>
                  <br><small class="text-muted"><?php echo $pizza['description']?></small>
                </h4>
            </div>
          </div>
       
          <? 
                endforeach; 

                ?>
        
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="project/eda/marg.jpg" alt="" width="300" height="200">
              <h4 class="card-title m-0">Маргарита<strong style="color:red"> 1590тг</strong>
                  <br><small class="text-muted">Сыр моцарелла, помидоры</small>
                </h4>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <img class="card-img-top" src="project/eda/caesar.jpg" alt="" width="300" height="200">
              <h4 class="card-title m-0">Цезарь<strong style="color:red"> 1790тг</strong>
                  <br><small class="text-muted">Соус цезарь, сыр моцарелла, куриное филе, листья айсберг</small>
                </h4>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="project/eda/bol.jpg" alt="" width="300" height="200">
              <h4 class="card-title m-0">Болоньезе<strong style="color:red"> 1790тг</strong>
                  <br><small class="text-muted">Сыр моцарелла, говяжий фарш, помидоры</small>
                </h4>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="project/eda/kukur.jpg" alt="" width="300" height="200">
              <h4 class="card-title m-0">С курицей и кукурузой<strong style="color:red"> 1790тг</strong>
                  <br><small class="text-muted">Сыр моцарелла, куриное филе, кукуруза консервированная, ананас консервированный</small>
                </h4>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="project/eda/semga.jpg" alt="" width="300" height="200">
              <h4 class="card-title m-0">С семгой<strong style="color:red"> 2190тг</strong>
                  <br><small class="text-muted">Сыр моцарелла, лосось, маслины</small>
                </h4>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="project/eda/ovosh.jpg" alt="" width="300" height="200">
              <h4 class="card-title m-0">Овощная<strong style="color:red"> 1790тг</strong>
                  <br><small class="text-muted">Сыр моцарелла, цукини, баклажаны, болгарский перец, шампиньоны</small>
                </h4>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="project/eda/mix.jpg" alt="" width="300" height="200">
              <h4 class="card-title m-0">Микс<strong style="color:red"> 1790тг</strong>
                  <br><small class="text-muted">Сыр моцарелла, говядина, куриное филе, помидоры, шампиньоны</small>
                </h4>
            </div>
          </div>
        </div>
      </div>
      </div>
  
  
 
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      </body>
      </html>
