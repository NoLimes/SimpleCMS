<?php 
session_start();

require_once('uzytkownikclass.php');


$user = new uzytkownik;
$user->connection();


if(isset($_POST['email1']))
{
  
   $email = $_POST['email1'];
   $password = $_POST['password1'];
  
  
    if($password=="") {
      $_SESSION['nieudane_logowanie'] = '<div class="alert alert-danger" role="alert"> <p class="text-center">Something went wrong</p></div>';
      $user->redirect('../log-in/');
      exit();

   }
   else if($email=="") {
      $_SESSION['nieudane_logowanie'] = '<div class="alert alert-danger" role="alert"><p class="text-center"> Something went wrong</p></div>';
      $user->redirect('../log-in/');
      exit();
   }
   else
   {
    $user->logowanie($email,$password);
  
      
    }
    
   }



else
{
  $user->redirect('../log-in');
}

?>