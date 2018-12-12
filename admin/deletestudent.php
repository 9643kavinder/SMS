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
        <table align="center">
        <form action="deletestudent.php" method="post">
            
        
    
            
            <tr>
                <th>Standard</th>
                <td><input type="number" name="standard" placeholder="enter standard"></td>
        
            
           
             <th>Name</th>
                <td> <input type="text" name="name" placeholder="enter new name"></td>
        
        
    
                <td colspan="2"> <input type="submit" value="Search" name="submit"></td>
        
            
            </tr> 
            
        </form>
        
        </table>
        
  <table align="center" border="1" width="80%" style="margin-top:10px;">
        
        <tr style="background-color:black; color:white;">
    <th>No</th>
    <th>Image</th>
    <th>Name</th>
    <th>Rollno</th>
    <th>Delete</th>
      
      
      
      </tr>
      <?php

if(isset($_POST['submit'])){
    
    include "../dbcon.php";
    $standard= $_POST['standard'];
$name= $_POST['name'];
    $sql= "SELECT * FROM student WHERE standard='$standard' AND name LIKE '%$name%'";
    $run= mysqli_query($connection,$sql);
    $row= mysqli_num_rows($run);
    if(($row<1)){
        echo "<tr><td colspan='5'>No records found</td></tr>";
    }
    else{
        $count=0;
        while($data= mysqli_fetch_assoc($run)){
            $count++;
            ?>
       <tr>
    <td><?php echo $count; ?></td>
    <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;"/></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['rollno']; ?></td>
    <td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
      
      
      
      </tr>
      <?php
        }
        
    }
}
?>
        
        </table>      
        
        
        
    </body>
    
    
</html>


