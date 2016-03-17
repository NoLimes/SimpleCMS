<?php 
ob_start();
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<?php 
include $_SERVER['DOCUMENT_ROOT'].'/assets/headsection.php';
$user = new uzytkownik;
$web = new web;
$user->connection();
    if($user->is_loggedin())
  {
    
   header("Location: ../");
  }
  else
  {
    include $_SERVER['DOCUMENT_ROOT'].'/assets/unloggednav/navbar.php';
    }
 ?>


<!-- Page Content -->
<?php 
$web->sessionInfo();
?>
 <div id="info">COSOOSCOSOCOSO</div>
<div class="container">
  <div id="info">Błąd</div>
	<h2>Log in for maximum privileges!</h2>
    <hr>
<div class="jumbotron">
   <div class="row">
      		<div class="col-sm-12 col-md-12 col-lg-6 col-lg-push-3">

           <form class="form" method="post">
<label for="inputEmail" class="control-label">E-mail</label>       
<input type="email" name="email1" class="form-control" id="inputEmail" placeholder="E-mail">
   
            <div class="form-group">
   <label for="inputPassword" class="control-label">Password</label>
    <input type="password" name="password1" class="form-control" id="inputPassword" placeholder="Password"></div>
  
     <button type="submit" class="btn btn-default center-block">Submit</button>
   </form>

    </div>
	
						</div>
		</div>

</div>
</div>

 
   
<br>
<br>
<br>
<br>
    <!-- /.container -->
    <?php 

include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.html';

     ?>