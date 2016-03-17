<?php 
session_start();

require_once('webclass.php');
$user = new uzytkownik;
$web = new web;

$user->connection();
if(isset($_POST['value']))
{
   $text = strip_tags($_POST['value']);
   $id=strip_tags($_POST['id']);
 $query = strip_tags($_POST['query']);

 
   if($text=="")
   {
      
            echo '<span style="color:red;">Can`t update empty string!</span>';
   }
    else
   {
 
        if($query=='email')
        {
          
          $web->editVar($query,$text,$id);
       echo $text;
        }
        elseif ($query=='login') {
          $web->editVar($query,$text,$id);
           echo $text;
        }
        elseif ($query=='status') {
          $web->editVar($query,$text,$id);
          echo $text;
        }
   
  } 
}

?>