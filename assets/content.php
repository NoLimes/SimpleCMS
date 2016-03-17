<?php
$dump = $web->getNews();

?>

<!-- Page Content -->
 </div>
<div class="container">

    <h2 class="tagline"><strong>Harmless.pl</strong> - steam group community</h2>
    <hr>

     
            <div class="jumbotron">
  <div class="row">
<div id="error"></div>

           <div class="col-xs 12 col-sm-12 col-md-12 col-lg-12">

                <div class="row carousel-holder hidden-xs">


                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="../img/passion.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../img/creativity.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../img/modern.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>


      <?php foreach($dump as $row): ?>
                        <div class="row">

<div class="col-xs 12 col-sm-12 col-md-12 col-lg-8">
    <h2><?php echo $row['tresc'];?></h2>
    <hr style="margin-bottom:8px !important">
    <div style = "background-color:#090A0A;" class="jumbotron">

                        <div class="thumbnail">
                            <img src="../img/php.png" alt="">

                           </div>

                     <span class="newsinfo glyphicon glyphicon-comment" aria-hidden="true"><span class="newsfont"> 12</span></span>


                     <span class="newsinfo glyphicon glyphicon-time" aria-hidden="true"><span class="newsfont"><?php echo $row['data'];?></span></span>


                           <a  href=<?php echo '"news/?id='.$row['NewsId'].'"'; ?> type="button" style ="border-radius:0px !important" class="btn btn-default pull-right">Read more</a>


                        </div>

</div>
</div>
      <?php endforeach; ?>

<br>
<br>
<br>
<br>
    <!-- /.container -->