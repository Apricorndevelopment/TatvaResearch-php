<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us | Result Driven Marketing Agency · Tatva Research</title>
    <meta name="description" content="At Tatva Research, we turn data into direction and insights into impact. We help businesses understand their customers, markets, and opportunities with clarity and confidence.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN (latest) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome 6 (pro-grade icons with free tier) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- subtle custom smoothness -->
    <style>
        .fade-in-up {
            animation: fadeUp 0.7s ease-out both;
        }
        @keyframes fadeUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 30px -10px rgba(0,0,0,0.15);
        }
        .stat-bg-pattern {
            background: radial-gradient(circle at 20% 30%, rgba(255,255,255,0.08) 0%, transparent 30%);
        }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased">
    <?php
$page_title = "About Us | Tatva Research";
include 'components/header.php';
?>

<!-- ========== PREMIUM HERO / BRAND STORY ========== -->
<section class="relative pt-24 pb-28 bg-gradient-to-br from-[#0b1f3a] via-[#112b4e] to-[#1b3a5c] text-white overflow-hidden">
    <!-- abstract pattern overlay -->
    <div class="absolute inset-0 opacity-10">
        <svg width="100%" height="100%" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs><pattern id="grid" patternUnits="userSpaceOnUse" width="10" height="10"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.6"/></pattern></defs>
            <rect width="100%" height="100%" fill="url(#grid)"/>
        </svg>
    </div>
    
    <div class="container mx-auto px-6 lg:px-8 relative z-10">

        <!-- Breadcrumb with refined hierarchy -->
        <div class="mb-12 text-sm font-medium flex items-center space-x-2 text-indigo-200/90">
            <a href="index.php" class="hover:text-white transition flex items-center"><i class="fas fa-home mr-1 text-xs"></i>Home</a>
            <span class="text-indigo-300/50">/</span>
            <span class="text-white font-semibold tracking-wide">About Tatva Research</span>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- LEFT: powerful headline + expanded story -->
            <div class="space-y-6 fade-in-up">
                <div class="inline-block px-4 py-1.5 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium border border-white/20 shadow-sm">
                    ⚡ TRUSTED INSIGHTS · GLOBAL AGENCY
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight">
                    We don't just <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-300 to-cyan-200">analyze data</span> — we humanize it.
                </h1>
                <p class="text-xl text-indigo-100/90 leading-relaxed max-w-xl">
                    <span class="font-semibold text-white">Tatva Research</span> decodes complexity.  
                    From fragmented surveys to strategic clarity — we empower brands to act with conviction.
                </p>
                <!-- stats teaser -->
                <div class="flex flex-wrap gap-6 pt-4">
                    <div><span class="text-3xl font-bold text-white">15+</span> <span class="text-indigo-200 block text-sm">years of insight</span></div>
                    <div><span class="text-3xl font-bold text-white">400+</span> <span class="text-indigo-200 block text-sm">global brands</span></div>
                    <div><span class="text-3xl font-bold text-white">98%</span> <span class="text-indigo-200 block text-sm">client retention</span></div>
                </div>
            </div>

            <!-- RIGHT: image with dimensional effect + brand tag -->
            <div class="relative flex justify-center">
                <div class="absolute inset-0 bg-gradient-to-tr from-indigo-500/30 to-cyan-400/30 rounded-3xl blur-3xl"></div>
                <div class="relative bg-white/5 p-1 rounded-3xl backdrop-filter backdrop-blur-sm border border-white/20 shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&auto=format&fit=crop&q=80" 
                         alt="Tatva strategy session — diverse team analyzing market research dashboard" 
                         class="rounded-2xl object-cover w-full h-full max-h-[360px] lg:max-h-[400px] border-4 border-white/10 shadow-xl">
                </div>
                <!-- floating badge -->
                <div class="absolute -bottom-5 -left-6 bg-white text-gray-900 px-6 py-3 rounded-full shadow-2xl flex items-center gap-3 font-medium text-sm lg:text-base">
                    <i class="fa-solid fa-chart-line text-indigo-700 text-xl"></i>
                    <span>data clarity · since 2009</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===== MISSION & VISION / DISTINCT EDGE ===== -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <!-- left: who we truly are -->
            <div>
                <span class="text-indigo-600 font-semibold text-base uppercase tracking-wider border-b-2 border-indigo-200 pb-1">Our essence</span>
                <h2 class="text-3xl md:text-4xl font-black mt-6 mb-6 text-gray-900 leading-tight">Quietly confident. <br>Ferociously curious.</h2>
                <div class="space-y-5 text-gray-600 text-lg leading-relaxed">
                    <p>We are <span class="bg-indigo-50 px-2 py-0.5 text-indigo-800 font-medium">marketing researchers & strategists</span> who believe that truth hides in the raw data — we extract it with precision, empathy, and zero noise.</p>
                    <p>From verbatim coding to predictive analytics, every layer of our methodology is built to <span class="font-semibold text-gray-900">remove guesswork from boardroom decisions</span>. No vanity metrics, only directional truth.</p>
                    <p class="italic text-gray-500 border-l-4 border-indigo-300 pl-5 mt-6">"We never forget that behind every data point is a human being making a choice."</p>
                </div>
                <!-- compact awards / recognition -->
                <div class="mt-10 flex items-center gap-6">
                    <div class="flex -space-x-2">
                        <img class="w-10 h-10 rounded-full border-2 border-white shadow-md" src="https://randomuser.me/api/portraits/women/44.jpg" alt="team">
                        <img class="w-10 h-10 rounded-full border-2 border-white shadow-md" src="https://randomuser.me/api/portraits/men/32.jpg" alt="team">
                        <img class="w-10 h-10 rounded-full border-2 border-white shadow-md" src="https://randomuser.me/api/portraits/women/68.jpg" alt="team">
                        <img class="w-10 h-10 rounded-full border-2 border-white shadow-md" src="https://randomuser.me/api/portraits/men/75.jpg" alt="team">
                    </div>
                    <span class="text-sm text-gray-500 font-medium"><span class="text-indigo-700">50+</span> research specialists</span>
                </div>
            </div>
            <!-- right: featured pillars with micro-interaction -->
            <div class="grid grid-cols-2 gap-5">
                <div class="bg-indigo-50 p-6 rounded-2xl hover:shadow-lg transition hover:bg-indigo-100/60 group">
                    <i class="fa-solid fa-magnifying-glass-chart text-indigo-700 text-3xl mb-3 group-hover:scale-110 transition"></i>
                    <h3 class="font-extrabold text-gray-900 mb-2">Verbatim decoding</h3>
                    <p class="text-sm text-gray-600">Human‑led + AI‑augmented coding, capturing sentiment nuances.</p>
                </div>
                <div class="bg-indigo-50 p-6 rounded-2xl hover:shadow-lg transition hover:bg-indigo-100/60 group">
                    <i class="fa-solid fa-vector-square text-indigo-700 text-3xl mb-3 group-hover:scale-110 transition"></i>
                    <h3 class="font-extrabold text-gray-900 mb-2">Survey architecture</h3>
                    <p class="text-sm text-gray-600">Bias‑free questionnaires that yield decision‑grade data.</p>
                </div>
                <div class="bg-indigo-50 p-6 rounded-2xl hover:shadow-lg transition hover:bg-indigo-100/60 group">
                    <i class="fa-solid fa-chart-scatter text-indigo-700 text-3xl mb-3 group-hover:scale-110 transition"></i>
                    <h3 class="font-extrabold text-gray-900 mb-2">Advanced analytics</h3>
                    <p class="text-sm text-gray-600">Segmentation, MaxDiff, conjoint — clarity in every dimension.</p>
                </div>
                <div class="bg-indigo-50 p-6 rounded-2xl hover:shadow-lg transition hover:bg-indigo-100/60 group">
                    <i class="fa-solid fa-bezier-curve text-indigo-700 text-3xl mb-3 group-hover:scale-110 transition"></i>
                    <h3 class="font-extrabold text-gray-900 mb-2">Strategic narrative</h3>
                    <p class="text-sm text-gray-600">Translate stats into stories that persuade and inspire.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===== CORE PHILOSOPHY — amplified, with motion & personality ===== -->
