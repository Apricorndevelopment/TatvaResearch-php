<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle ?? "Tatva Research"; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? ''; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Dark Mode Support -->
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>
<body class="bg-white dark:bg-gray-900">

<!-- NAVBAR -->
<header class="fixed top-0 left-0 w-full bg-white dark:bg-gray-800 shadow-md z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-black dark:text-white">
            Tatva Research
        </h1>
        <nav class="space-x-6">
            <a href="index.php" class="text-gray-700 dark:text-gray-300 hover:text-blue-600">Home</a>
            <a href="about.php" class="text-gray-700 dark:text-gray-300 hover:text-blue-600">About</a>
            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-blue-600">Contact</a>
        </nav>
    </div>
</header>

<div class="mt-[90px]">
