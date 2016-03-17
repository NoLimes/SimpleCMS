<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/logic/webclass.php';
$web=new uzytkownik;
$web->connection();
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{
$code=$_GET['code'];
$stmt = $web->handler->prepare("SELECT COUNT(id) FROM users WHERE activation=:code");
$stmt->bindValue(':code',$code, PDO::PARAM_STR);
$stmt->execute(); 
$result = $stmt->fetch();
if($result[0]>0)
{
$stmt = $web->handler->prepare("SELECT COUNT(id) FROM users WHERE activation=:code AND status='0'");
$stmt->bindValue(':code',$code, PDO::PARAM_STR);
$stmt->execute(); 	
$result=$stmt->fetch();

if($result[0]==1)
{

$stmt = $web->handler->prepare("UPDATE users SET status='1' WHERE activation=:code");
$stmt->bindValue(':code',$code, PDO::PARAM_STR);
$stmt->execute(); 
$_SESSION['poprawna_rejestracja']='<div class="alert alert-success" role="alert"> Your account is activated!</div>';
$web->redirect('../');
}
else
{
$_SESSION['nieudana_rejestracja']='<div class="alert alert-warning" role="alert"> Your account is already active!</div>';
$web->redirect('../');
}

}
else
{
$_SESSION['nieudana_rejestracja']='<div class="alert alert-danger" role="alert"> Invalid activation code!</div>';
$web->redirect('../');
}

}
?>
