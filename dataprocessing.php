<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Processing | Tav Research</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons (for attractive visual accents) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Smooth scrolling & micro-interactions */
        html { scroll-behavior: smooth; }
        .hover-lift:hover { transform: translateY(-4px); transition: transform 0.2s ease; }
        .glass-header {
            background-color: rgba(255,255,255,0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        .dark .glass-header {
            background-color: rgba(17,24,39,0.8);
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .hero-overlay-gradient {
            background: linear-gradient(135deg, rgba(0,30,60,0.8) 0%, rgba(0,60,100,0.6) 100%);
        }
        .stat-card {
            transition: all 0.15s ease;
        }
        .stat-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.02);
        }
    </style>
</head>
<body class="bg-white dark:bg-gray-900 antialiased">

  <?php include 'components/common/header.php'?>

    <!-- ================= HERO SECTION (video behind header) ================= -->
    <section id="home" class="relative w-full overflow-hidden" style="margin-top: 0;"> <!-- header fixed, no extra margin needed -->
        <!-- Video Background (full section, behind header and content) -->
        <div class="absolute inset-0 w-full h-full z-0">
            <video src="assets/videos/dataprocessing.mp4" autoplay loop muted playsinline class="w-full h-full object-cover"></video>
            <!-- Rich gradient overlay for better text contrast -->
            <div class="absolute inset-0 hero-overlay-gradient"></div>
        </div>

        <!-- Hero content container (centered, with extra top padding to account for fixed header) -->
        <div class="relative z-10 container mx-auto px-4 flex items-center justify-center min-h-screen" style="padding-top: 80px;"> <!-- min-height screen for dramatic effect, but we can keep fixed height; let's do 90vh -->
            <div class="w-full max-w-4xl mx-auto text-center py-20 md:py-28">
                <!-- subtle pre-header -->
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-semibold tracking-wider text-white/90 bg-white/20 backdrop-blur-sm rounded-full border border-white/30">
                    <i class="fas fa-database mr-2"></i>ACCURATE • CLEAN • RELIABLE
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight drop-shadow-lg">
                    Data Processing
                </h1>
                <p class="mb-10 text-lg md:text-xl text-gray-100 leading-relaxed max-w-3xl mx-auto drop-shadow">
                    Our data processing services transform raw and unstructured survey responses into clean, reliable, and analysis-ready datasets. Through automated workflows and strict quality checks, we ensure accuracy, consistency, and confidence in every data point.
                </p>
                <!-- CTA buttons -->
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#" class="group bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-full font-semibold shadow-lg shadow-blue-600/30 flex items-center gap-2 transition-all hover:scale-105">
                        Explore capabilities <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="#" class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white border border-white/30 px-8 py-3.5 rounded-full font-semibold transition-all hover:scale-105">
                        Contact our team
                    </a>
                </div>
            </div>
        </div>

        <!-- small scroll indicator -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-white/60 text-xs flex flex-col items-center gap-1 animate-bounce z-20">
            <span>scroll</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- ================= MAIN CONTENT SECTION (enhanced cards, attractive layout) ================= -->
    <section class="container mx-auto my-20 lg:my-28 relative px-4 lg:px-6">
        <!-- section header with underline -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-blue-600 dark:text-blue-400 font-semibold text-sm tracking-widest uppercase">PRECISION DATA SOLUTIONS</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mt-3 mb-4">From raw responses to research‑ready insights</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 mx-auto rounded-full"></div>
        </div>

        <!-- Two column layout with redesigned cards (matching original structure but more visual) -->
        <div class="grid lg:grid-cols-2 gap-8 xl:gap-12 items-stretch">

            <!-- LEFT CARD: Data Processing Capabilities (expressive) -->
            <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl overflow-hidden border border-gray-100 dark:border-gray-700 hover-lift transition-all flex flex-col h-full">
                <div class="p-8 lg:p-10 flex-grow">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-14 h-14 bg-blue-50 dark:bg-blue-900/30 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-microchip text-3xl text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Our Data Processing Capabilities</h3>
                    </div>
                    
                    <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed mb-6">
                        We deliver comprehensive data processing solutions designed to ensure accuracy, reliability, and consistency across datasets, enabling faster insights and better decision-making.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 mb-8">
                        From simple survey datasets to large-scale, multi-country research projects, our team efficiently manages all levels of complexity while adhering to global data quality standards.
                    </p>

                    <!-- Feature blocks with icons (more visual than plain list) -->
                    <div class="space-y-6 mt-6">
                        <!-- item 1 -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-broom text-green-600 dark:text-green-400"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white text-lg">Data Cleaning & Validation</h4>
                                <p class="text-gray-500 dark:text-gray-400">Identification and removal of inconsistencies, duplicates, outliers, and incomplete responses to ensure high-quality datasets.</p>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-pen-fancy text-purple-600 dark:text-purple-400"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white text-lg">Open-Ended Coding</h4>
                                <p class="text-gray-500 dark:text-gray-400">Structured coding of verbatim responses using industry-standard codeframes and AI-assisted techniques.</p>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-amber-100 dark:bg-amber-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-table text-amber-600 dark:text-amber-400"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white text-lg">Data Structuring & Formatting</h4>
                                <p class="text-gray-500 dark:text-gray-400">Transformation of raw data into well-organized formats compatible with analytical, visualization, and reporting tools.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- subtle bottom accent -->
                <div class="h-1.5 w-full bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-500"></div>
            </div>

            <!-- RIGHT CARD: Business & Research Impact (redesigned as impact grid) -->
            <div class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800/80 dark:to-gray-900 rounded-3xl shadow-xl border border-gray-200 dark:border-gray-700 p-8 lg:p-10 flex flex-col h-full">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/40 rounded-xl flex items-center justify-center">
                        <i class="fas fa-chart-line text-2xl text-indigo-600 dark:text-indigo-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Business & Research Impact</h3>
                </div>

                <!-- impact items as a grid of compact cards with icons (more attractive than plain bullet list) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3 p-3 bg-white/60 dark:bg-gray-800/40 rounded-xl stat-card">
                        <i class="fas fa-chart-pie text-blue-500 mt-1"></i>
                        <span class="text-sm text-gray-700 dark:text-gray-200">Precise market trend measurement</span>
                    </div>
                    <div class="flex items-start gap-3 p-3 bg-white/60 dark:bg-gray-800/40 rounded-xl stat-card">
                        <i class="fas fa-users text-indigo-500 mt-1"></i>
                        <span class="text-sm text-gray-700 dark:text-gray-200">Clear consumer segment identification</span>
                    </div>
                    <div class="flex items-start gap-3 p-3 bg-white/60 dark:bg-gray-800/40 rounded-xl stat-card">
                        <i class="fas fa-scale-balanced text-green-500 mt-1"></i>
                        <span class="text-sm text-gray-700 dark:text-gray-200">Consistent competitive benchmarking</span>
                    </div>
                    <div class="flex items-start gap-3 p-3 bg-white/60 dark:bg-gray-800/40 rounded-xl stat-card">
                        <i class="fas fa-gauge-high text-amber-500 mt-1"></i>
                        <span class="text-sm text-gray-700 dark:text-gray-200">Faster turnaround, uncompromised accuracy</span>
                    </div>
                    <div class="flex items-start gap-3 p-3 bg-white/60 dark:bg-gray-800/40 rounded-xl stat-card">
                        <i class="fas fa-circle-check text-emerald-500 mt-1"></i>
                        <span class="text-sm text-gray-700 dark:text-gray-200">Improved confidence in decisions</span>
                    </div>
                    <div class="flex items-start gap-3 p-3 bg-white/60 dark:bg-gray-800/40 rounded-xl stat-card">
                        <i class="fas fa-globe text-sky-500 mt-1"></i>
                        <span class="text-sm text-gray-700 dark:text-gray-200">Compliance with global research standards</span>
                    </div>
                    <div class="flex items-start gap-3 p-3 bg-white/60 dark:bg-gray-800/40 rounded-xl stat-card">
                        <i class="fas fa-arrow-right-arrow-left text-purple-500 mt-1"></i>
                        <span class="text-sm text-gray-700 dark:text-gray-200">Enhanced cross-market comparisons</span>
                    </div>
                    <div class="flex items-start gap-3 p-3 bg-white/60 dark:bg-gray-800/40 rounded-xl stat-card">
                        <i class="fas fa-chart-scatter text-rose-500 mt-1"></i>
                        <span class="text-sm text-gray-700 dark:text-gray-200">Foundation for predictive analytics</span>
                    </div>
                    <div class="flex items-start gap-3 p-3 bg-white/60 dark:bg-gray-800/40 rounded-xl stat-card">
                        <i class="fas fa-message text-orange-500 mt-1"></i>
                        <span class="text-sm text-gray-700 dark:text-gray-200">Better utilization of qualitative data</span>
                    </div>
                </div>

                <!-- additional trust element / stat -->
                <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700 flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-database text-blue-500"></i>
                        <span class="text-sm text-gray-500 dark:text-gray-400">2M+ responses processed monthly</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-clock text-indigo-500"></i>
                        <span class="text-sm text-gray-500 dark:text-gray-400">99.8% accuracy rate</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo trust bar -->
        <div class="mt-20 flex flex-wrap items-center justify-center gap-8 lg:gap-12 opacity-70">
            <span class="text-sm uppercase tracking-wider text-gray-400 dark:text-gray-500 font-medium">trusted by</span>
            <i class="fas fa-chart-simple text-3xl text-gray-400"></i>
            <span class="text-xl font-light text-gray-500">IBM SPSS</span>
            <span class="text-xl font-semibold text-gray-600 dark:text-gray-300">ConfirmIT</span>
            <i class="fas fa-cloud text-2xl text-gray-400"></i>
            <span class="text-xl text-gray-500">Decipher</span>
        </div>
    </section>

    <!-- ========== CTA BANNER ========== -->
    <section class="bg-gradient-to-r from-indigo-900 to-blue-900 dark:from-indigo-950 dark:to-blue-950 py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to clean, code, and structure your data?</h3>
            <p class="text-blue-100 text-lg max-w-2xl mx-auto mb-8">Let our experts handle the complexity — you focus on insights.</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <button class="bg-white text-indigo-900 px-8 py-4 rounded-full font-semibold shadow-lg hover:shadow-2xl flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-calendar-check"></i> Schedule a consultation
                </button>
                <button class="border border-white/40 text-white px-8 py-4 rounded-full font-semibold hover:bg-white/10 transition flex items-center gap-2">
                    <i class="fas fa-envelope"></i> Send a message
                </button>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 py-8">
        <div class="container mx-auto px-4 text-center text-gray-500 dark:text-gray-400 text-sm">
            © 2025 Tav Research — precision data processing. All rights reserved.
        </div>
    </footer>
</body>
</html>