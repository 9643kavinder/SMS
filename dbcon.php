<?php
global $connection;
$connection = mysqli_connect('localhost','root','','sms');
if(!$connection){
    echo " not connected";
}

?>
