<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tatva Admin Header</title>
<script src="https://cdn.tailwindcss.com"></script>

<script>
tailwind.config = {
  darkMode: 'class'
}
</script>
</head>

<body class="bg-gray-100 dark:bg-gray-900 transition">

<header class="bg-white dark:bg-gray-800 shadow px-6 py-3 flex items-center justify-between">

   <!-- Logo Area -->
    <div class="flex items-center space-x-3">
        
        <!-- Logo Box - Made bigger with better presentation -->
        <div class="w-14 h-14 rounded-4xl flex items-center justify-center shadow-3xl bg-white/20 backdrop-blur-sm  ">
            <img src="../../assets/images/logo.png" alt="Tatva Research and Analysis Logo" class="w-16 h-16 object-contain drop-shadow-lg">
        </div>

        <!-- Brand Name - Updated styling for better visibility -->
        <div class="flex flex-col leading-tight">
            <span class="text-black font-bold text-2xl tracking-tight">
                Tatva<span class="font-light text-black-200">Research</span>
            </span>
            <span class="text-black-200/80 text-xs font-light tracking-wider -mt-1">
                Analysis & Insights
            </span>
        </div>
    </div>

  <!-- Search -->
  <div class="flex-1 max-w-md mx-6">
    <input
      type="text"
      placeholder="Search..."
      class="w-full px-4 py-2 rounded-lg border dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500"
    >
  </div>

  <!-- Right Actions -->
  <div class="flex items-center gap-4">

    <!-- Notification -->
    <button class="relative text-gray-600 dark:text-gray-300 text-xl">
      🔔
      <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1">3</span>
    </button>

    <!-- Theme Toggle -->
    <button onclick="toggleTheme()" class="text-xl">
      🌙
    </button>

  </div>

</header>

<script>
function toggleTheme(){
  document.documentElement.classList.toggle('dark')
}
</script>

</body>
</html>
