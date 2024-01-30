<?php
include("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a=$_POST['name'];
    $b=$_POST['cont'];
    $c=$_POST['email'];
    $d=$_POST['branch'];
    $e=$_POST['sscmarks'];
    $f=$_POST['diplomamarks'];
    $g=$_POST['degreemarks'];
    $h=$_POST['admityear'];
    $i=$_POST['passingyear'];

   





    $qry=mysqli_query($con,"INSERT INTO tpo.student(s_name, s_cont, s_email, s_branch, s_sscmarks, s_diplomamarks, s_degreemarks, s_admityear, s_passingyear)VALUES('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i') ");

    if($qry == true)
    {
        echo "<center>". "Inserted"."</center>";
        header("location:studentf.php");
    }
    else
    {
        echo "not".mysqli_error($con);
    }
}
else{

    echo"REQUEST METHOD IS NOT POST";
}

?>

