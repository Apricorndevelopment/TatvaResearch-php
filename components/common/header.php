<!-- ===== HEADER (includes/header.php) ===== -->
<header class="absolute top-0 left-0 w-full z-50 py-5 px-6 md:px-10 sm:px-5 bg-transparent">
<div class="container mx-auto flex justify-between items-center">
        
    <!-- Logo Area -->
    <div class="flex items-center space-x-3">
        
        <div class="w-14 h-14 rounded-4xl flex items-center justify-center shadow-3xl bg-white/20 backdrop-blur-sm">
            <img src="assets/images/logo.png" alt="Tatva Research and Analysis Logo" class="w-12 h-12 object-contain drop-shadow-lg">
        </div>

        <div class="flex flex-col leading-tight">
            <span class="text-white font-bold text-xl md:text-2xl tracking-tight">
                Tatva<span class="font-light text-blue-200">Research</span>
            </span>
            <span class="text-blue-200/80 text-xs font-light tracking-wider -mt-1">
                Analysis & Insights
            </span>
        </div>
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex space-x-8 text-white/90 font-medium">
        <a href="index.php" class="hover:text-white transition">Home</a>
        <a href="about.php" class="hover:text-white transition">About Us</a>
        <a href="blog.php" class="hover:text-white transition">Blog</a>
        <a href="services.php" class="hover:text-white transition">Services</a>
        <a href="research.php" class="hover:text-white transition">Research</a>
        <a href="contact.php" class="hover:text-white transition">Contact</a>
    </nav>

    <!-- Right Section -->
    <div class="flex items-center space-x-4">
        
        <!-- Desktop Button -->
        <button class="hidden md:block bg-white/20 backdrop-blur-sm px-5 py-2 rounded-full text-white text-sm font-semibold hover:bg-white/30 transition border border-white/30 shadow-lg">
            Get insights
        </button>

        <!-- Hamburger Button (Mobile Only) -->
        <button id="menu-btn" class="md:hidden text-white text-2xl focus:outline-none">
            ☰
        </button>
    </div>

</div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden bg-black/90 backdrop-blur-md w-full absolute top-full left-0 py-6 px-6 space-y-4 text-white font-medium">

    <a href="index.php" class="block hover:text-blue-300">Home</a>
    <a href="about.php" class="block hover:text-blue-300">About Us</a>
    <a href="blog.php" class="block hover:text-blue-300">Blog</a>
    <a href="services.php" class="block hover:text-blue-300">Services</a>
    <a href="research.php" class="block hover:text-blue-300">Research</a>
    <a href="contact.php" class="block hover:text-blue-300">Contact</a>

    <button class="mt-4 w-full bg-white text-black py-2 rounded-full font-semibold">
        Get insights
    </button>

</div>
</header>

<!-- JavaScript -->
<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>