<section class="py-24 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-6 lg:px-8">
        <!-- section header with more magnetism -->
        <div class="max-w-3xl mx-auto text-center mb-16">
            <span class="text-xs font-bold uppercase tracking-[0.3em] text-indigo-600 border-b-2 border-indigo-300 pb-2 px-3">inside tatva mind</span>
            <h2 class="text-4xl md:text-5xl font-black mt-8 mb-6 text-gray-900">Our philosophy, <br>distilled.</h2>
            <p class="text-xl text-gray-500">We don't rent software — we craft research. Every layer reflects three uncompromising beliefs.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
            <!-- Philosophy 1 : deep precision -->
            <div class="group relative bg-white p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_-15px_rgba(79,70,229,0.2)] transition-all duration-300 border border-gray-100 hover:border-indigo-200">
                <div class="absolute -top-5 -left-5 w-16 h-16 bg-indigo-600 rounded-2xl rotate-12 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white shadow-xl">
                    <i class="fa-solid fa-gem text-2xl"></i>
                </div>
                <div class="text-indigo-600 text-5xl mb-6"><i class="fa-solid fa-bullseye"></i></div>
                <h3 class="text-2xl font-extrabold mb-4 text-gray-900 group-hover:text-indigo-700 transition">Precision over volume</h3>
                <p class="text-gray-600 leading-relaxed">We reject “spaghetti data”. Our team sculpts research designs that isolate signal from noise — so you move fast without blindspots.</p>
                <div class="mt-6 text-indigo-500 text-sm font-semibold flex items-center gap-2 opacity-0 group-hover:opacity-100 transition">
                    <span>uncover methodology</span> <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            <!-- Philosophy 2 : innovation rhythm -->
            <div class="group relative bg-white p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_-15px_rgba(147,51,234,0.2)] transition-all duration-300 border border-gray-100 hover:border-purple-200">
                <div class="absolute -top-5 -right-5 w-16 h-16 bg-purple-600 rounded-2xl -rotate-12 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white shadow-xl">
                    <i class="fa-solid fa-flask text-2xl"></i>
                </div>
                <div class="text-purple-600 text-5xl mb-6"><i class="fa-solid fa-rocket"></i></div>
                <h3 class="text-2xl font-extrabold mb-4 text-gray-900 group-hover:text-purple-700 transition">Pragmatic innovation</h3>
                <p class="text-gray-600 leading-relaxed">We adopt new data science, yes — but only if it reduces friction or reveals hidden patterns. Tech is our tool, not our gimmick.</p>
                <div class="mt-6 text-purple-500 text-sm font-semibold flex items-center gap-2 opacity-0 group-hover:opacity-100 transition">
                    <span>explore AI ethics</span> <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            <!-- Philosophy 3 : success obsession -->
            <div class="group relative bg-white p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_-15px_rgba(5,150,105,0.2)] transition-all duration-300 border border-gray-100 hover:border-emerald-200">
                <div class="absolute -bottom-5 -left-5 w-16 h-16 bg-emerald-600 rounded-2xl rotate-12 opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white shadow-xl">
                    <i class="fa-solid fa-medal text-2xl"></i>
                </div>
                <div class="text-emerald-600 text-5xl mb-6"><i class="fa-solid fa-handshake"></i></div>
                <h3 class="text-2xl font-extrabold mb-4 text-gray-900 group-hover:text-emerald-700 transition">Client success = our ROI</h3>
                <p class="text-gray-600 leading-relaxed">We don't finish at delivery; we stay until insights are activated. Whether it's a deck rehearsal or stakeholder workshop — we're in.</p>
                <div class="mt-6 text-emerald-600 text-sm font-semibold flex items-center gap-2 opacity-0 group-hover:opacity-100 transition">
                    <span>client love stories</span> <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===== STATISTICAL IDENTITY / TRUST MOMENTS ===== -->
