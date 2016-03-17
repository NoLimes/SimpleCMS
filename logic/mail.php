<?php 
if(isset($_POST['email'])&&$_POST['email']!=''&&isset($_POST['name'])&&$_POST['name']!=''&&isset($_POST['subject'])&&$_POST['subject']!=''&&isset($_POST['message'])&&$_POST['message']!='')
{
$email = strip_tags($_POST['email']);
$name = strip_tags($_POST['name']);
$subject = strip_tags($_POST['subject']);
$message = strip_tags($_POST['message']);

if(mail('NoLimes@harmless.pl',$subject,$message,'From: '.$email))
{
	echo 'true';
}
}
else
{
	echo 'false';
}


 ?>