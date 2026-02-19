<?php
include "../includes/db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$message = mysqli_real_escape_string($conn,$_POST['message']);

$sql="INSERT INTO contacts(name,email,message)
VALUES('$name','$email','$message')";




// Problem -page redirect nhi hora
if($conn->query($sql)){
    header("Location: ../../contact.php");
    exit;
}else{
    echo "Error saving message";
}
}
?>
