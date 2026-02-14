<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | AI Market Intelligence Platform</title>
    <meta name="description" content="Get in touch with our team to discuss AI-powered market intelligence solutions.">
    <!-- Tailwind via CDN + modern font, subtle background, glassmorphism touches -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.4);
        }
        .dark .glass-card {
            background: rgba(17, 24, 39, 0.7);
            border: 1px solid rgba(55, 65, 81, 0.4);
        }
        .hover-lift {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.05), 0 8px 10px -6px rgba(0,0,0,0.02);
        }
        .gradient-border {
            position: relative;
            border-radius: 1rem;
            background: linear-gradient(white, white) padding-box, 
                        linear-gradient(145deg, #3b82f6, #8b5cf6) border-box;
            border: 2px solid transparent;
        }
        .dark .gradient-border {
            background: linear-gradient(#1f2937, #1f2937) padding-box, 
                        linear-gradient(145deg, #60a5fa, #a78bfa) border-box;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 antialiased">

<!-- ==================== INCLUDE HEADER (simulated) ==================== -->
<!-- normally includes/header.php, but we just show a minimalistic nav for demonstration -->
<nav class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm sticky top-0 z-50 border-b border-gray-200/80 dark:border-gray-700/50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="index.php" class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">AI MarketIntel</a>
        <div class="space-x-8 text-sm font-medium text-gray-700 dark:text-gray-200">
            <a href="index.php" class="hover:text-blue-600 dark:hover:text-blue-400">Home</a>
            <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">Platform</a>
            <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400">Research</a>
            <a href="contact.php" class="text-blue-600 dark:text-blue-400 font-semibold">Contact</a>
        </div>
    </div>
</nav>

<!-- ================ HERO / BREADCRUMB : elevated glass & wave ================ -->
<section class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 py-28 text-white">
    <!-- abstract animated shapes -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10">
        <div class="absolute top-10 left-10 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-80 h-80 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-5 py-2 rounded-full text-sm font-medium border border-white/20 shadow-lg mb-8">
            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span> 
            AI support 24/7 — let’s talk
        </div>
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
            Get in <span class="bg-gradient-to-r from-blue-200 to-indigo-200 bg-clip-text text-transparent">Touch</span>
        </h1>
        <p class="max-w-2xl mx-auto text-lg md:text-xl text-blue-100/90 font-light">
            Ready to transform your market research with AI? Our team is ready to help you harness the power of predictive intelligence.
        </p>
        <div class="mt-8 flex justify-center items-center gap-2 text-sm text-blue-200">
            <a href="index.php" class="hover:text-white transition flex items-center gap-1">🏠 Home</a>
            <span class="mx-2 opacity-50">/</span>
            <span class="font-semibold text-white bg-white/20 px-3 py-1.5 rounded-full">Contact</span>
        </div>
    </div>
    <!-- subtle wave divider -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden">
        <svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-12 text-gray-50 dark:text-gray-900">
            <path d="M0 0L48 8.75C96 17.5 192 35 288 43.8C384 52.5 480 52.5 576 43.8C672 35 768 17.5 864 8.75C960 0 1056 0 1152 8.75C1248 17.5 1344 35 1392 43.8L1440 52.5V100H1392C1344 100 1248 100 1152 100C1056 100 960 100 864 100C768 100 672 100 576 100C480 100 384 100 288 100C192 100 96 100 48 100H0V0Z" fill="currentColor"/>
        </svg>
    </div>
</section>

<!-- ================ CONTACT CORE : GLASSMORPHISM + MODERN GRID ================ -->
<section class="py-24 bg-gray-50 dark:bg-gray-900 relative">
    <!-- background decorative -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -left-10 top-60 w-80 h-80 bg-blue-100 dark:bg-blue-900/20 rounded-full opacity-30 blur-3xl"></div>
        <div class="absolute right-0 bottom-0 w-96 h-96 bg-indigo-100 dark:bg-indigo-900/20 rounded-full opacity-30 blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            
            <!-- ---------- LEFT: FORM with luxurious card & floating labels ---------- -->
            <div class="glass-card rounded-3xl shadow-2xl p-8 md:p-10 border border-white/50 dark:border-gray-700/50 backdrop-blur-xl">
                <div class="flex items-center gap-3 mb-8">
                    <span class="p-3 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </span>
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Send a message</h2>
                </div>
                
                <form method="POST" action="" class="space-y-7">
                    <!-- full name with icon -->
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-500 dark:text-gray-400">👤</span>
                        <input type="text" name="name" placeholder="Your full name"
                            class="w-full pl-11 pr-5 py-4 rounded-2xl border border-gray-200 dark:border-gray-700 bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm focus:bg-white dark:focus:bg-gray-800 focus:ring-4 focus:ring-blue-500/20 outline-none transition dark:text-white">
                    </div>
                    
                    <!-- email -->
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-500 dark:text-gray-400">✉️</span>
                        <input type="email" name="email" placeholder="Email address"
                            class="w-full pl-11 pr-5 py-4 rounded-2xl border border-gray-200 dark:border-gray-700 bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm focus:bg-white dark:focus:bg-gray-800 focus:ring-4 focus:ring-blue-500/20 outline-none transition dark:text-white">
                    </div>
                    
                    <!-- message -->
                    <div class="relative">
                        <span class="absolute top-5 left-0 pl-4 text-gray-500 dark:text-gray-400">💬</span>
                        <textarea name="message" rows="5" placeholder="How can we help you?"
                            class="w-full pl-11 pr-5 py-4 rounded-2xl border border-gray-200 dark:border-gray-700 bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm focus:bg-white dark:focus:bg-gray-800 focus:ring-4 focus:ring-blue-500/20 outline-none transition dark:text-white"></textarea>
                    </div>
                    
                    <button type="submit"
                        class="group relative w-full py-4 px-6 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-[1.02] transition duration-300 flex items-center justify-center gap-3">
                        <span>Send message</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                    
                    <p class="text-xs text-gray-500 dark:text-gray-400 text-center mt-4">
                        We’ll respond within 24 hours, usually sooner 🚀
                    </p>
                </form>
            </div>
            
            <!-- ---------- RIGHT: CONTACT INFO / BRAND STORY with ELEGANT CARDS ---------- -->
            <div class="space-y-8">
                <!-- brand promise headline -->
                <div class="relative pl-6 border-l-8 border-blue-500 bg-gradient-to-r from-blue-50 to-transparent dark:from-blue-900/20 py-2 pr-4 rounded-r-3xl">
                    <h2 class="text-3xl md:text-4xl font-black text-gray-800 dark:text-white">
                        Beyond <span class="text-blue-600 dark:text-blue-400">connection</span>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mt-2 font-light">
                        Experience intelligence that anticipates your next move.
                    </p>
                </div>
                
                <!-- premium contact cards - each one is distinctive -->
                <div class="space-y-5">
                    
                    <!-- phone card with glossy effect -->
                    <div class="group bg-white dark:bg-gray-800/80 p-6 rounded-3xl shadow-lg hover-lift border border-gray-100 dark:border-gray-700/60 flex items-center gap-5 backdrop-blur-sm">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-blue-900/40 dark:to-indigo-900/40 rounded-2xl flex items-center justify-center text-3xl shadow-inner">
                            📞
                        </div>
                        <div class="flex-1">
                            <p class="text-sm uppercase tracking-wider text-blue-600 dark:text-blue-400 font-semibold">Phone support</p>
                            <h3 class="font-bold text-xl text-gray-800 dark:text-white mt-0.5">Talk to an expert</h3>
                            <a href="tel:+918700187929" class="text-lg font-mono text-gray-900 dark:text-gray-200 font-medium hover:text-blue-700 transition">
                                +91-8700187929
                            </a>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 flex items-center gap-1">
                                <span class="w-2 h-2 bg-green-500 rounded-full"></span> Mon-Fri, 9am-6pm IST
                            </p>
                        </div>
                    </div>
                    
                    <!-- enterprise email with special badge -->
                    <div class="group bg-white dark:bg-gray-800/80 p-6 rounded-3xl shadow-lg hover-lift border border-gray-100 dark:border-gray-700/60 flex items-center gap-5 backdrop-blur-sm">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/40 dark:to-pink-900/40 rounded-2xl flex items-center justify-center text-3xl shadow-inner">
                            💼
                        </div>
                        <div class="flex-1">
                            <p class="text-sm uppercase tracking-wider text-purple-600 dark:text-purple-400 font-semibold">Enterprise sales</p>
                            <h3 class="font-bold text-xl text-gray-800 dark:text-white mt-0.5">Dedicated account team</h3>
                            <a href="mailto:researchtatva@gmail.com" class="text-lg text-gray-900 dark:text-gray-200 font-medium hover:text-purple-700 transition break-all">
                                researchtatva@gmail.com
                            </a>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Private demo & custom SLAs</p>
                        </div>
                        <span class="bg-purple-100 dark:bg-purple-900/40 text-purple-800 dark:text-purple-300 text-xs font-bold px-3 py-1.5 rounded-full">priority</span>
                    </div>
                    
                    <!-- office: elegant location card -->
                    <div class="group bg-white dark:bg-gray-800/80 p-6 rounded-3xl shadow-lg hover-lift border border-gray-100 dark:border-gray-700/60 flex items-center gap-5 backdrop-blur-sm">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-100 to-orange-100 dark:from-amber-900/40 dark:to-orange-900/40 rounded-2xl flex items-center justify-center text-3xl shadow-inner">
                            📍
                        </div>
                        <div class="flex-1">
                            <p class="text-sm uppercase tracking-wider text-amber-600 dark:text-amber-400 font-semibold">Innovation hub</p>
                            <h3 class="font-bold text-xl text-gray-800 dark:text-white mt-0.5">Rohini, Delhi</h3>
                            <p class="text-gray-700 dark:text-gray-300 font-medium">AI Experience Center</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 flex items-center gap-1">
                                <span class="w-2 h-2 bg-amber-500 rounded-full"></span> By appointment — coffee included ☕
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- micro cta: meet our bot? -->
                <div class="mt-8 p-6 rounded-3xl bg-gradient-to-r from-indigo-50 to-blue-50 dark:from-indigo-900/20 dark:to-blue-900/20 border border-indigo-200/50 dark:border-indigo-800/50 flex items-center gap-4">
                    <div class="text-5xl">🤖</div>
                    <div>
                        <p class="font-semibold text-gray-800 dark:text-white">Need instant answers?</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Our AI assistant is ready 24/7 — try the chat bubble →</p>
                    </div>
                    <div class="ml-auto bg-white dark:bg-gray-800 p-3 rounded-full shadow-md">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================ FAQ SECTION: minimalist, elegant accordion ================ -->
<section class="py-24 bg-white dark:bg-gray-800 relative overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-64 bg-gradient-to-b from-blue-50/30 to-transparent dark:from-blue-900/10 rounded-full blur-3xl"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-sm font-bold tracking-[0.3em] uppercase bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">FAQ</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-3 text-gray-800 dark:text-white">
                Curious minds ask
            </h2>
            <p class="mt-4 text-gray-500 dark:text-gray-400 text-lg">
                Everything you need to know about our AI intelligence platform.
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-5">
            <!-- FAQ item 1 - with icon and smooth toggle -->
            <div class="group bg-gray-50 dark:bg-gray-900/50 rounded-2xl p-6 border border-gray-200/70 dark:border-gray-700/60 hover:border-blue-300 dark:hover:border-blue-700 transition cursor-pointer" onclick="toggleFAQ(1)">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <span class="text-2xl bg-blue-100 dark:bg-blue-900/30 w-10 h-10 rounded-full flex items-center justify-center text-blue-700 dark:text-blue-300">📊</span>
                        <h3 class="font-semibold text-lg md:text-xl text-gray-800 dark:text-white">What industries do you serve?</h3>
                    </div>
                    <span id="faq1-icon" class="text-2xl text-gray-500 transition-transform duration-300">➕</span>
                </div>
                <div id="faq1" class="hidden mt-4 pl-14 text-gray-600 dark:text-gray-300 leading-relaxed animate-fadeIn">
                    We specialize in FMCG, Retail, Healthcare, Technology, Education, and enterprise sectors. Our AI adapts to any industry with complex data signals.
                </div>
            </div>
            
            <!-- FAQ item 2 -->
            <div class="group bg-gray-50 dark:bg-gray-900/50 rounded-2xl p-6 border border-gray-200/70 dark:border-gray-700/60 hover:border-blue-300 dark:hover:border-blue-700 transition cursor-pointer" onclick="toggleFAQ(2)">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <span class="text-2xl bg-indigo-100 dark:bg-indigo-900/30 w-10 h-10 rounded-full flex items-center justify-center text-indigo-700 dark:text-indigo-300">⚙️</span>
                        <h3 class="font-semibold text-lg md:text-xl text-gray-800 dark:text-white">Do you offer customized research solutions?</h3>
                    </div>
                    <span id="faq2-icon" class="text-2xl text-gray-500 transition-transform duration-300">➕</span>
                </div>
                <div id="faq2" class="hidden mt-4 pl-14 text-gray-600 dark:text-gray-300 leading-relaxed">
                    Absolutely. Every solution is tailor-made. We combine your proprietary data with our AI to deliver unique competitive insights.
                </div>
            </div>
            
            <!-- FAQ item 3 -->
            <div class="group bg-gray-50 dark:bg-gray-900/50 rounded-2xl p-6 border border-gray-200/70 dark:border-gray-700/60 hover:border-blue-300 dark:hover:border-blue-700 transition cursor-pointer" onclick="toggleFAQ(3)">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <span class="text-2xl bg-purple-100 dark:bg-purple-900/30 w-10 h-10 rounded-full flex items-center justify-center text-purple-700 dark:text-purple-300">🎯</span>
                        <h3 class="font-semibold text-lg md:text-xl text-gray-800 dark:text-white">How can I schedule a demo?</h3>
                    </div>
                    <span id="faq3-icon" class="text-2xl text-gray-500 transition-transform duration-300">➕</span>
                </div>
                <div id="faq3" class="hidden mt-4 pl-14 text-gray-600 dark:text-gray-300 leading-relaxed">
                    Fill out the contact form or email us directly. We’ll set up a personalized demo within 24 hours — often same day.
                </div>
            </div>
        </div>
        
        <!-- bottom CTA -->
        <div class="mt-16 text-center">
            <p class="text-gray-600 dark:text-gray-400">Still have questions? <a href="mailto:researchtatva@gmail.com" class="font-semibold text-blue-600 dark:text-blue-400 underline decoration-2 underline-offset-4 hover:decoration-blue-800">Ask our team</a></p>
        </div>
    </div>
</section>

<!-- ================ FOOTER placeholder (includes/footer.php simulation) ================ -->
<footer class="bg-gray-900 text-white py-16 border-t border-gray-800">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <span class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent">AI MarketIntel</span>
                <p class="text-gray-400 text-sm mt-3">© 2025 All rights reserved.</p>
            </div>
            <div class="flex gap-10 text-sm text-gray-400">
                <a href="#" class="hover:text-white">Privacy</a>
                <a href="#" class="hover:text-white">Terms</a>
                <a href="#" class="hover:text-white">Security</a>
                <a href="#" class="hover:text-white">Status</a>
            </div>
        </div>
        <div class="mt-8 text-xs text-gray-600 text-center md:text-left border-t border-gray-800 pt-6">
            <p>AI Market Intelligence Platform — transform data into decisions.</p>
        </div>
    </div>
</footer>

<!-- smooth FAQ toggle with dynamic icon change -->
<script>
function toggleFAQ(id) {
    const content = document.getElementById('faq' + id);
    const icon = document.getElementById('faq' + id + '-icon');
    content.classList.toggle('hidden');
    if (content.classList.contains('hidden')) {
        icon.innerText = '➕';
        icon.style.transform = 'rotate(0deg)';
    } else {
        icon.innerText = '➖';
        icon.style.transform = 'rotate(90deg)';
    }
}

// add subtle animation style
const styleSheet = document.createElement("style");
styleSheet.textContent = `@keyframes fadeIn { from { opacity: 0; transform: translateY(-8px); } to { opacity: 1; transform: translateY(0); } } .animate-fadeIn { animation: fadeIn 0.25s ease forwards; }`;
document.head.appendChild(styleSheet);
</script>

<!-- note: include header/footer normally would be separate, but we embed for demonstration -->
<?php
// since we are in a simulated environment, the php include is just a placeholder
// $pageTitle = "Contact Us | AI Market Intelligence Platform"; 
// $pageDescription = ... already set at top
// include 'includes/header.php';  /* would be here */
// include 'includes/footer.php';  /* would be here */
?>
</body>
</html>