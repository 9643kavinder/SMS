<?php
include "dbcon.php";
include "functions.php";
?>




<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>
    student management system
    </title>
    
    
    </head>
<body style="margin-top:100px;">
    <h4 class="text-right"><a href="login.php">adminlogin</a></h3>
    <h1 class="text-center">
        Student Management System
    </h1>
    <form action="" method="post" class="text-center">
        <div class="form-group">
    <input type="number" name="standard" placeholder="enter standard">
        </div>
         <div class="form-group">
        <input type="number" name="rollno" placeholder="enter rollno">
        </div>
         <div class="form-group">
        <input type="submit" name="submit" value="Submit">
        </div>
    
    
    
    </form>
    
    
    </body>


</html>
<?php
if(isset($_POST['submit'])){
include "dbcon.php";
    $standard= $_POST['standard'];
    $rollno= $_POST['rollno'];
    
    $query= "SELECT * FROM student WHERE rollno= '$rollno' AND standard= '$standard'";
    $run= mysqli_query($connection,$query);
    $row= mysqli_num_rows($run);
    if($row>0){
        $data= mysqli_fetch_assoc($run);
        ?>
<table border="1" style="width:50%; margin-top:20px;" align="center">
<tr>
    <th colspan="3" align="center">Student Details</th>
    </tr>
    <tr>
    <td rowspan="5"><img src="dataimg/<?php echo $data['image'];?>" style="max-height:150px; max-width:120px; padding-left:20px;"></td>
        <th align="center">Rollno</th>
        <td align="center"><?php echo $data['rollno'];  ?></td>
    </tr>
    <tr>
   
        <th align="center">Name</th>
        <td align="center"><?php echo $data['name'];  ?></td>
    </tr>
<tr>
   
        <th align="center">Standard</th>
        <td align="center"><?php echo $data['standard'];  ?></td>
    </tr>
    <tr>
   
        <th align="center">Parents contact no.</th>
        <td align="center"><?php echo $data['pcont'];  ?></td>
    </tr>
    <tr>
   
        <th align="center">City</th>
        <td align="center"><?php echo $data['city'];  ?></td>
    </tr>





</table>

<?php
        
        
        
    }
    else{
        ?>
        <script>
alert('no student found');
</script>
<?php
            
    }

    

}



?>
