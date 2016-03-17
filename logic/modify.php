<?php 
session_start();


require_once('webclass.php');

$user = new uzytkownik;

$web =  new web;

if(isset($_POST['newpw']))
{

	if(!$_POST['newpw']==NULL)
	{



   $o_pw  = $_POST['oldpw'];
   $n_pw  = $_POST['newpw'];
   $id    = $_SESSION['user_session'];
 
   
$sql= "SELECT haslo FROM users WHERE id='".$id."'";

if(password_verify($o_pw,$user->getPass($sql)))
{
	if($o_pw!=$n_pw)
	{
		$n_pw_hashed=password_hash($n_pw, PASSWORD_DEFAULT);
		$sql= "UPDATE users SET haslo='".$n_pw_hashed."' WHERE id='".$id."'";
		if($user->updatePass($sql)){
			echo 'true';
		}

	}
	else
	{
	echo 'same';
	}
}
else
{
	echo 'false';
}

}
else
{
	echo 'empty';
}
	


}
else
{
	$user->redirect('../');
}

?>