<section class="py-20 bg-indigo-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
    <div class="container mx-auto px-6 lg:px-8 relative z-20">
        <div class="grid lg:grid-cols-2 gap-14 items-center">
            <div class="text-white space-y-6">
                <h2 class="text-3xl lg:text-4xl font-extrabold leading-tight">Measurable weight. <br>Human touch.</h2>
                <p class="text-indigo-100 text-lg">Tatva Research isn't just a vendor; we're an extension of your strategy team. Our Net Promoter Score among CMOs says it all.</p>
                <!-- stats in row -->
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-indigo-400/30">
                    <div>
                        <div class="text-4xl font-black text-white">87<span class="text-indigo-200 text-2xl">+</span></div>
                        <div class="text-indigo-200 text-sm uppercase tracking-wider mt-1">NPS Score</div>
                    </div>
                    <div>
                        <div class="text-4xl font-black text-white">100<span class="text-indigo-200 text-2xl">%</span></div>
                        <div class="text-indigo-200 text-sm uppercase tracking-wider mt-1">On-time delivery</div>
                    </div>
                    <div>
                        <div class="text-4xl font-black text-white">4.9<span class="text-indigo-200 text-2xl"></span></div>
                        <div class="text-indigo-200 text-sm uppercase tracking-wider mt-1">Trustpilot rating</div>
                    </div>
                </div>
                <!-- micro cta -->
                <a href="#insights" class="inline-flex items-center gap-3 bg-white/10 backdrop-blur-sm px-7 py-3 rounded-full text-white font-medium border border-white/20 hover:bg-white hover:text-indigo-900 transition-all mt-4">
                    <i class="fa-solid fa-circle-check"></i> See why brands stay 8+ years
                </a>
            </div>
            <!-- right: impactful client mosaic -->
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-white/5 p-4 rounded-xl backdrop-blur-sm border border-white/10">
                    <i class="fa-brands fa-google text-3xl text-indigo-300 mb-2"></i>
                    <p class="text-white text-xs font-medium">strategic partner</p>
                </div>
                <div class="bg-white/5 p-4 rounded-xl backdrop-blur-sm border border-white/10">
                    <i class="fa-brands fa-microsoft text-3xl text-indigo-300 mb-2"></i>
                    <p class="text-white text-xs font-medium">market insights</p>
                </div>
                <div class="bg-white/5 p-4 rounded-xl backdrop-blur-sm border border-white/10">
                    <i class="fa-brands fa-nike text-3xl text-indigo-300 mb-2"></i>
                    <p class="text-white text-xs font-medium">consumer pulse</p>
                </div>
                <div class="bg-white/5 p-4 rounded-xl backdrop-blur-sm border border-white/10">
                    <i class="fa-solid fa-bolt text-3xl text-indigo-300 mb-2"></i>
                    <p class="text-white text-xs font-medium">fortune 500</p>
                </div>
                <div class="bg-white/5 p-4 rounded-xl backdrop-blur-sm border border-white/10">
                    <i class="fa-solid fa-chart-simple text-3xl text-indigo-300 mb-2"></i>
                    <p class="text-white text-xs font-medium">startup scale</p>
                </div>
                <div class="bg-white/5 p-4 rounded-xl backdrop-blur-sm border border-white/10">
                    <i class="fa-solid fa-heart text-3xl text-indigo-300 mb-2"></i>
                    <p class="text-white text-xs font-medium">nonprofit</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===== MEET THE PLATFORM (augmented from 'about section one') ===== -->
