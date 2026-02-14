<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verbatim Coding | Tav Research</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons for attractive visuals -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* smooth behavior & micro-interactions */
        html { scroll-behavior: smooth; }
        .hover-lift:hover { transform: translateY(-4px); transition: transform 0.2s ease; }
        /* glass header effect */
        .glass-header {
            background-color: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        .dark .glass-header {
            background-color: rgba(17,24,39,0.85);
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        /* hero overlay gradient */
        .hero-overlay-gradient {
            background: linear-gradient(135deg, rgba(20,40,70,0.85) 0%, rgba(40,70,120,0.65) 100%);
        }
        .stat-badge {
            transition: all 0.2s;
        }
        .stat-badge:hover {
            background-color: rgba(255,255,255,0.15);
        }
    </style>
</head>
<body class="bg-white dark:bg-gray-900 antialiased">

    <!-- ========== HEADER (glass effect, fixed, includes original include) ========== -->
    <?php
    // include 'components/header.php';
    // For demonstration, we craft a header matching the design language
    ?>
    <header class="fixed top-0 left-0 w-full z-50 glass-header py-4 px-6">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo / brand -->
            <a href="#" class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-800 to-indigo-600 dark:from-blue-300 dark:to-indigo-200">
                TAV RESEARCH
            </a>
            <!-- Navigation (desktop) -->
            <nav class="hidden md:flex space-x-8 text-sm font-medium text-gray-700 dark:text-gray-200">
                <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Home</a>
                <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Services</a>
                <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Methodologies</a>
                <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Contact</a>
            </nav>
            <!-- mobile icon -->
            <button class="md:hidden text-gray-700 dark:text-gray-200 text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- ================= HERO SECTION (video behind header) ================= -->
    <section id="home" class="relative w-full overflow-hidden min-h-screen flex items-center" style="margin-top: 0;">
        <!-- Video background (full cover) -->
        <div class="absolute inset-0 w-full h-full z-0">
            <video src="assets/videos/verbatimcodings.mp4" autoplay loop muted playsinline class="w-full h-full object-cover"></video>
            <!-- Rich overlay for text readability -->
            <div class="absolute inset-0 hero-overlay-gradient"></div>
        </div>

        <!-- Centered hero content (with top padding for header) -->
        <div class="relative z-10 container mx-auto px-4 py-24 lg:py-32">
            <div class="w-full max-w-4xl mx-auto text-center">
                <!-- subtle pre-header chip -->
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-semibold tracking-wider text-white/90 bg-white/20 backdrop-blur-sm rounded-full border border-white/30">
                    <i class="fas fa-message mr-2"></i>QUALITATIVE INSIGHTS • STRUCTURED PRECISION
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight drop-shadow-lg">
                    Verbatim Coding
                </h1>
                <p class="mb-10 text-lg md:text-xl text-gray-100 leading-relaxed max-w-3xl mx-auto drop-shadow">
                    Our verbatim coding services transform open-ended survey responses
                    into structured, reliable, and insight-ready qualitative data that
                    integrates seamlessly with quantitative analysis—empowering research
                    teams to make confident, evidence-based decisions.
                </p>
                <!-- CTA buttons -->
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#" class="group bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-full font-semibold shadow-lg shadow-blue-600/30 flex items-center gap-2 transition-all hover:scale-105">
                        Explore methodology <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="#" class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white border border-white/30 px-8 py-3.5 rounded-full font-semibold transition-all hover:scale-105">
                        Request a quote
                    </a>
                </div>
            </div>
        </div>

        <!-- gentle scroll indicator -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-white/60 text-xs flex flex-col items-center gap-1 animate-bounce z-20">
            <span>discover</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- ================= MAIN CONTENT SECTION (enhanced two-column) ================= -->
    <section class="container mx-auto my-20 lg:my-28 relative px-4 lg:px-6">
        <!-- section header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-blue-600 dark:text-blue-400 font-semibold text-sm tracking-widest uppercase">STRUCTURED • CONSISTENT • INSIGHTFUL</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mt-3 mb-4">Turning open‑ended feedback into analytical assets</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 xl:gap-12 items-stretch">
            
            <!-- LEFT CARD: Our Verbatim Coding Approach (redesigned with icon blocks) -->
            <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl overflow-hidden border border-gray-100 dark:border-gray-700 hover-lift transition-all flex flex-col h-full">
                <div class="p-8 lg:p-10 flex-grow">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-14 h-14 bg-indigo-50 dark:bg-indigo-900/30 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-pen-to-square text-3xl text-indigo-600 dark:text-indigo-400"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Our Verbatim Coding Approach</h3>
                    </div>

                    <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed mb-6">
                        Our structured verbatim coding approach ensures that open-ended responses are analyzed consistently and objectively while preserving the true voice of the respondent.
                    </p>

                    <!-- Key value props as visual grid with icons (first set) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-start gap-3 p-3 bg-gray-50 dark:bg-gray-700/40 rounded-xl stat-card">
                            <i class="fas fa-ear-listen text-green-600 dark:text-green-400 mt-1"></i>
                            <span class="text-sm text-gray-700 dark:text-gray-200">Authentic voice of customer</span>
                        </div>
                        <div class="flex items-start gap-3 p-3 bg-gray-50 dark:bg-gray-700/40 rounded-xl stat-card">
                            <i class="fas fa-magnifying-glass-chart text-blue-600 dark:text-blue-400 mt-1"></i>
                            <span class="text-sm text-gray-700 dark:text-gray-200">Reveal key drivers & attitudes</span>
                        </div>
                        <div class="flex items-start gap-3 p-3 bg-gray-50 dark:bg-gray-700/40 rounded-xl stat-card">
                            <i class="fas fa-diagram-project text-purple-600 dark:text-purple-400 mt-1"></i>
                            <span class="text-sm text-gray-700 dark:text-gray-200">Identify emerging themes</span>
                        </div>
                        <div class="flex items-start gap-3 p-3 bg-gray-50 dark:bg-gray-700/40 rounded-xl stat-card">
                            <i class="fas fa-people-group text-amber-600 dark:text-amber-400 mt-1"></i>
                            <span class="text-sm text-gray-700 dark:text-gray-200">Accurate segmentation</span>
                        </div>
                    </div>

                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        We follow a rigorous coding framework combining manual expertise with AI-assisted techniques, ensuring scalability without compromising accuracy or consistency.
                    </p>

                    <!-- Second set: coding framework specifics with left icon list (more detailed) -->
                    <div class="space-y-4 mt-4">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-code-branch text-blue-600 dark:text-blue-400 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Customized codeframes</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Client-approved frameworks tailored to study objectives.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-green-100 dark:bg-green-900/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check-double text-green-600 dark:text-green-400 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Multi-level QC & inter-coder reliability</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Rigorous checks for consistency and accuracy.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-purple-100 dark:bg-purple-900/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-language text-purple-600 dark:text-purple-400 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Multi-language & multi-market</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Support for global studies with linguistic nuance.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-amber-100 dark:bg-amber-900/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-chart-simple text-amber-600 dark:text-amber-400 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Seamless integration</h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Directly compatible with survey data & reporting outputs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- colored accent strip -->
                <div class="h-1.5 w-full bg-gradient-to-r from-indigo-400 via-blue-500 to-purple-500"></div>
            </div>

            <!-- RIGHT CARD: Results You Can Rely On + extra insights -->
            <div class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800/80 dark:to-gray-900 rounded-3xl shadow-xl border border-gray-200 dark:border-gray-700 p-8 lg:p-10 flex flex-col h-full">
                <div class="flex items-center gap-3 mb-8">
                    <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900/40 rounded-xl flex items-center justify-center">
                        <i class="fas fa-medal text-2xl text-emerald-600 dark:text-emerald-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Results You Can Rely On</h3>
                </div>

                <p class="text-gray-600 dark:text-gray-300 text-lg mb-6">
                    With our verbatim coding expertise, open-ended feedback becomes a powerful source of insight rather than a processing challenge.
                </p>

                <p class="text-gray-600 dark:text-gray-300 mb-8">
                    The outcome is reliable, consistent, and insight-rich qualitative data that strengthens research findings, enhances storytelling, and drives informed business and strategic decisions across markets.
                </p>

                <!-- impact / differentiators as highlighted cards -->
                <div class="grid grid-cols-1 gap-4 mt-4">
                    <div class="flex items-center gap-4 p-4 bg-white dark:bg-gray-800/60 rounded-2xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-50 dark:bg-blue-900/30 rounded-full flex items-center justify-center">
                            <i class="fas fa-chart-line text-blue-600 dark:text-blue-400 text-xl"></i>
                        </div>
                        <div>
                            <span class="font-bold text-gray-900 dark:text-white">Insight-rich storytelling</span>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Qualitative depth meets quantitative rigor.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white dark:bg-gray-800/60 rounded-2xl shadow-sm">
                        <div class="w-12 h-12 bg-indigo-50 dark:bg-indigo-900/30 rounded-full flex items-center justify-center">
                            <i class="fas fa-bullseye text-indigo-600 dark:text-indigo-400 text-xl"></i>
                        </div>
                        <div>
                            <span class="font-bold text-gray-900 dark:text-white">Strategic confidence</span>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Evidence-based decisions across markets.</p>
                        </div>
                    </div>
                </div>

                <!-- quick stats for credibility -->
                <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700 flex flex-wrap gap-6">
                    <div>
                        <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">98%</span>
                        <span class="block text-xs text-gray-500 dark:text-gray-400">inter‑coder reliability</span>
                    </div>
                    <div>
                        <span class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">40+</span>
                        <span class="block text-xs text-gray-500 dark:text-gray-400">languages supported</span>
                    </div>
                    <div>
                        <span class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">15k</span>
                        <span class="block text-xs text-gray-500 dark:text-gray-400">verbatims/day capacity</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- trust bar with logos (optional) -->
        <div class="mt-20 flex flex-wrap items-center justify-center gap-8 lg:gap-12 opacity-70">
            <span class="text-sm uppercase tracking-wider text-gray-400 dark:text-gray-500 font-medium">trusted by leading research firms</span>
            <i class="fas fa-comment-dots text-3xl text-gray-400"></i>
            <span class="text-xl font-light text-gray-500">Qualtrics</span>
            <span class="text-xl font-semibold text-gray-600 dark:text-gray-300">Nebu</span>
            <i class="fas fa-database text-2xl text-gray-400"></i>
        </div>
    </section>

    <!-- ========== CTA SECTION ========== -->
    <section class="bg-gradient-to-r from-indigo-900 to-blue-900 dark:from-indigo-950 dark:to-blue-950 py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to unlock the power of open‑ended responses?</h3>
            <p class="text-blue-100 text-lg max-w-2xl mx-auto mb-8">From codeframe development to full‑scale coding — we’re here to help.</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <button class="bg-white text-indigo-900 px-8 py-4 rounded-full font-semibold shadow-lg hover:shadow-2xl flex items-center gap-2 transition hover:scale-105">
                    <i class="fas fa-calendar-check"></i> Schedule a consultation
                </button>
                <button class="border border-white/40 text-white px-8 py-4 rounded-full font-semibold hover:bg-white/10 transition flex items-center gap-2">
                    <i class="fas fa-envelope"></i> Send your codeframe
                </button>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 py-8">
        <div class="container mx-auto px-4 text-center text-gray-500 dark:text-gray-400 text-sm">
            © 2025 Tav Research — precision verbatim coding. All rights reserved.
        </div>
    </footer>
</body>
</html>