<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<?php

include 'assets/headsection.php';
$user = new uzytkownik;
$web = new web;
$web->connection();

 ?>
<body>

    <?php 

if($web->hasRole('Administrator'))
{
	include $_SERVER['DOCUMENT_ROOT'].'/assets/loggedadminnav/navbar.php';
}
else
{


    if($web->is_loggedin())
	{
		
	include $_SERVER['DOCUMENT_ROOT'].'/assets/loggednav/navbar.php';
	}
	else
	{
    include $_SERVER['DOCUMENT_ROOT'].'/assets/unloggednav/navbar.php';
    }
}

$web->sessionInfo();
?>


<?php
 
include $_SERVER['DOCUMENT_ROOT'].'/assets/content.php';


include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.html';
     ?>

</body>

</html>