<section class="py-20 bg-white border-y border-gray-100">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            <div class="lg:w-1/2">
                <span class="text-sm font-bold text-indigo-600 uppercase tracking-[.20em]">what we actually do</span>
                <h2 class="text-3xl md:text-4xl font-black mt-4 mb-6 text-gray-900">From chaotic fields to boardroom confidence.</h2>
                <div class="prose prose-lg text-gray-600">
                    <p class="mb-4">We architect the entire research value chain: <span class="bg-indigo-50 px-2 py-1 text-indigo-900 font-medium">survey design · panel management · verbatim coding · advanced analytics · insight visualization</span>.</p>
                    <p class="mb-6">Our proprietary <span class="font-bold text-gray-900">Tatva Fusion Engine™</span> blends machine learning with seasoned researcher intuition — delivering reports that don’t sit on shelves but drive action.</p>
                </div>
                <!-- trust badge -->
                <div class="flex items-center gap-4 mt-4">
                    <i class="fa-solid fa-shield-check text-4xl text-indigo-700"></i>
                    <span class="text-sm text-gray-500 max-w-xs">GDPR compliant, ISO 27001 inspired — your data security is our architecture.</span>
                </div>
            </div>
            <div class="lg:w-1/2 bg-gradient-to-r from-indigo-50 to-blue-50 p-8 rounded-4xl rounded-3xl">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white p-5 rounded-2xl shadow-sm"><i class="fa-solid fa-file-lines text-indigo-800 text-2xl mb-2"></i><span class="block font-semibold">12k+</span><span class="text-sm text-gray-500">surveys coded</span></div>
                    <div class="bg-white p-5 rounded-2xl shadow-sm"><i class="fa-solid fa-diagram-project text-indigo-800 text-2xl mb-2"></i><span class="block font-semibold">6M+</span><span class="text-sm text-gray-500">data points/mo</span></div>
                    <div class="bg-white p-5 rounded-2xl shadow-sm"><i class="fa-solid fa-people-group text-indigo-800 text-2xl mb-2"></i><span class="block font-semibold">50+</span><span class="text-sm text-gray-500">languages</span></div>
                    <div class="bg-white p-5 rounded-2xl shadow-sm"><i class="fa-solid fa-clock text-indigo-800 text-2xl mb-2"></i><span class="block font-semibold">3-day</span><span class="text-sm text-gray-500">rapid insight</span></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===== TRANSFORM DATA INTO GROWTH — ELEVATED CTA ===== -->
