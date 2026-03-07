<?php
include "../includes/db.php";

// Check if 'id' is present in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // 1. Pehle blog ki image fetch karte hain taaki server se use delete kiya ja sake
    $query = "SELECT image FROM blog WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        $imagePath = "uploads/" . $row['image'];
        
        // Agar image file server par exist karti hai, toh use delete (unlink) kar do
        if (!empty($row['image']) && file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // 2. Ab database se blog ka pura record delete karte hain
    $deleteStmt = $conn->prepare("DELETE FROM blog WHERE id = ?");
    $deleteStmt->bind_param("i", $id);
    
    if ($deleteStmt->execute()) {
        // Delete hone ke baad successfully wapas blogs.php par bhej dein
        header("Location: blogs.php");
        exit();
    } else {
        echo "Error deleting blog!";
    }
} else {
    // Agar URL mein ID nahi hai, toh direct blogs.php par bhej dein
    header("Location: blogs.php");
    exit();
}
?>