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
$page = new page;
$web->connection();
$web->navbarCheck();
$paginate=new page;
 ?>


<!-- Page Content -->

<div class="container">
	<h2>Contact with us!</h2>
    <hr>
<div class="jumbotron" id="jumbocontact">
   <div class="row">
      		<div class="col-sm-12 col-md-12 col-lg-6 col-lg-push-3">
<div class="col-sm-12 col-lg-12">
       
              
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form role="form" action="" id="mail" data-toggle="validator" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" name="name" class="form-control" data-error="Field is empty" id="inputName" placeholder="Enter name" required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmailcontact">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email" class="form-control" data-error="E-mail address is invalid" id="inputEmailcontact" placeholder="Enter email" required/></div>
                                <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
<label for="inputSubject">
                                Subject</label>
                            <input type="text" class="form-control" name="subject" data-error="Field is empty" id="inputSubject" placeholder="Enter subject" required />
                           <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputMessage">
                                Message</label>
                            <textarea name="message" id="inputMessage" name="message" data-error="Field is empty" class="form-control" rows="9" cols="25" required
                                placeholder="Message"></textarea>
                                <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form id="contact">
            <legend style="color:white;"><span style="color:white;" class="glyphicon glyphicon-globe"></span>Other contact forms</legend>
            <address>
                <strong>Steam</strong><br>
                <a href="http://steamcommunity.com/profiles/76561198044824120/"><img src="http://steamsignature.com/status/english/76561198044824120.png" alt="" title="" /></a><a href='steam://friends/add/76561198044824120'><img src='http://steamsignature.com/AddFriend.png'></a>
             </address>

            </form>

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