<?php
include('connect.php');
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contactno'];
if($name==''){
    $msg= "name is required";
}else if($contact==''){
    $msg= "contact is required";
}
else if($email==''){
    $msg= "email is required";
}
else{
$query = "INSERT INTO contact(`name`,`contactno`,`email`)VALUES('$name','$contact','$email')";

if(mysqli_query($con, $query)){
    $msg= "Inserted";
}
else{
    $msg ="error occured".mysqli_error($con);
}
}
header('location:../view.php?msg='.$msg);
?>