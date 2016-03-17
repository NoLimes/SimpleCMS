<?php 
session_start();

require_once('webclass.php');
$user = new uzytkownik;
$web = new web;

$user->connection();
if(isset($_POST['text']))
{
   $text = $_POST['text'];

 
   if($text=="")
   {
      
            $user->redirect('../reviews');
   }
    else
   {
      $web->addPost($text);
      $user->redirect('../reviews');
  } 
}
else
{
 $user->redirect('../'); 
}
?>