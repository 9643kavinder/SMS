<?php

include "dbcon.php";

?>

<?php
function showalldata(){
    global $connection;
$query = "SELECT * FROM student";
$result = mysqli_query($connection, $query);
if(!$result){
    die('Query FAILED'. mysqli_error());
}

while($row = mysqli_fetch_assoc($result)){
                   echo $row['id'];
               }
}
?>