<?php
session_start();

if(isset($_SESSION['login_user']))
{

    unset($_SESSION['login_user']);

    if(!isset ($_SESSION['login_user']))
    {
        header("location:admin.php");

    }
}
?>
<html>
    <head>
        <title>Logout</title>
</head>
<body>
    <h2> You logged Out Successfully<h2>
    <button><a href="admin.php">
        Login Back
    </a>
</button>
</body>
</html>