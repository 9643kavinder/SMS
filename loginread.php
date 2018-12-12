<?php include "dbcon.php";

$query = "SELECT * FROM admin";
$result = mysqli_query($connection,$query);
if(!$result){
    die('Query FAILED'.mysqli_error());
}

?>





<html>
<head>
    
    <title>
    
    document
    
    </title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
<body>
    <div class="container">
    
    <div class="col-sm-6">
        <?php 
        while($row = mysqli_fetch_assoc($result)){
           ?>
        <pre>
        <?php
            print_r($row);
            
            
        }
        
        ?>
        </pre>
    
        
        
        
        </div>
    
    
    
    </div>
    
    
    </body>


</html>