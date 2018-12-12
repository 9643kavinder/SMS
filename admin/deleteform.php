<?php
include "../dbcon.php";
   $id= $_REQUEST['sid'];
   $query="DELETE FROM student WHERE id='$id'";
     

    $result = mysqli_query($connection,$query);
   
    if($result==true){
        ?>
<script>
    alert('data deleted succesfuly');
    window.open('deletestudent.php','_self');
</script>
<?php
    }
?>