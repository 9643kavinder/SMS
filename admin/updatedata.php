<?php
include "../dbcon.php";
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $city=$_POST['city'];
    $pcont=$_POST['pcont'];
    $standard=$_POST['standard'];
    $id= $_POST['sid'];
    $imagename = ($_FILES['image']['name']);
    $tempname = ($_FILES['image']['tmp_name']);
    move_uploaded_file($tempname,"../dataimg/$imagename");
   
   $query="UPDATE student SET rollno = '$rollno', name='$name', city='$city', pcont='$pcont', standard='$standard', image='$image' WHERE id='$id'";
     

    $result = mysqli_query($connection,$query);
   
    if($result==true){
        ?>
<script>
    alert('data added succesfuly');
    window.open('updateform.php?sid=<?php echo $id;?>','_self');
</script>
<?php
    }
?>