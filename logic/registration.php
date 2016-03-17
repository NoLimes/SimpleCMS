<?php 
session_start();
require_once('uzytkownikclass.php');


$user = new uzytkownik;
$user->connection();

if(isset($_POST['email']))
{

   $email = $_POST['email'];
   $nickname = $_POST['nickname'];
   $password = $_POST['password'];
   $activation = $_POST['email'];
   
 
   if($nickname=="") {
      $_SESSION['nieudana_rejestracja'] = '<div class="alert alert-danger" role="alert">Nickname is empty</div>';
            $user->redirect('../sign-in');
   }
   else if($email=="") {
      $_SESSION['nieudana_rejestracja'] = '<div class="alert alert-danger" role="alert">E-mail is empty</div>';
            $user->redirect('../sign-in');
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['nieudana_rejestracja'] = '<div class="alert alert-danger" role="alert">E-mail is in wrong format</div>';
            $user->redirect('../sign-in');
   }
   else if($password=="") {
      $_SESSION['nieudana_rejestracja'] = '<div class="alert alert-danger" role="alert">Password is empty</div>';
            $user->redirect('../sign-in');
   }
   else if(strlen($password) < 6){
      $_SESSION['nieudana_rejestracja'] = '<div class="alert alert-danger" role="alert">Password must be longer then 6 characters</div>';
            $user->redirect('../sign-in'); 
   }
   else
   {
      try
      {
         $stmt = $user->handler->prepare("SELECT email,login FROM users WHERE email=:email OR login=:login");
         $stmt->execute(array(':login'=>$nickname, ':email'=>$email));
         if($stmt==true)
         {
          $_SESSION['info']='powiodlo sie';
         }
         $row=$stmt->fetch(PDO::FETCH_ASSOC);
    
         if($row['login']==$nickname) {
            $_SESSION['nieudana_rejestracja'] = '<div class="alert alert-danger" role="alert">E-mail or Nickname already taken. Please try again</div>';
            $user->redirect('../sign-in');
         }
         else if($row['email']==$email) {
            $_SESSION['nieudana_rejestracja'] = '<div class="alert alert-danger" role="alert">E-mail or Nickname already taken. Please try again</div>';
            $user->redirect('../sign-in');
         }
      else
        {
          $_SESSION['poprawna_rejestracja'] = '<div class="alert alert-success" role="alert">Congratulation! You are a new member. Please verify your e-mail account.</div>';
          $user->dodaj($email,$nickname,$password,$activation);
         $user->redirect('../');
      
         
        
      }
    }
     catch(PDOException $e)
     {
        echo $e;
     }
  } 
}
else
{
  $user->redirect('../reviews');
}

?>