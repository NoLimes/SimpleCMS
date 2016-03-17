<!-- Modal -->
<form action="/logic/registration.php" method="post" role="form" data-toggle="validator">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" style="color:black;" id="myModalLabel">Registration</h4>
      </div>
      <div class="modal-body" style="color:black;">
        <div class="row">
             <div class="col-sm-12 col-md-12 col-lg-6">
     <div class="form-group">
    <label for="inputEmail" class="control-label">E-mail</label>
    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" data-error="E-mail address is invalid" required>
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
      <input type="password" name="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password"  required>
   
      <span class="help-block">Minimum of 6 characters</span>
    </div>
    <div class="form-group col-lg-6">
      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-error="Field is empty" data-match-error="Fields don`t match" placeholder="Confirm" required>
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
    </div>
  </div>
     </div>
    </div>
  </div>
</div>

     
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </div>
  </div>
</div>
</form>











<!-- Navigation -->

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../">O.R. Site</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/reviews/">Reviews</a>
                    </li>
                    <li>
                        <a href="/contact/">Contact</a>
                    </li>
            
                </ul>
                                <ul class="nav navbar-nav navbar-right">
                    
                      <li class="dropdown hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log in<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <form class="form"  method="post">
                <div class="container-fluid">
            <li><div class="form-group">
    <input type="email" name="email1" class="form-control" id="inputEmailajax" placeholder="E-mail">
    </li>
            <li><div class="form-group">
   
    <input type="password" name="password1" class="form-control" id="inputPasswordajax" placeholder="Password"></div></li>
            
            <li role="separator" class="divider"></li>
            <li><button id="button" type="submit" class="btn btn-default center-block">Submit</button></li>
            </form>
            </div>
        </li>
    </ul>
    
                    <li>
                      <hr class="hidden-lg hidden-md hidden-sm"> 

                      <a href="../sign-in/" class="btn-mute hidden-lg hidden-md hidden-sm">Sign up</a>
                      <a href="../log-in/" class="btn-mute hidden-lg hidden-md hidden-sm">Log in</a>
                      </li>
                      <li>
                      <button type="button" class="btn btn-primary btn-md navbar-btn pull-right hidden-xs" data-toggle="modal" data-target="#myModal"> Sign up
                        </button>
                        
                    </li>
                    </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        
        <!-- /.container -->
    </nav>