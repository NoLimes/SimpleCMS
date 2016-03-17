<?php session_start()


 ?>
<?php 


?>
<!DOCTYPE html>
<html lang="en">

<?php 

include $_SERVER['DOCUMENT_ROOT'].'/assets/headsection.php';
$user = new uzytkownik;
$web = new web;

 ?>
    <?php 

    if($user->is_loggedin())
  {
    
  $user->redirect('../');
  exit();
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
<div class="container">
	<h2>Sign up for maximum privileges!</h2>
    <hr>
<div class="jumbotron">
   <div class="row">
      		<div class="col-sm-12 col-md-12 col-lg-6 col-lg-push-3">

    <form action="../logic/registration.php" method="post" role="form" data-toggle="validator">
<div class="form-group">
    <label for="inputEmail" class="control-label">E-mail</label>
    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" data-error="E-mail address is invalid" alt="lol" required>
    <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
    <label for="inputName" class="control-label">Nickname</label>
    <input type="text" name="nickname" class="form-control" id="inputName" data-minlength="6" placeholder="Minimum 6 characters" data-error="Nickname is invalid" required>
    <div class="help-block with-errors"></div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword" class="control-label">Password</label>
    <div class="row">
    
    <div class="form-group col-lg-6">
      <input type="password" name="password" data-minlength="6" class="form-control" id="inputPassword1" placeholder="Password"  required>
   
      <span class="help-block">Minimum of 6 characters</span>
    </div>
    <div class="form-group col-lg-6">
      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword1" data-error="Field is empty" data-match-error="Fields don`t match" placeholder="Confirm" required>
      <div class="help-block with-errors"></div>
    </div>
     </div>
      <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="checkbox" id="terms" data-error="Check before register" required>
        Are you a robot?
      </label>
      <div class="help-block with-errors"></div>
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </div>
     </div>
    </div>
  </div>
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