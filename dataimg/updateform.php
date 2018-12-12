<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}
else{
    header('location:../login.php');
}
?>
<?php
include "../dbcon.php";
    $sid= $_GET['sid'];

$sql= "SELECT * FROM student WHERE id= '$sid'";
$run= mysqli_query($connection,$sql);
$data= mysqli_fetch_assoc($run);



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
         <form action="updatedata.php" method="post" class="text-center" enctype="multipart/form-data">
        <div class="form-group">
        <label>Name</label>
            <input type="text" name="name" value=<?php echo $data['name'] ?> >
            </div> 
             <div class="form-group">
            <label>Rollno</label>
            <input type="text" name="rollno" value=<?php echo $data['rollno'] ?>>
            </div>
             <div class="form-group">
             <label>City</label>
            <input type="text" name="city" value=<?php echo $data['city']?> >
            </div>
             <div class="form-group">
             <label>Contact</label>
            <input type="text" name="pcont" value=<?php echo $data['pcont']?> >
            </div>
             <div class="form-group">
             <label>Standard</label>
            <input type="number" name="standard" value=<?php echo $data['standard']?> >
            </div>
             <div class="form-group">
             <label>Image : </label>
            <input type="file" name="image">
            </div>
           <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">    
        <input type="submit" name="submit" value="Submit">
        
        </form>
    </body>
</html>
