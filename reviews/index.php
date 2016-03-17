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
	<h2>Write a short review for us!</h2>
    <hr>
<div class="jumbotron">
   <div class="row">
      		<div class="col-sm-12 col-md-12 col-lg-6 col-lg-push-3">
        
            <?php 

            if($web->is_loggedin())
            {
                echo '<form method="post" action="../logic/dodaj.php" role="form" data-toggle="validator">';
                echo '<textarea rows="4" cols="50" name="text" class="form-control" id="inputName" data-minlength="10" placeholder="Minimum 10 characters" data-error="Nickname is invalid" required></textarea>';
                echo '<div class="help-block with-errors"></div>';
                echo '<button type="submit" class="btn btn-primary">Post it</button>';
                echo '</form>';
                echo '<br>';
                echo '<hr>';
            }
            else
            {
              echo '<div class="alert alert-warning" role="alert">Only logged users can write a review.</div>';
            }

             ?>
             <?php
             
    

             ?>

      
          
        <?php 
        $query = "SELECT * FROM users INNER JOIN opinie ON idusera=users.id ORDER BY opinie.czas DESC";       
        $records_per_page=10;
        $newquery = $paginate->paging($query,$records_per_page);
        $paginate->dataview($newquery);
        ?>
        <div class="col-sm-12 col-md-12 col-lg-12">
        <ul class="pagination">
        <?php
        $paginate->paginglink($query,$records_per_page);  
        ?>
      
      </ul>
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