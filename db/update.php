<?php
include('connect.php');
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contactno'];
$id = $_POST['id'];
if($name==''){
    $msg= "name is required";
}else if($contact==''){
    $msg= "contact is required";
}
else if($email==''){
    $msg= "email is required";
}
else{
$query = "UPDATE contact SET name='$name',email='$email',contactno='$contact' WHERE id='$id'";

if(mysqli_query($con, $query)){
    $msg= "Updated";
}
else{
    $msg ="error occured".mysqli_error($con);
}
}
header('location:../view.php?msg='.$msg);
?>