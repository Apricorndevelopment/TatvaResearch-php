
<?php
include "includes/db.php";

$email = "researchtatva@gmail.com";
$password = password_hash("admin123", PASSWORD_DEFAULT);

$conn->query("INSERT INTO admins (email,password) VALUES ('$email','$password')");

echo "Admin created";
?>
