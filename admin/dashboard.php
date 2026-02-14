<?php
require 'auth.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex">

    <!-- Sidebar -->
    <div class="w-64 bg-indigo-900 text-white min-h-screen p-6">
        <h2 class="text-xl font-bold mb-8">Tatva Admin</h2>

        <ul>
            <li class="mb-4"><a href="#" class="hover:text-gray-300">Dashboard</a></li>
            <li class="mb-4"><a href="#" class="hover:text-gray-300">Manage Content</a></li>
            <li class="mb-4"><a href="logout.php" class="hover:text-gray-300">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-10">
        <h1 class="text-3xl font-bold mb-6">Welcome, <?= $_SESSION['admin']; ?> 👋</h1>

        <div class="grid grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold">Total Visitors</h3>
                <p class="text-2xl mt-2">1,245</p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold">Active Campaigns</h3>
                <p class="text-2xl mt-2">8</p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold">New Messages</h3>
                <p class="text-2xl mt-2">15</p>
            </div>
        </div>
    </div>

</div>

</body>
</html>
