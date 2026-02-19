<!-- ===== HEADER (includes/header.php) ===== -->
<header class="absolute top-0 left-0 w-full z-50 py-5 px-6 md:px-10 bg-transparent">
<div class="container mx-auto flex justify-between items-center">
        
    <!-- Logo Area -->
    <div class="flex items-center space-x-3">
        
        <!-- Logo Box - Made bigger with better presentation -->
        <div class="w-14 h-14 rounded-4xl flex items-center justify-center shadow-3xl bg-white/20 backdrop-blur-sm  ">
            <img src="assets/images/logo.png" alt="Tatva Research and Analysis Logo" class="w-16 h-16 object-contain drop-shadow-lg">
        </div>

        <!-- Brand Name - Updated styling for better visibility -->
        <div class="flex flex-col leading-tight">
            <span class="text-white font-bold text-2xl tracking-tight">
                Tatva<span class="font-light text-blue-200">Research</span>
            </span>
            <span class="text-blue-200/80 text-xs font-light tracking-wider -mt-1">
                Analysis & Insights
            </span>
        </div>
    </div>

        <!-- Navigation -->
        <nav class="hidden md:flex space-x-8 text-white/90 font-medium">
            <a href="index.php" class="hover:text-white transition">Home</a>
            <a href="about.php" class="hover:text-white transition">About Us</a>
            <a href="blog.php" class="hover:text-white transition">Blog</a>
          <a href="services.php" class="hover:text-white transition">Services</a>
          <a href="research.php" class="hover:text-white transition">Research</a>
          
          
            <a href="contact.php" class="hover:text-white transition">Contact</a>
        </nav>

        <!-- Button -->
        <div class="flex items-center space-x-4">
            <button class="bg-white/20 backdrop-blur-sm px-5 py-2 rounded-full text-white text-sm font-semibold hover:bg-white/30 transition border border-white/30 shadow-lg">
                Get insights
                <i class="fas fa-arrow-right ml-1 text-xs"></i>
            </button>
        </div>

    </div>
</header>