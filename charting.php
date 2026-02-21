<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Analytical & Predictive Trend Intelligence | Tav Research</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons for visual accents -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* smooth behavior */
        html { scroll-behavior: smooth; }
        .hover-lift:hover { transform: translateY(-4px); transition: transform 0.2s ease; }
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
        .hero-overlay-gradient {
            background: linear-gradient(135deg, rgba(10,30,50,0.85) 0%, rgba(30,60,100,0.7) 100%);
        }
        .stat-card {
            transition: all 0.15s ease;
        }
        .stat-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.02);
        }
        .feature-badge {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255,255,255,0.2);
        }
    </style>
</head>
<body class="bg-white dark:bg-gray-900 antialiased">

 <?php include 'components/common/header.php'?>

    <!-- ================= HERO SECTION (video behind header) ================= -->
    <section id="home" class="relative w-full overflow-hidden min-h-screen flex items-center" style="margin-top: 0;">
        <div class="absolute inset-0 w-full h-full z-0">
            <video src="assets/videos/charting.mp4" autoplay loop muted playsinline class="w-full h-full object-cover"></video>
            <div class="absolute inset-0 hero-overlay-gradient"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 py-24 lg:py-32">
            <div class="w-full max-w-5xl mx-auto text-center">
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-semibold tracking-wider text-white/90 bg-white/20 backdrop-blur-sm rounded-full border border-white/30">
                    <i class="fas fa-chart-line mr-2"></i>AI-POWERED FORESIGHT • REAL-TIME INTELLIGENCE
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight drop-shadow-lg">
                    Analytical & Predictive <br class="hidden sm:block">Trend Intelligence
                </h1>
                <p class="mb-10 text-lg md:text-xl text-gray-100 leading-relaxed max-w-4xl mx-auto drop-shadow">
                    Our analytical and predictive intelligence framework enables organizations to move beyond reporting into anticipation. By combining AI-driven analytics with advanced charting, we uncover patterns, forecast outcomes, and support proactive decision-making.
                </p>
                <!-- feature badges (reimagined from original) -->
                <div class="flex flex-wrap justify-center gap-3 mb-10">
                    <span class="feature-badge rounded-full px-5 py-2.5 text-sm text-white flex items-center gap-2"><i class="fas fa-satellite-dish"></i> Real-Time Market Signals</span>
                    <span class="feature-badge rounded-full px-5 py-2.5 text-sm text-white flex items-center gap-2"><i class="fas fa-chart-pie"></i> Consumer, Brand & Category Insights</span>
                    <span class="feature-badge rounded-full px-5 py-2.5 text-sm text-white flex items-center gap-2"><i class="fas fa-brain"></i> Predictive & Trend Modeling</span>
                </div>
                <!-- CTA buttons -->
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#" class="group bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-full font-semibold shadow-lg shadow-blue-600/30 flex items-center gap-2 transition-all hover:scale-105">
                        Explore platform <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="#" class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white border border-white/30 px-8 py-3.5 rounded-full font-semibold transition-all hover:scale-105">
                        Request a demo
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-white/60 text-xs flex flex-col items-center gap-1 animate-bounce z-20">
            <span>discover</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- ================= AI CHARTING SECTION (redesigned with cards & icons) ================= -->
    <section class="bg-white dark:bg-gray-900 py-20 lg:py-28">
        <div class="container mx-auto px-4">

            <div class="mx-auto max-w-3xl text-center mb-16">
                <span class="text-blue-600 dark:text-blue-400 font-semibold text-sm tracking-widest uppercase">INTELLIGENT VISUALIZATION</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mt-3 mb-4">AI-Driven Charting & Visualization</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">
                    We leverage AI-powered visualization engines to convert complex datasets into clear, actionable insights.
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 mx-auto rounded-full mt-6"></div>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                <!-- Card 1 -->
                <div class="group bg-gray-50 dark:bg-gray-800 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 border border-gray-100 dark:border-gray-700">
                    <div class="w-14 h-14 bg-blue-100 dark:bg-blue-900/30 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i class="fas fa-robot text-3xl text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-gray-900 dark:text-white">Automated Chart Intelligence</h3>
                    <p class="text-gray-600 dark:text-gray-400">AI selects optimal chart types based on data structure and analytical goals—eliminating guesswork.</p>
                </div>
                <!-- Card 2 -->
                <div class="group bg-gray-50 dark:bg-gray-800 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 border border-gray-100 dark:border-gray-700">
                    <div class="w-14 h-14 bg-indigo-100 dark:bg-indigo-900/30 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i class="fas fa-table-columns text-3xl text-indigo-600 dark:text-indigo-400"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-gray-900 dark:text-white">Interactive Dashboards</h3>
                    <p class="text-gray-600 dark:text-gray-400">Dynamic, filterable dashboards allow stakeholders to explore trends and drill down in real time.</p>
                </div>
                <!-- Card 3 -->
                <div class="group bg-gray-50 dark:bg-gray-800 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 border border-gray-100 dark:border-gray-700">
                    <div class="w-14 h-14 bg-amber-100 dark:bg-amber-900/30 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i class="fas fa-lightbulb text-3xl text-amber-600 dark:text-amber-400"></i>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-gray-900 dark:text-white">Insight-First Design</h3>
                    <p class="text-gray-600 dark:text-gray-400">Every visualization focuses on clarity and meaning, ensuring the narrative behind data is never lost.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PREDICTIVE ANALYTICS (enhanced two-column) ================= -->
    <section class="bg-gray-50 dark:bg-gray-800/60 py-20 lg:py-28">
        <div class="container mx-auto grid lg:grid-cols-2 gap-12 items-center px-4">

            <!-- left content -->
            <div>
                <span class="text-blue-600 dark:text-blue-400 font-semibold text-sm tracking-widest uppercase">FORECASTING • MODELING</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mt-3 mb-6">Predictive Analytics & Forecasting</h2>
                <p class="mb-8 text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                    Our predictive analytics models integrate historical data, market signals, and AI to anticipate trends before they emerge.
                </p>

                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700 dark:text-gray-200">
                    <li class="flex items-center gap-2"><i class="fas fa-chart-line text-blue-500"></i> Market demand forecasting</li>
                    <li class="flex items-center gap-2"><i class="fas fa-users text-indigo-500"></i> Consumer behavior prediction</li>
                    <li class="flex items-center gap-2"><i class="fas fa-trophy text-amber-500"></i> Brand performance modeling</li>
                    <li class="flex items-center gap-2"><i class="fas fa-cubes text-purple-500"></i> Scenario planning & simulation</li>
                    <li class="flex items-center gap-2"><i class="fas fa-seedling text-green-500"></i> Growth opportunity identification</li>
                </ul>
            </div>

            <!-- right card (enhanced) -->
            <div class="bg-white dark:bg-gray-900 rounded-3xl p-10 shadow-xl border border-gray-100 dark:border-gray-700 hover-lift">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 bg-indigo-50 dark:bg-indigo-900/30 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-chart-scatter text-2xl text-indigo-600 dark:text-indigo-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Why Predictive Visualization Matters</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed">
                    Helps organizations plan proactively, allocate resources with confidence, and make strategic decisions based not just on history, but on likely futures.
                </p>
                <!-- small stat -->
                <div class="mt-8 flex items-center gap-6 pt-6 border-t border-gray-200 dark:border-gray-700">
                    <div><span class="text-2xl font-bold text-blue-600">85%</span> <span class="text-sm text-gray-500">forecast accuracy</span></div>
                    <div><span class="text-2xl font-bold text-indigo-600">2.5x</span> <span class="text-sm text-gray-500">faster scenario modeling</span></div>
                </div>
            </div>

        </div>
    </section>

    <!-- ================= TOOLS & STACK (redesigned with icons and better cards) ================= -->
    <section class="bg-white dark:bg-gray-900 py-20 lg:py-28">
        <div class="container mx-auto px-4">

            <div class="mx-auto max-w-3xl text-center mb-16">
                <span class="text-blue-600 dark:text-blue-400 font-semibold text-sm tracking-widest uppercase">TECHNOLOGY ECOSYSTEM</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mt-3 mb-4">Tools & Analytics Stack</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">
                    Our ecosystem combines cutting-edge AI technologies with robust research infrastructure.
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 mx-auto rounded-full mt-6"></div>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-6 text-center shadow-md hover:shadow-lg transition stat-card group">
                    <div class="w-14 h-14 mx-auto bg-blue-100 dark:bg-blue-900/30 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                        <i class="fas fa-brain text-2xl text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Machine Learning & AI Models</h3>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-6 text-center shadow-md hover:shadow-lg transition stat-card group">
                    <div class="w-14 h-14 mx-auto bg-green-100 dark:bg-green-900/30 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                        <i class="fas fa-language text-2xl text-green-600 dark:text-green-400"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Natural Language Processing</h3>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-6 text-center shadow-md hover:shadow-lg transition stat-card group">
                    <div class="w-14 h-14 mx-auto bg-purple-100 dark:bg-purple-900/30 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                        <i class="fas fa-diagram-project text-2xl text-purple-600 dark:text-purple-400"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Automated Data Pipelines</h3>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-6 text-center shadow-md hover:shadow-lg transition stat-card group">
                    <div class="w-14 h-14 mx-auto bg-amber-100 dark:bg-amber-900/30 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                        <i class="fas fa-chart-gantt text-2xl text-amber-600 dark:text-amber-400"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Visualization Engines</h3>
                </div>
            </div>

            <!-- extra trust element -->
            <div class="mt-16 flex flex-wrap justify-center items-center gap-10 opacity-70">
                <span class="text-sm text-gray-400">integrated with</span>
                <i class="fab fa-python text-2xl text-gray-500"></i>
                <span class="text-xl font-light text-gray-500">R</span>
                <i class="fas fa-chart-simple text-2xl text-gray-500"></i>
                <span class="text-xl text-gray-500">Power BI</span>
                <span class="text-xl text-gray-500">Tableau</span>
            </div>
        </div>
    </section>

    <!-- ================= CTA (elevated with gradient) ================= -->
    <section class="bg-gradient-to-r from-gray-900 to-black dark:from-black dark:to-gray-900 py-20">
        <div class="container mx-auto text-center px-4">
            <span class="inline-block text-blue-300 text-sm font-semibold tracking-widest mb-3">STRATEGIC ADVANTAGE</span>
            <h2 class="mb-6 text-3xl md:text-4xl font-bold text-white">Turning Analytics Into Foresight</h2>
            <p class="mx-auto mb-10 max-w-2xl text-lg text-gray-300">
                We help organizations anticipate change, mitigate risk, and stay ahead in competitive markets.
            </p>
            <a href="#" class="inline-flex items-center gap-2 rounded-full bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 font-semibold shadow-lg shadow-blue-600/30 transition hover:scale-105">
                Explore Our Analytics Capabilities <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 py-8">
        <div class="container mx-auto px-4 text-center text-gray-500 dark:text-gray-400 text-sm">
            © 2025 Tav Research — analytical & predictive intelligence. All rights reserved.
        </div>
    </footer>
</body>
</html>