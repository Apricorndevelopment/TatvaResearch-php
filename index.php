<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Research & Consumer Rights | Tatva Research</title>
    <meta name="description" content="We provide data-driven market research, consumer insights, and marketing analytics to help businesses grow faster.">
    <!-- Tailwind via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font Inter for elegance -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .backdrop-blur-sm { backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); }
        .hero-overlay-custom { background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(20,40,80,0.65) 100%); }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0px); }
        }
        .float-animation { animation: float 4s ease-in-out infinite; }
        .feature-card { transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1); }
        .feature-card:hover { transform: translateY(-8px); box-shadow: 0 25px 35px -10px rgba(0,50,100,0.2); }
        .stat-card { transition: all 0.2s ease; }
        .stat-card:hover { background-color: rgba(255,255,255,0.05); backdrop-filter: blur(4px); }
        .insight-chip { background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.25); }
        .underline-magic { position: relative; display: inline-block; }
        .underline-magic:after { content: ''; position: absolute; width: 70px; height: 4px; bottom: -12px; left: 50%; transform: translateX(-50%); background: linear-gradient(90deg, #3b82f6, #8b5cf6); border-radius: 100px; }
        .bg-subtle-radial { background: radial-gradient(circle at 100% 0%, rgba(59,130,246,0.03) 0%, transparent 50%); }
    </style>
</head>
<body class="bg-white dark:bg-gray-950 antialiased">

   <?php
$page_title = "Home | Tatva Research";
include 'components/common/header.php';
?>

   <?php include 'components/index/hero.php'?>
   <?php include 'components/index/explain.php'?>
   <?php include 'components/index/about.php'?>
    

    <!-- ===== WHY TATVA? HIGH-IMPACT VALUE PILLARS ===== -->
    <section class="py-28 bg-white dark:bg-gray-950 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-blue-50/30 to-transparent dark:from-blue-950/20"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-indigo-50 dark:bg-indigo-950/10 rounded-full filter blur-3xl"></div>
        <div class="container mx-auto relative z-10 px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-sm font-bold uppercase tracking-[0.3em] text-blue-600 dark:text-blue-400">· Intelligence architecture ·</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mt-6 mb-6 underline-magic">Why Tatva Research?</h2>
                <p class="text-gray-600 dark:text-gray-300 text-lg max-w-2xl mx-auto">We transform raw data into powerful business intelligence — surveys, analytics, AI-driven foresight. No noise, only signals.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                <div class="feature-card group bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-800 hover:border-blue-200">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-blue-900/40 dark:to-indigo-900/40 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110"><i class="fas fa-wave-square text-3xl text-blue-700 dark:text-blue-300"></i></div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Real-time signals</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Live capture of market shifts, social sentiment, and competitor movements — updated hourly.</p>
                </div>
                <div class="feature-card group bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-800 hover:border-purple-200">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/40 dark:to-pink-900/40 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110"><i class="fas fa-people-arrows text-3xl text-purple-700 dark:text-purple-300"></i></div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Consumer rights first</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">GDPR-first, privacy-compliant data collection. Ethical research with zero compromise.</p>
                </div>
                <div class="feature-card group bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-800 hover:border-emerald-200">
                    <div class="w-14 h-14 bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900/40 dark:to-teal-900/40 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110"><i class="fas fa-chart-scatter text-3xl text-emerald-700 dark:text-emerald-300"></i></div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Predictive analytics</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">AI models with 94% accuracy forecasting trends, demand, and brand health metrics.</p>
                </div>
                <div class="feature-card group bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-800 hover:border-amber-200">
                    <div class="w-14 h-14 bg-gradient-to-br from-amber-100 to-orange-100 dark:from-amber-900/40 dark:to-orange-900/40 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110"><i class="fas fa-cubes text-3xl text-amber-700 dark:text-amber-300"></i></div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">360° Brand tracking</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Unified dashboard: brand awareness, perception, NPS, and customer journey analytics.</p>
                </div>
            </div>
            <!-- STATS BAND -->
            <div class="mt-24 grid grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="stat-card p-6 rounded-2xl bg-gray-50 dark:bg-gray-900/50 border border-gray-100 dark:border-gray-800 text-center"><span class="text-4xl font-black text-blue-600">500+</span><p class="text-gray-500 text-sm uppercase tracking-wide">Global brands</p></div>
                <div class="stat-card p-6 rounded-2xl bg-gray-50 dark:bg-gray-900/50 border border-gray-100 dark:border-gray-800 text-center"><span class="text-4xl font-black text-purple-600">150M</span><p class="text-gray-500 text-sm uppercase tracking-wide">Consumer signals</p></div>
                <div class="stat-card p-6 rounded-2xl bg-gray-50 dark:bg-gray-900/50 border border-gray-100 dark:border-gray-800 text-center"><span class="text-4xl font-black text-emerald-600">94%</span><p class="text-gray-500 text-sm uppercase tracking-wide">Forecast accuracy</p></div>
                <div class="stat-card p-6 rounded-2xl bg-gray-50 dark:bg-gray-900/50 border border-gray-100 dark:border-gray-800 text-center"><span class="text-4xl font-black text-amber-600">24/7</span><p class="text-gray-500 text-sm uppercase tracking-wide">Live intelligence</p></div>
            </div>
         
        </div>
    </section>
    <?php include 'components/common/footer.php'?>

 