<?php session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php 

include $_SERVER['DOCUMENT_ROOT'].'/assets/headsection.php';
$user = new uzytkownik;
$web = new web;
$page = new page;
$user->connection();
    if(!$user->is_loggedin())
  {
    
   header("Location: ../");
  }
$web->connection();
$web->navbarCheck();

 ?>


<!-- Page Content -->

<div class="container">
	<h2>Settings of <?php echo $_SESSION['nickname']; ?> profile</h2>
    <hr>
<div class="jumbotron">
   <div class="row">

  <div class="row">
<div class="container">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Member since: <strong><?php echo $_SESSION['czas_session']; ?></strong>
        </div>
        </div>
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
      
        <h3>Personal info</h3>
        
        <form id="change" action="" class="form-horizontal" method="post" role="form" data-toggle="validator">

          <div class="form-group">

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <?php echo $_SESSION['email_session']; ?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <?php echo $_SESSION['nickname']; ?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Current password:</label>
            <div class="col-md-8">
              <input name="oldpw" class="form-control" type="password" data-minlength="6" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">New password:</label>
            <div class="col-md-8">
              <input name="newpw" class="form-control" type="password"  id="inputPassword" data-minlength="6" placeholder="Password"  required>
              <span class="help-block">Minimum of 6 characters</span>
            </div>
          </div>
                    <div class="form-group">
            <label class="col-md-3 control-label">Confirm new password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-error="Field is empty" data-match-error="Fields don`t match" placeholder="Confirm password" required>
            <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
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