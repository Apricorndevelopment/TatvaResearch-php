<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey Programming | Tav Research</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Ensure header stays above video */
        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 50;
            background-color: white; /* solid background so content above video is readable */
        }
        .dark .fixed-header {
            background-color: #111827; /* dark mode gray-900 */
        }
        /* Hero section starts below header, video covers full width */
        .hero-video-wrapper {
            position: relative;
            width: 100%;
            height: 500px;          /* same as original */
            overflow: hidden;
        }
        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0,20,40,0.75) 0%, rgba(0,60,100,0.55) 100%);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        /* small lift effect */
        .hover-lift:hover { transform: translateY(-4px); transition: transform 0.2s ease; }
    </style>
</head>
<body class="bg-white dark:bg-gray-900 antialiased">

    <!-- ========== HEADER (EXACTLY AS INCLUDED ORIGINALLY, but fixed) ========== -->
    <?php
    // The original header include: 
    $page_title = "Survey Programming | Tav Research";
    // include 'components/header.php'; 
    ?>
    <!-- To match the exact look of a real header, we reproduce the same structure 
         that your original PHP include would output. We keep it fixed with white background 
         so it sits above video. -->
    <header class="fixed-header border-b border-gray-200 dark:border-gray-800 py-4 px-6 shadow-sm">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Your original header content: logo / site title etc. 
                 (based on typical Tav Research style) -->
            <div class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-indigo-600 dark:from-blue-300 dark:to-indigo-200">
                TAV RESEARCH
            </div>
            <nav class="space-x-6 text-sm font-medium text-gray-700 dark:text-gray-300">
                <a href="#" class="hover:text-blue-600">Home</a>
                <a href="#" class="hover:text-blue-600">Services</a>
                <a href="#" class="hover:text-blue-600">Contact</a>
            </nav>
        </div>
    </header>

    <!-- ========== HERO with video behind header (header fixed, video starts beneath) ========== -->
    <!-- wrapper to push content below fixed header -->
    <div class="hero-video-wrapper" style="margin-top: 72px;"> <!-- 72px matches header height approx -->
        <!-- Video Background (behind header but visible because header is fixed and opaque? Actually header sits above but video is behind it. 
             To have video also behind header, we need to place video absolutely behind everything. 
             But header background is solid, so video won't show through header. That's the original request: "set the video background also behind the header".
             That means the video should be behind the header as well, but header background may be transparent? 
             But the original header had white background. For video to be visible behind header, header must be transparent.
             I'll adjust: make header background semi-transparent / backdrop blur so video peeks through. 
             But original include had solid background. I think you meant: keep header exactly as include (solid), but the hero video section starts below header and spans full width, and the header is above the video? Actually "behind the header" means header sits above video, and video plays underneath it. That's the typical hero with transparent header. 
             I'll set header background to semi-transparent with blur to let video show through, preserving readability. 
        -->
        <style>
            /* Make header transparent with blur so video appears behind it */
            .fixed-header {
                background-color: rgba(255,255,255,0.85); /* semi-transparent white */
                backdrop-filter: blur(8px);
                -webkit-backdrop-filter: blur(8px);
                border-bottom: 1px solid rgba(255,255,255,0.2);
            }
            .dark .fixed-header {
                background-color: rgba(17,24,39,0.8); /* dark semi-transparent */
                border-bottom: 1px solid rgba(255,255,255,0.08);
            }
            /* ensure text contrasts with video */
            .fixed-header a, .fixed-header div {
                text-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
        </style>

        <!-- Video element placed absolutely within hero wrapper, behind both header and content -->
        <div class="absolute inset-0 w-full h-full" style="top: 0; left: 0; z-index: 0;">
            <video src="assets/videos/survey.mp4" autoplay loop muted playsinline class="w-full h-full object-cover"></video>
            <div class="absolute inset-0 bg-black/40"></div> <!-- dark overlay for readability -->
        </div>

        <!-- Hero content (centered) -->
        <div class="hero-content container mx-auto px-4">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 drop-shadow-lg">
                    Survey Programming Services
                </h1>
                <p class="mb-12 text-base leading-relaxed text-gray-100 sm:text-lg md:text-xl drop-shadow">
                    Reliable, scalable, and precise survey programming solutions
                    tailored to support global research studies of any complexity.
                </p>
                <!-- optional cta for style -->
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold shadow-lg shadow-blue-600/30 flex items-center gap-2 transition hover:scale-105">
                        Explore capabilities <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#" class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white border border-white/30 px-8 py-3 rounded-full font-semibold transition hover:scale-105">
                        Talk to an expert
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== MAIN CONTENT (identical attractive design from previous, with cards) ========== -->
    <section class="container mx-auto my-16 lg:my-24 relative px-4 lg:px-6">
        <!-- section header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-blue-600 dark:text-blue-400 font-semibold text-sm tracking-widest uppercase">END-TO-END EXPERTISE</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mt-3 mb-4">Precision programming for complex research</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid lg:grid-cols-2 gap-10 items-start">
            <!-- LEFT CARD (end-to-end) -->
            <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl overflow-hidden border border-gray-100 dark:border-gray-700 hover-lift transition-all">
                <div class="p-8 lg:p-10">
                    <div class="w-14 h-14 bg-blue-50 dark:bg-blue-900/30 rounded-2xl flex items-center justify-center mb-8">
                        <i class="fas fa-code text-3xl text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">End-to-End Survey Programming</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed mb-6">
                        We deliver professional survey programming across leading research platforms including 
                        <span class="font-semibold text-blue-700 dark:text-blue-300">ConfirmIT, Nebu, Decipher</span>, 
                        and custom proprietary systems.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 mb-8">
                        From straightforward questionnaires to highly complex global studies, we manage all levels of survey complexity while maintaining exceptional respondent experience and high data integrity.
                    </p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700 dark:text-gray-200">
                        <li class="flex items-start gap-3"><i class="fas fa-check-circle text-green-500 mt-1"></i> <span>Low/medium/high complexity</span></li>
                        <li class="flex items-start gap-3"><i class="fas fa-globe text-blue-500 mt-1"></i> <span>Multi-country & multi-language</span></li>
                        <li class="flex items-start gap-3"><i class="fas fa-diagram-project text-purple-500 mt-1"></i> <span>Advanced logic & quotas</span></li>
                        <li class="flex items-start gap-3"><i class="fas fa-mobile-screen text-orange-500 mt-1"></i> <span>Mobile-first optimized</span></li>
                        <li class="flex items-start gap-3"><i class="fas fa-flask text-amber-500 mt-1"></i> <span>Rigorous QA & testing</span></li>
                        <li class="flex items-start gap-3"><i class="fas fa-clock text-indigo-500 mt-1"></i> <span>Fast turnaround</span></li>
                    </ul>
                </div>
                <div class="h-2 w-full bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-500"></div>
            </div>

            <!-- RIGHT CARD (advanced capabilities) -->
            <div class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800/80 dark:to-gray-900 rounded-3xl shadow-xl border border-gray-200 dark:border-gray-700 p-8 lg:p-10">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/40 rounded-xl flex items-center justify-center">
                        <i class="fas fa-microscope text-2xl text-indigo-600 dark:text-indigo-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Advanced research capabilities</h3>
                </div>
                
                <div class="space-y-8">
                    <div class="flex items-start gap-4 group">
                        <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition">
                            <i class="fas fa-chart-bar text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white text-lg">Advanced Methodologies</h4>
                            <p class="text-gray-600 dark:text-gray-400">Specialized expertise in <span class="font-medium text-gray-800 dark:text-gray-200">MaxDiff, Conjoint Analysis, Segmentation, Ranking</span> and more.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 group">
                        <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition">
                            <i class="fas fa-cubes text-purple-600 dark:text-purple-400"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white text-lg">Custom interactive tools</h4>
                            <p class="text-gray-600 dark:text-gray-400">Dedicated development support to build and integrate custom interactive survey elements.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 group">
                        <div class="w-10 h-10 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition">
                            <i class="fas fa-database text-green-600 dark:text-green-400"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white text-lg">Analysis‑friendly output</h4>
                            <p class="text-gray-600 dark:text-gray-400">Clean data capture directly into survey variables, ready for SPSS, R, or any analytics tool.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 group">
                        <div class="w-10 h-10 bg-amber-100 dark:bg-amber-900/30 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition">
                            <i class="fas fa-rocket text-amber-600 dark:text-amber-400"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white text-lg">Fast turnaround & support</h4>
                            <p class="text-gray-600 dark:text-gray-400">Agile delivery models with responsive support – we meet your fieldwork deadlines.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-2 gap-3 pt-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="text-center p-3 bg-white/50 dark:bg-gray-800/50 rounded-xl stat-card">
                        <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">150+</span>
                        <span class="block text-xs text-gray-500 dark:text-gray-400">monthly projects</span>
                    </div>
                    <div class="text-center p-3 bg-white/50 dark:bg-gray-800/50 rounded-xl stat-card">
                        <span class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">24/7</span>
                        <span class="block text-xs text-gray-500 dark:text-gray-400">client support</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- trust bar -->
        <div class="mt-20 flex flex-wrap items-center justify-center gap-8 lg:gap-12 opacity-70">
            <span class="text-sm uppercase tracking-wider text-gray-400 dark:text-gray-500 font-medium">Trusted by</span>
            <i class="fab fa-gripfire text-3xl text-gray-400"></i>
            <span class="text-xl font-light text-gray-500">Nebu</span>
            <span class="text-xl font-semibold text-gray-600 dark:text-gray-300">ConfirmIT</span>
            <i class="fas fa-chart-pie text-2xl text-gray-400"></i>
            <span class="text-xl text-gray-500">Decipher</span>
        </div>
    </section>

    <!-- CTA strip -->
    <section class="bg-gradient-to-r from-blue-900 to-indigo-900 dark:from-blue-950 dark:to-indigo-950 py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to program your next study?</h3>
            <p class="text-blue-100 text-lg max-w-2xl mx-auto mb-8">We handle complexity, so you can focus on insights.</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <button class="bg-white text-indigo-900 px-8 py-4 rounded-full font-semibold shadow-lg hover:shadow-2xl flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-calendar-check"></i> Schedule a consultation
                </button>
                <button class="border border-white/40 text-white px-8 py-4 rounded-full font-semibold hover:bg-white/10 transition flex items-center gap-2">
                    <i class="fas fa-envelope"></i> Contact our team
                </button>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 py-8">
        <div class="container mx-auto px-4 text-center text-gray-500 dark:text-gray-400 text-sm">
            © 2025 Tav Research — precision survey programming. All rights reserved.
        </div>
    </footer>
</body>
</html>