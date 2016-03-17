
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
                    <li><a href="../administration/" class="btn-mute hidden-lg hidden-md hidden-sm">Administrator panel</a></li>
                    <li><a href="../settings/" class="btn-mute hidden-lg hidden-md hidden-sm">Settings</a></li>
                  <li><a href="../logic/logout.php" class="btn-mute hidden-lg hidden-md hidden-sm">Logout</a></li>
          
          
                    <li class="dropdown hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nickname']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">

         <li><a href="/administration/index.php"><p class="text-center"><strong>Administration panel</strong></p></a></li>
         <li><a href="/settings/"><p class="text-center"><strong>Settings</strong></p></a></li>
            <li><a href="/logic/logout.php"><p class="text-center"><strong>Logout</strong></p></a></li>
            
            
        </li>
    </ul>
                    
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    