<!doctype html>
<head>
<title> Student details</title>
 <style>
     input[type=text]{
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  font-size : 17px;
  background-color: #bebebe;
  color: black;
}
      /* body{
            background-image: url('d.jpg');
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-size:cover;
        } */
        </style> 
</head>
<body>
   
 <div class="container">
    <h1> Student Details</h1>
    
    <form action="insert.php"  method="POST">

    <input type="text" name="name" placeholder="Enter student Name">
    <br>

    <input type="text" name="cont" placeholder="Enter student contact number">
    <br>

    <input type="text" name="email" placeholder="Enter student email address">
    <br>

    <input type="text" name="branch" placeholder="Enter student branch">
    <br>

    <input type="text" name="sscmarks" placeholder="Enter ssc marks">
    <br>

    <input type="text" name="diplomamarks" placeholder="Enter diploma marks">
    <br>

    <input type="text" name="degreemarks" placeholder="Enter degree marks">
    <br>

    <input type="text" name="admityear" placeholder="Enter admit year">
    <br>

    <input type="text" name="passingyear" placeholder="Enter passing year">
    <br>

    <button>Submit</button>

    <button> 
        <a href="admin.php">
            Admin Login
    </a>
    </button>
    <button>
        <a href="uform.php">
            Update student Details 
        </a>
    </button>

</form>

</body>
</html>