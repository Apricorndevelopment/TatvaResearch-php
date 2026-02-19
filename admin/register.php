<?php
require "includes/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO admins (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashedPassword);

    if ($stmt->execute()) {

        // Redirect to login page after success
        header("Location: login.php");
        exit;

    } else {
        echo "Error: " . $stmt->error;
    }
}
?>





    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Register</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-900 to-slate-800 min-h-screen flex items-center justify-center">

<div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-8">

    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
        Register Admin
    </h2>

    <form method="POST" class="space-y-5">

        <!-- Email -->
        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Email Address
            </label>
            <input type="email" name="email"
                   placeholder="admin@example.com"
                   required
                   class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
        </div>

        <!-- Password -->
        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Password
            </label>
            <input type="password" name="password"
                   placeholder="Enter password"
                   required
                   class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
        </div>

        <!-- Button -->
        <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition duration-300">
            Register
        </button>

        <p class="text-xs text-gray-400 text-center">
            Secure admin setup
        </p>

    </form>

</div>

</body>
</html>
