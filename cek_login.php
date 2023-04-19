<?php
session_start();
include"koneksi.php";

$user=$_POST['user'];
$pass=$_POST['pass'];

$filter=mysqli_query($conn, "select * from login where user='$user' and pass='$pass'");
$cek=mysqli_num_rows($filter);
$data=mysqli_fetch_array($filter);

if($cek>0)
{
	$_SESSION['user']=$user;
	$_SESSION['pass']=$pass;
	$_SESSION['level']=$data['level'];
	$_SESSION['login']=true;

	header("location:home.php");
}
else{
	echo "<script>alert('Username Dan Password Salah Silahkan Ulangi Kembali');</script>";
	echo "<script>location='index.php';</script>";
}
?>

