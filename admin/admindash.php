<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}
else{
    header('location:../login.php');
}



?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>admin dashboard</title>
    
    </head>
    <body>
    <h1 class="text-center" style="background-color:black; color:white; margin-top:50px;" >WELOCOME TO ADMIN DASHBOARD</h1>
        <div class="text-right" style="font-size:20px; margin-right:100px;">
        <a href="logout.php">logout</a>
        </div>
        <div class="container-fluid">
    <div class="text-center" style="font-size:30px; margin-left:600px; border:5px solid black; margin-right:600px; margin-top:200px;">
    1. <a href="insertstudent.php">INSERT STUDENT</a>
        <br>
        2. <a href="updatestudent.php">UPDATE STUDENT</a>
        <br>
    3. <a href="deletestudent.php">DELETE STUDENT</a>
    <br>
    </div>
</div>
</body>
</html>

   

    



