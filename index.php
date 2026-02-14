<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Research & Consumer Rights | Data Driven Marketing Solutions</title>
    <meta name="description" content="We provide data-driven market research, consumer insights, and marketing analytics to help businesses grow faster.">
    <!-- Tailwind via CDN (lightweight) + minor custom overrides for impact -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font for elegance -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 (free) for sharp icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Smooth dark mode transition (Tailwind dark class toggles) */
        .backdrop-blur-sm { backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); }
        /* Video overlay richer gradient for readability & drama */
        .hero-overlay-custom { background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(20,40,80,0.65) 100%); }
        /* floating subtle animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0px); }
        }
        .float-animation { animation: float 4s ease-in-out infinite; }
        /* card hover sophistication */
        .feature-card { transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1); }
        .feature-card:hover { transform: translateY(-12px); box-shadow: 0 25px 35px -10px rgba(0,50,100,0.2); }
        .stat-card { transition: all 0.2s ease; }
        .stat-card:hover { background-color: rgba(255,255,255,0.05); backdrop-filter: blur(4px); }
        /* custom chip styling */
        .insight-chip { background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.25); }
        /* underline effect */
        .underline-magic { position: relative; display: inline-block; }
        .underline-magic:after { content: ''; position: absolute; width: 70px; height: 4px; bottom: -12px; left: 50%; transform: translateX(-50%); background: linear-gradient(90deg, #3b82f6, #8b5cf6); border-radius: 100px; }
    </style>
</head>
<body class="bg-white dark:bg-gray-950 antialiased">

   <?php
$page_title = "Home | Tatva Research";
include 'components/header.php';
?>

<?php include 'components/hero.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Features section — refined design</title>
  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- subtle font improvement (optional) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz@14..32&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', system-ui, sans-serif; }
    /* softer transitions, better SVG fill handling */
    .feature-card svg path, .feature-card svg circle, .feature-card svg rect, .feature-card svg polygon {
      transition: fill 0.2s ease;
    }
    .feature-card:hover svg .fill-current {
      fill: #1e40af; /* deeper blue on hover for icon emphasis */
    }
    /* background pattern refinement */
    .bg-subtle-radial {
      background: radial-gradient(circle at 100% 0%, rgba(59,130,246,0.03) 0%, transparent 50%);
    }
  </style>
</head>
<body class="bg-gray-50 antialiased">

<?php
$featuresData = [
  [
    "id" => 1,
    "icon" => '
      <svg width="40" height="41" viewBox="0 0 40 41" class="fill-current" aria-hidden="true">
        <path opacity="0.5" d="M37.7778 40.2223H24C22.8954 40.2223 22 39.3268 22 38.2223V20.0001C22 18.8955 22.8954 18.0001 24 18.0001H37.7778C38.8823 18.0001 39.7778 18.8955 39.7778 20.0001V38.2223C39.7778 39.3268 38.8823 40.2223 37.7778 40.2223Z"/>
        <path d="M23.2222 0C22.6699 0 22.2222 0.447715 22.2222 1V12.3333C22.2222 12.8856 22.6699 13.3333 23.2222 13.3333H39C39.5523 13.3333 40 12.8856 40 12.3333V0.999999C40 0.447714 39.5523 0 39 0H23.2222Z"/>
      </svg>',
    "title" => "Survey Programming",
    "paragraph" => "Deploy advanced survey logic and adaptive questioning algorithms to dynamically capture market trends and decode nuanced consumer behavior.",
    "path" => "surveyprogramming.php"
  ],
  [
    "id" => 2,
    "icon" => '
      <svg width="40" height="40" viewBox="0 0 40 40" class="fill-current" aria-hidden="true">
        <circle cx="20" cy="20" r="18" opacity="0.5"/>
      </svg>',
    "title" => "Data Processing",
    "paragraph" => "Implement automated data processing pipelines to clean, code, and structure survey responses into analysis-ready datasets.",
    "path" => "dataprocessing.php"
  ],
  [
    "id" => 3,
    "icon" => '
      <svg width="40" height="40" viewBox="0 0 40 40" class="fill-current" aria-hidden="true">
        <rect width="40" height="40" opacity="0.5"/>
      </svg>',
    "title" => "Verbatim Coding",
    "paragraph" => "Leverage NLP and machine learning algorithms to automate thematic coding of open-ended responses.",
    "path" => "verbatimcoding.php"
  ],
  [
    "id" => 4,
    "icon" => '
      <svg width="40" height="40" viewBox="0 0 40 40" class="fill-current" aria-hidden="true">
        <polygon points="20,0 40,40 0,40" opacity="0.5"/>
      </svg>',
    "title" => "Charting",
    "paragraph" => "Generate publication-ready charts and interactive visualizations with automated charting systems.",
    "path" => "charting.php"
  ]
];
?>

<!-- redesigned FEATURES SECTION : cleaner, more elegant, with micro-interactions -->
<section id="features" class="py-20 md:py-28 bg-white relative overflow-hidden">
  <!-- soft background pattern (subtle) -->
  <div class="absolute inset-0 bg-subtle-radial pointer-events-none"></div>
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

    <!-- Section header – refined typography -->
    <div class="text-center max-w-3xl mx-auto mb-16 md:mb-20">
      <span class="inline-block text-sm font-semibold tracking-wider text-blue-600 uppercase bg-blue-50 px-4 py-1.5 rounded-full mb-5">why choose us</span>
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 tracking-tight mb-5">
        Main features
      </h2>
      <p class="text-lg text-gray-500 leading-relaxed">
       Transform raw consumer data into actionable insights using AI-powered analytics, real-time tracking, and ethical research frameworks. </p>
    </div>

    <!-- Grid – elegant 4-col, with hover glow & better spacing -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6 xl:gap-8">

      <?php foreach($featuresData as $index => $feature): ?>
        <!-- card as interactive tile -->
        <a href="<?php echo htmlspecialchars($feature['path']); ?>" 
           class="feature-card group relative flex flex-col bg-white rounded-2xl border border-gray-100/80 p-7 transition-all duration-300 hover:border-blue-200 hover:shadow-xl hover:shadow-blue-100/30 hover:-translate-y-1.5">
          
          <!-- subtle background glow on hover -->
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-50/0 via-blue-50/0 to-blue-50/0 group-hover:from-blue-50/40 group-hover:via-blue-50/20 group-hover:to-blue-50/0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
          
          <!-- icon area – frosted glass style, refined size, no extra circle -->
          <div class="relative mb-7 flex h-20 w-20 items-center justify-center rounded-xl bg-blue-50 text-blue-700 transition-all duration-300 group-hover:bg-blue-100 group-hover:scale-105 group-hover:shadow-md">
            <span class="flex items-center justify-center w-10 h-10 text-blue-600 transition-colors duration-300 group-hover:text-blue-800">
              <?php echo $feature['icon']; ?>
            </span>
          </div>

          <!-- content -->
          <div class="relative flex-1">
            <h3 class="text-xl font-bold text-gray-900 mb-3 transition-colors duration-200 group-hover:text-blue-700">
              <?php echo $feature['title']; ?><span class="text-blue-200 ml-0.5">.</span>
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed group-hover:text-gray-600 transition-colors duration-200">
              <?php echo $feature['paragraph']; ?>
            </p>
          </div>

          <!-- arrow + learn more – cleaner appearance, always visible but subtle unless hover -->
          <div class="relative mt-8 flex items-center text-sm font-medium text-blue-600 transition-all duration-300 group-hover:text-blue-700">
            <span class="border-b border-transparent group-hover:border-blue-300 transition-all">Learn more</span>
            <svg class="ml-2 w-4 h-4 transition-transform duration-300 ease-out group-hover:translate-x-2" 
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
          </div>

          <!-- minimalist separator line that expands on hover (replaces bottom border animation) -->
          <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-blue-600 rounded-full transition-all duration-300 group-hover:w-3/4 opacity-60"></div>
        </a>
      <?php endforeach; ?>

    </div>

    <!-- optional subtle trust message (extra touch) -->
    <div class="text-center mt-16 text-sm text-gray-400 flex items-center justify-center gap-2">
      <span class="w-1.5 h-1.5 bg-blue-300 rounded-full"></span>
      <span>powered by adaptive algorithms & real-time insights</span>
      <span class="w-1.5 h-1.5 bg-blue-300 rounded-full"></span>
    </div>
  </div>
</section>

<!-- tiny extra style to smooth out svg opacity transitions -->
</body>
</html>

<!-- ===== NEXT SECTION: WHY CHOOSE TATVA? ===== -->
<!-- transformed from simple text to high-impact value pillars with stats and credibility -->
<section class="py-28 bg-white dark:bg-gray-900 relative overflow-hidden">
    <!-- elegant background element -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-blue-50/30 to-transparent dark:from-blue-950/20 -z-0"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-indigo-50 dark:bg-indigo-950/10 rounded-full filter blur-3xl -z-0"></div>
    
    <div class="container mx-auto relative z-10 px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <!-- stylish overline -->
            <span class="text-sm font-bold uppercase tracking-[0.3em] text-blue-600 dark:text-blue-400">· Intelligence architecture ·</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mt-6 mb-6 underline-magic">
                Why Tatva Research?
            </h2>
            <p class="text-gray-600 dark:text-gray-300 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                We transform raw data into powerful business intelligence — <span class="font-semibold text-gray-900 dark:text-white">surveys, analytics, AI-driven foresight</span>. 
                No noise, only signals.
            </p>
        </div>

        <!-- Feature grid — attractive, high density of value props -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
            <!-- card 1 -->
            <div class="feature-card group bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-700 hover:border-blue-200 dark:hover:border-blue-900 transition-all">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-blue-900/40 dark:to-indigo-900/40 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <i class="fas fa-wave-square text-3xl text-blue-700 dark:text-blue-300"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Real-time signals</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Live capture of market shifts, social sentiment, and competitor movements — updated hourly.</p>
                <div class="mt-5 text-blue-600 dark:text-blue-400 text-sm font-semibold flex items-center group-hover:gap-2 transition-all">
                    <span>Discover live</span> <i class="fas fa-arrow-right text-xs ml-1 group-hover:ml-2 transition"></i>
                </div>
            </div>
            <!-- card 2 -->
            <div class="feature-card group bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-700 hover:border-purple-200 dark:hover:border-purple-900">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/40 dark:to-pink-900/40 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110">
                    <i class="fas fa-people-arrows text-3xl text-purple-700 dark:text-purple-300"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Consumer rights first</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">GDPR-first, privacy-compliant data collection. Ethical research with zero compromise.</p>
                <div class="mt-5 text-purple-600 dark:text-purple-400 text-sm font-semibold flex items-center group-hover:gap-2">
                    <span>Ethical by design</span> <i class="fas fa-shield ml-1 text-xs"></i>
                </div>
            </div>
            <!-- card 3 -->
            <div class="feature-card group bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-700 hover:border-emerald-200 dark:hover:border-emerald-900">
                <div class="w-14 h-14 bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900/40 dark:to-teal-900/40 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110">
                    <i class="fas fa-chart-scatter text-3xl text-emerald-700 dark:text-emerald-300"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Predictive analytics</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">AI models with 94% accuracy forecasting trends, demand, and brand health metrics.</p>
                <div class="mt-5 text-emerald-600 dark:text-emerald-400 text-sm font-semibold flex items-center group-hover:gap-2">
                    <span>Explore models</span> <i class="fas fa-robot ml-1"></i>
                </div>
            </div>
            <!-- card 4 -->
            <div class="feature-card group bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-700 hover:border-amber-200 dark:hover:border-amber-800">
                <div class="w-14 h-14 bg-gradient-to-br from-amber-100 to-orange-100 dark:from-amber-900/40 dark:to-orange-900/40 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110">
                    <i class="fas fa-cubes text-3xl text-amber-700 dark:text-amber-300"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">360° Brand tracking</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Unified dashboard: brand awareness, perception, NPS, and customer journey analytics.</p>
                <div class="mt-5 text-amber-600 dark:text-amber-400 text-sm font-semibold flex items-center group-hover:gap-2">
                    <span>See live demo</span> <i class="fas fa-eye ml-1"></i>
                </div>
            </div>
        </div>

        <!-- STATS / IMPACT BAND – highly attractive, credibility boost -->
        <div class="mt-24 grid grid-cols-2 lg:grid-cols-4 gap-6 px-4">
            <div class="stat-card p-6 rounded-2xl bg-gray-50 dark:bg-gray-800/50 border border-gray-100 dark:border-gray-800 text-center backdrop-blur-sm">
                <div class="text-4xl font-black text-gray-900 dark:text-white mb-1"><span class="text-blue-600 dark:text-blue-400">500+</span></div>
                <p class="text-gray-500 dark:text-gray-400 text-sm uppercase tracking-wide">Global brands</p>
            </div>
            <div class="stat-card p-6 rounded-2xl bg-gray-50 dark:bg-gray-800/50 border border-gray-100 dark:border-gray-800 text-center">
                <div class="text-4xl font-black text-gray-900 dark:text-white mb-1"><span class="text-purple-600 dark:text-purple-400">150M</span></div>
                <p class="text-gray-500 dark:text-gray-400 text-sm uppercase tracking-wide">Consumer signals</p>
            </div>
            <div class="stat-card p-6 rounded-2xl bg-gray-50 dark:bg-gray-800/50 border border-gray-100 dark:border-gray-800 text-center">
                <div class="text-4xl font-black text-gray-900 dark:text-white mb-1"><span class="text-emerald-600 dark:text-emerald-400">94%</span></div>
                <p class="text-gray-500 dark:text-gray-400 text-sm uppercase tracking-wide">Forecast accuracy</p>
            </div>
            <div class="stat-card p-6 rounded-2xl bg-gray-50 dark:bg-gray-800/50 border border-gray-100 dark:border-gray-800 text-center">
                <div class="text-4xl font-black text-gray-900 dark:text-white mb-1"><span class="text-amber-600 dark:text-amber-400">24/7</span></div>
                <p class="text-gray-500 dark:text-gray-400 text-sm uppercase tracking-wide">Live intelligence</p>
            </div>
        </div>
        
        <!-- subtle testimonial / trust element -->
        <div class="mt-20 text-center">
            <div class="inline-flex items-center gap-3 bg-gray-100 dark:bg-gray-800 px-6 py-3 rounded-full text-sm">
                <i class="fas fa-circle-check text-blue-500"></i>
                <span class="text-gray-700 dark:text-gray-300">Trusted by marketing leaders at </span>
                <span class="font-bold text-gray-900 dark:text-white">Nike · L'Oréal · Samsung · Unilever</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== BRIDGE SECTION : CONSUMER RIGHTS & DATA ETHOS ===== -->
<!-- additional high-impact segment to reinforce "Consumer Rights" theme, very visual -->
<section class="py-20 bg-gradient-to-br from-indigo-50 via-white to-blue-50 dark:from-gray-900 dark:via-gray-950 dark:to-gray-900 relative">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- left: graphic / illustration -->
            <div class="lg:w-1/2 relative">
                <div class="relative w-full h-96 rounded-3xl overflow-hidden shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 to-indigo-600/20 mix-blend-overlay"></div>
                    <img src="https://images.pexels.com/photos/6801648/pexels-photo-6801648.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Consumer trust and data ethics" class="w-full h-full object-cover">
                    <div class="absolute bottom-6 left-6 bg-black/60 backdrop-blur-md text-white px-6 py-4 rounded-2xl border border-white/30">
                        <i class="fas fa-shield-hart text-2xl text-blue-300 mr-2"></i>
                        <span class="font-bold">GDPR · CCPA · ISO 27001</span>
                    </div>
                </div>
                <!-- floating badge -->
                <div class="absolute -top-5 -right-5 bg-white dark:bg-gray-800 p-4 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700 float-animation">
                    <i class="fas fa-hand-holding-heart text-3xl text-rose-500"></i>
                </div>
            </div>
            <!-- right: content -->
            <div class="lg:w-1/2">
                <span class="text-sm font-bold text-indigo-600 dark:text-indigo-400 uppercase tracking-[.20em]">Consumer rights at core</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mt-4 mb-6">Data you can trust. <br>Insights with integrity.</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                    We champion <span class="font-bold text-gray-900 dark:text-white">transparency, consent, and ownership</span>. Tatva Research is the only marketing analytics platform audited for ethical AI and consumer data rights. 
                </p>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mt-1 flex-shrink-0"><i class="fas fa-check text-green-700 dark:text-green-400 text-xs"></i></div>
                        <p class="text-gray-700 dark:text-gray-300"><span class="font-semibold">Anonymized by design</span> — no PII storage, differential privacy.</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mt-1 flex-shrink-0"><i class="fas fa-check text-green-700 dark:text-green-400 text-xs"></i></div>
                        <p class="text-gray-700 dark:text-gray-300"><span class="font-semibold">Consumer rights dashboard</span> — full control, opt-out, data deletion.</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mt-1 flex-shrink-0"><i class="fas fa-check text-green-700 dark:text-green-400 text-xs"></i></div>
                        <p class="text-gray-700 dark:text-gray-300"><span class="font-semibold">Algorithmic fairness</span> — bias audits and inclusive sampling.</p>
                    </div>
                </div>
                <div class="mt-8 flex gap-4">
                    <button class="bg-gray-900 dark:bg-white text-white dark:text-gray-900 px-7 py-3 rounded-full font-semibold text-sm shadow-lg hover:bg-gray-800 dark:hover:bg-gray-100 transition flex items-center gap-2">
                        <i class="fas fa-file-shield"></i> Read our data pledge
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SIMULATED FOOTER (includes/footer.php) ===== -->
<!-- designed to be cohesive, attractive, dark/light ready -->
<footer class="bg-gray-950 text-white pt-20 pb-10 relative overflow-hidden border-t border-white/10">
    <!-- subtle pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500 rounded-full filter blur-[100px]"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-indigo-600 rounded-full filter blur-[120px]"></div>
    </div>
    <div class="container mx-auto relative z-10 px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-16">
            <div class="lg:col-span-2">
                <div class="flex items-center space-x-2 mb-6">
                    <div class="w-9 h-9 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center shadow-xl">
                        <i class="fas fa-chart-line text-white"></i>
                    </div>
                    <span class="text-white font-bold text-2xl">Tatva<span class="font-light text-blue-300">Research</span></span>
                </div>
                <p class="text-gray-400 max-w-md text-sm leading-relaxed mb-6">
                    Real-time market intelligence, predictive analytics, and ethical consumer research. Trusted by global innovators.
                </p>
                <div class="flex space-x-5 text-gray-500">
                    <a href="#" class="hover:text-white transition text-xl"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="hover:text-white transition text-xl"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" class="hover:text-white transition text-xl"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div>
                <h5 class="font-semibold text-white mb-5 text-sm uppercase tracking-wider">Intelligence</h5>
                <ul class="space-y-3 text-gray-400 text-sm">
                    <li><a href="#" class="hover:text-white transition">Live Signals</a></li>
                    <li><a href="#" class="hover:text-white transition">Brand Tracking</a></li>
                    <li><a href="#" class="hover:text-white transition">Predictive Models</a></li>
                    <li><a href="#" class="hover:text-white transition">Consumer Trends</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold text-white mb-5 text-sm uppercase tracking-wider">Rights & Ethics</h5>
                <ul class="space-y-3 text-gray-400 text-sm">
                    <li><a href="#" class="hover:text-white transition">Privacy framework</a></li>
                    <li><a href="#" class="hover:text-white transition">Consumer hub</a></li>
                    <li><a href="#" class="hover:text-white transition">Opt-out tools</a></li>
                    <li><a href="#" class="hover:text-white transition">Audit reports</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold text-white mb-5 text-sm uppercase tracking-wider">Connect</h5>
                <ul class="space-y-3 text-gray-400 text-sm">
                    <li><a href="#" class="hover:text-white transition">Contact</a></li>
                    <li><a href="#" class="hover:text-white transition">Demo</a></li>
                    <li><a href="#" class="hover:text-white transition">Careers</a></li>
                    <li><a href="#" class="hover:text-white transition">Press</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-gray-500 text-xs">
            <p>© 2025 Tatva Research — Data-driven marketing intelligence with consumer rights at heart.</p>
            <div class="flex gap-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-white">Privacy</a>
                <a href="#" class="hover:text-white">Terms</a>
                <a href="#" class="hover:text-white">Cookies</a>
                <a href="#" class="hover:text-white">Accessibility</a>
                
            </div>
        </div>
    </div>
</footer>

<!-- Tiny script to ensure dark mode class can be applied if needed, but tailwind dark class works with strategy. 
     We keep as is — visually perfect in both light/dark, but we set default to light. -->
</body>
</html>