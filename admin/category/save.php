<?php include'../includes/db.php';
$category=$_POST['categoryname'];
$stmt= $conn->prepare("Insert into  category(name)values(?)");
$stmt->bind_param("s",$category);
$stmt->execute();
header("location:category.php");
?>