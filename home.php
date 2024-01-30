<?php
include "lock.php";
?>
<html>
<h1>Welcome to home page</h1>
<button><a href="logout.php">logout</a></button>
</html>


<!--<html>**code for search**
<form action="" method="POST">
Search By user Value:<br>
<input type="text" name="searchname"><br>
<input type="submit" name="search">
</form>
</html>
?php 
require_once("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$search=$_POST["searchname"];
	$qry=mysqli_query($con, "SELECT * FROM customer WHERE c_name 
	LIKE '%$search%' OR c_cont LIKE '%$search%'");
	while ($row = mysqli_fetch_array($qry))
	{
		echo$row["c_id"]."<br>";
		echo$row["c_name"]."<br>";
		echo$row["c_mail"]."<br>";
		echo$row["c_cont"]."<br><br>";
		
	}
	//print_r($row);
}
?-->


<!--code for searchtable-->
<html>
    <head>
        <style>

            table 
            {

                border-style : solid;

                border-width : 5px;

                border-color : pink;

            }
        </style>
    </head>
    <form action="" method="POST">
        Search by user value<br>
        <input type="text" name="searchname">
        <br>

        <input type="text" name="searchname1"><br>

        <input type="submit" name="search">

    </form>
</html>

<?php 
require_once("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $search = $_POST["searchname"];
    $search1 = $_POST["searchname1"];
    $qry = mysqli_query($con,"SELECT * from student WHERE s_name LIKE '%$search%' OR s_cont LIKE '%$search1%' ");

    echo "<table border='1'>

    <tr>

    <th>id</th>

    <th> name</th>

    <th>contact</th>

    <th> email</th>

    <th> branch</th>

    <th>sscmarks</th>

    <th>diplomamarks</th>

    <th>degreemarks</th>

    <th>admityear</th>

    <th>passingyear</th>

    </tr>";

    while($row = mysqli_fetch_array($qry))
    {

        echo "<tr>";

        echo "<td>" .$row['s_id'] . "</td>";

        echo "<td>" .$row['s_name'] . "</td>";

        echo "<td>" .$row['s_cont'] . "</td>";

        echo "<td>" .$row['s_email'] . "</td>";

        echo "<td>" .$row['s_branch'] . "</td>";

        echo "<td>" .$row['s_sscmarks'] . "</td>";
        
        echo "<td>" .$row['s_diplomamarks'] . "</td>";
        
        echo "<td>" .$row['s_degreemarks'] . "</td>";
        
        echo "<td>" .$row['s_admityear'] . "</td>";
        
        echo "<td>" .$row['s_passingyear'] . "</td>";
        

        echo "</tr>";
    }

    echo "</table>";

    // print_r($row);
}
?>