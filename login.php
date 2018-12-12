<?php
session_start();
if(isset($_SESSION['uid'])){
    header('location:admin/admindash.php');
}
?>

<html>

<head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>
    admin login
    
    </title>
    
    
    </head>
<body style="margin-top:100px;">
    
    <h1 align="center">ADMIN LOGIN</h1>
    <div class="container" align="center">
    <div class="col-sm-6">
        <form action="login.php" method="post">
        <div class="form-group">
        <label>USERNAME</label>
            <input type="text" name="username" placeholder="username" required>
            
        </div>
        <div class="form-group">
        <label>PASSWORD</label>
            <input type="password" name="password" placeholder="password" required>
            
        </div>
        <input type="submit" class="btn btn-primary" name="login" value="LOGIN">
        </form>
        
        </div>
    
    
    </div>
    </body>



</html>
<?php 
include "dbcon.php";
global $connection;
?>

<?php
if(isset($_POST['login'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query="SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result=mysqli_query($connection,$query);
    $row = mysqli_num_rows($result);
    
    if($row < 1){
        ?>
        <script>
alert('username or password not match!');
    window.open('login.php','_self');
</script>
<?php
    }
else{
 $data = mysqli_fetch_assoc($result);
        $id= $data['id'];
    $_SESSION['uid']= $id;
   // header('location:admin/admindash.php');
}
    
}
   
    




?>