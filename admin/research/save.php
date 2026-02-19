<?php include '../includes/db.php';
$imageName=$_FILES['image']['name'];
$tmp= $_FILES['image']['tmp_name'];
move_uploaded_file($tmp,"uploads/".$imageName);
$title=$_POST['title'];
$slug=$_POST['slug'];
$excerpt=$_POST['excerpt'];
$category=$_POST['category'];


$stmt= $conn-> prepare("INSERT Into research(title,slug,image,category,Description)values(?,?,?,?,?)");
$stmt->bind_param("sssss",$title,$slug,$imageName,$category,$excerpt);
$stmt->execute();

header("Location: research.php");                                                                                                                                                                                                                                              
?>
