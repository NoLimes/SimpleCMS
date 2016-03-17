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
$web->connection();
             if(!$web->hasRole('Administrator'))
            {
              $web->redirect('../');
            }

$web->navbarCheck();
 ?>


<!-- Page Content -->

<div class="container">
	<h2>Administration panel</h2>
  
 
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Menu<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
    <div class="jumbotron">

   <div class="row">

      		<div class="col-sm-12 col-md-12 col-lg-6 col-lg-push-3">
<?php 
$count = 1;
$sql = 'SELECT * FROM users';
$query=$user->getUsers($sql);


 
?>
 
<table class="table table-bordered">
<thead>
  <tr>
    <th>#</th>
    <th>E-mail</th>
    <th>Login</th>
    <th>Activated</th>
  </tr>
  <tbody>
    <?php foreach ($query as $row) :?>
<th scope="row"><?php echo $count++ ?></th>
<?php $id = $row['id']; ?>
<td query="email" id=<?php echo '"'.$id.'"'; ?> class="edit"><?php echo $row['email'] ?></td>
<td query="login"  id=<?php echo '"'.$id.'"'; ?> class="edit"><?php echo $row['login'] ?></td>
<td query="status"  id=<?php echo '"'.$id.'"'; ?> class="edit"><?php echo $row['status'] ?></td>

  </tbody>
  <?php endforeach;?>
</thead>
</table>


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