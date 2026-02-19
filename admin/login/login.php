<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Tatva Research Admin Login</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
body { font-family: 'Inter', sans-serif; }
</style>
</head>

<body class="min-h-screen bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 flex items-center justify-center">

<div class="w-full max-w-md bg-white/10 backdrop-blur-lg p-8 rounded-3xl shadow-2xl border border-white/20">

<h2 class="text-3xl font-bold text-white text-center mb-6">
Tatva Research Admin
</h2>

<form action="login_process.php" method="POST" class="space-y-5">

<input type="email" name="email" placeholder="Email"
class="w-full p-3 rounded-xl bg-white/20 text-white placeholder-gray-300 outline-none">

<input type="password" name="password" placeholder="Password"
class="w-full p-3 rounded-xl bg-white/20 text-white placeholder-gray-300 outline-none">

<button class="w-full py-3 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl text-white font-semibold hover:scale-105 transition">
Login
</button>

</form>

</div>

</body>
</html>
