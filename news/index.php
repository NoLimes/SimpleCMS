<?php
ob_start();
session_start()


 ?>
<?php 


?>
<!DOCTYPE html>
<html lang="en">

<?php 

include $_SERVER['DOCUMENT_ROOT'].'/assets/headsection.php';
$user = new uzytkownik;
$web = new web;
$web->connection();
$web->navbarCheck();
$paginate=new page;
if(isset($_GET['id']))
{
$id = intval($_GET['id']);
            if(is_int($id))
            {

                $single_news = $web->getSingleNews($id);
               if(empty($single_news))
               {
                   $_SESSION['brak_news'] = '<div class="alert alert-danger" role="alert"> <p class="text-center">This post is not exist</p></div>';
                    header('Location: ../');
               }


            }






}


 ?>


<!-- Page Content -->

<div class="container">
	<h2>Details about news!</h2>
    <hr>
<div class="jumbotron">
   <div class="row">
      		<div class="col-sm-12 col-md-12 col-lg-8">

                        <h2><?php echo $single_news['tresc'];?></h2>
                        <hr style="margin-bottom:8px !important">
                <div id="head-news">
                <div class="col-xs 12 col-sm-12 col-md-12 col-lg-12">

                    <span class="newsinfo glyphicon glyphicon-user" aria-hidden="true"><span class="newsfont"><?php echo $single_news['login'];?></span></span>
                    <span class="newsinfo glyphicon glyphicon-time" aria-hidden="true"><span class="newsfont"><?php echo $single_news['data'];?></span></span>
                        </div>
                </div>
                        <div style = "background-color:#090A0A;" class="jumbotron">

                            <div class="thumbnail">
                                <img src="../img/php.png" alt="">

                            </div>
                            <?php echo $single_news['tresc'];?>
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