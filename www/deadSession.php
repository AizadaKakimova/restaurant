<?php


  session_start();  
  if(isset($_SESSION['username'])=='admin'){
     session_unset(); 

// destroy the session 
session_destroy(); 
  }
  else
      echo "session not exist";





?>