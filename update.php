<?php
include("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a=$_POST['name'];
    $b=$_POST['cont'];
    $qry = mysqli_query($con, "UPDATE student SET s_cont='$b' WHERE s_name='$a' ");
     
    if($qry == true)
    {
        echo "Updated";

    }
    else{
        echo "not". mysqli_error();
    }
}
    else{
        echo "not post";
    }
?>