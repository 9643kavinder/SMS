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
         <div class="text-left" style="font-size:20px; margin-left:100px;">
        <a href="admindash.php">Back to Dashboard</a>
        </div>
        <form action="insertstudent.php" method="post" class="text-center" enctype="multipart/form-data">
        <div class="form-group">
        <label>Name</label>
            <input type="text" name="name" placeholder="enter name">
            </div>
             <div class="form-group">
            <label>Rollno</label>
            <input type="text" name="rollno" placeholder="enter rollno">
            </div>
             <div class="form-group">
             <label>City</label>
            <input type="text" name="city" placeholder="enter city">
            </div>
             <div class="form-group">
             <label>Contact</label>
            <input type="text" name="pcont" placeholder="enter contact">
            </div>
             <div class="form-group">
             <label>Standard</label>
            <input type="number" name="standard" placeholder="enter standard">
            </div>
             <div class="form-group">
             <label>Image : </label>
            <input type="file" name="image">
            </div>
            
        <input type="submit" name="submit" value="Submit">
        
        </form>
    </body>
</html>
<?php

if(isset($_POST['submit'])){
    include "../dbcon.php";
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $city=$_POST['city'];
    $pcont=$_POST['pcont'];
    $standard=$_POST['standard'];

    $imagename = ($_FILES['image']['name']);
    $tempname = ($_FILES['image']['tmp_name']);
    move_uploaded_file($tempname,"../dataimg/$imagename");
   
   $query="INSERT INTO student (name, rollno, city, pcont, standard, image) VALUES ('$name', '$rollno', '$city', '$pcont', '$standard', '$imagename')";
     

    $result = mysqli_query($connection,$query);
   
    if($result==true){
        ?>
<script>
    alert('student added succesfuly');
</script>
<?php
    }
    
   
    
}






?>
