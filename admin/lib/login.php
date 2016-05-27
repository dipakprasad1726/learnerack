<?php
require_once("define.php");
require_once("mysql.php");

$link=new MySQL(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$username=mysqli_real_escape_string($link->conn,$_POST['username']);
$password=mysqli_real_escape_string($link->conn,$_POST['password']);
$data=$link->query("select * from lc_users where username='$username' and password='$password' limit 1;");
session_start();
if($data->num_rows==1){
	$user_id= $data->row["u_id"];
	$username=$data->row["username"];	
	$_SESSION['user']=$username;  
    $_SESSION['u_id'] = $user_id;
    $_SESSION['success'] = "Success";
    echo($_SESSION['user']);
	header('Location:../dashboard.php');
}
else
{
	$_SESSION['error'] = "error";	
	header('Location:../index.php');
}
?>