<section class="relative py-28 bg-gradient-to-r from-[#0f2b4b] to-[#1c3e63] text-white overflow-hidden">
    <div class="absolute right-0 top-0 w-1/3 h-full opacity-20">
        <i class="fa-solid fa-circle-nodes text-[250px] absolute -top-10 -right-10 text-indigo-300/40"></i>
    </div>
    <div class="container mx-auto px-6 lg:px-8 text-center relative z-20">
        <span class="inline-block px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium tracking-wider border border-white/30 mb-6">🚀 ready for clarity?</span>
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 max-w-4xl mx-auto leading-tight">Your next breakthrough is buried in data. <br>Let’s excavate it together.</h2>
        <p class="text-xl text-indigo-100 max-w-2xl mx-auto mb-10">Whether you need a full‑scale tracking study or a focused consumer segment — Tatva Research brings the expertise and empathy.</p>
        <div class="flex flex-col sm:flex-row gap-5 justify-center items-center">
            <a href="contact.php" class="group bg-white text-indigo-900 px-10 py-5 rounded-full font-bold text-lg shadow-2xl hover:bg-gray-50 transition-all inline-flex items-center gap-3">
                <span>Spark a conversation</span> 
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1.5 transition"></i>
            </a>
            <a href="#" class="bg-transparent border-2 border-white/70 text-white px-10 py-5 rounded-full font-semibold text-lg hover:bg-white/10 transition flex items-center gap-2">
                <i class="fa-regular fa-file-lines"></i> Download capability deck
            </a>
        </div>
        <!-- micro footer note -->
        <p class="text-indigo-200 text-sm mt-12"><i class="fa-regular fa-clock mr-1"></i> Most clients receive first strategic insights within 5 working days.</p>
    </div>
</section>


<!-- ===== FOOTER ===== -->
<footer class="bg-gray-950 text-gray-400 py-12 border-t border-gray-800">
    <div class="container mx-auto px-6 text-center flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
            <span class="text-white text-2xl font-bold tracking-tight">tatva<span class="text-indigo-400">research</span></span>
            <span class="block text-xs mt-1 text-gray-500">© <?php echo date("Y"); ?> · clarity from complexity</span>
        </div>
        <div class="flex space-x-8 text-sm">
            <a href="#" class="hover:text-white transition">Privacy</a>
            <a href="#" class="hover:text-white transition">Careers</a>
            <a href="#" class="hover:text-white transition">Insights</a>
            <a href="contact.php" class="text-indigo-400 hover:text-indigo-300 transition">Contact</a>
        </div>
        <div class="flex space-x-5 mt-4 md:mt-0">
            <i class="fa-brands fa-linkedin-in hover:text-white cursor-pointer transition"></i>
            <i class="fa-brands fa-x-twitter hover:text-white cursor-pointer transition"></i>
            <i class="fa-brands fa-instagram hover:text-white cursor-pointer transition"></i>
        </div>
    </div>
    <div class="container mx-auto px-6 mt-8 text-xs text-gray-600 text-center border-t border-gray-800/60 pt-6">
        <p>Data with direction. Tatva Research is a results-driven marketing agency specializing in high-impact market research and intelligence.</p>
    </div>
</footer>

<!-- subtle back-to-top for delight -->
<div class="fixed bottom-10 right-6 bg-indigo-600 text-white p-3 rounded-full shadow-2xl cursor-pointer hover:bg-indigo-700 transition z-50">
    <i class="fa-solid fa-arrow-up"></i>
</div>

</body>
</html>