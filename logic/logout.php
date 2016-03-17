<?php
	require_once('session.php');
	require_once('uzytkownikclass.php');
	$user_logout = new uzytkownik();
	
	if(!$session->is_loggedin())
	{
		// session no set redirects to login page
		$session->redirect('../');
	}
	if(isset($_SESSION['user_session']))
	{
		$user_logout->doLogout();
		$user_logout->redirect('../');
	}
