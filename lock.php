<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("location:admin.php");
}
include("config.php");
$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($con,"select * from admin where a_name='$user_check' ");
// $se_sql=mysqli_query($con,"select * from doctor where d_cont='$user_check' ");
// $s_sql=mysqli_query($con,"select * from doctor where d_email='$user_check' ");

$row=mysqli_fetch_array($ses_sql);


echo "Welcome " .$login_session=$row['a_name'];
// echo $login_session=$row['d_cont']; echo $login_session=$row['d_email'];

?>