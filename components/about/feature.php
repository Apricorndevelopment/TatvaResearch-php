<!-- ===== FEATURES SECTION: MAIN SERVICES (refined 4-column grid) ===== -->
    <?php
    $featuresData = [
        ["icon" => '<svg width="40" height="41" viewBox="0 0 40 41" fill="currentColor"><path opacity="0.5" d="M37.7778 40.2223H24C22.8954 40.2223 22 39.3268 22 38.2223V20.0001C22 18.8955 22.8954 18.0001 24 18.0001H37.7778C38.8823 18.0001 39.7778 18.8955 39.7778 20.0001V38.2223C39.7778 39.3268 38.8823 40.2223 37.7778 40.2223Z"/><path d="M23.2222 0C22.6699 0 22.2222 0.447715 22.2222 1V12.3333C22.2222 12.8856 22.6699 13.3333 23.2222 13.3333H39C39.5523 13.3333 40 12.8856 40 12.3333V0.999999C40 0.447714 39.5523 0 39 0H23.2222Z"/></svg>', "title" => "Survey Programming", "desc" => "Deploy advanced survey logic and adaptive questioning algorithms to dynamically capture market trends and decode nuanced consumer behavior.", "path" => "surveyprogramming.php"],
        ["icon" => '<svg width="40" height="40" viewBox="0 0 40 40" fill="currentColor"><circle cx="20" cy="20" r="18" opacity="0.5"/><circle cx="20" cy="20" r="10" fill="currentColor"/></svg>', "title" => "Data Processing", "desc" => "Implement automated data processing pipelines to clean, code, and structure survey responses into analysis-ready datasets.", "path" => "dataprocessing.php"],
        ["icon" => '<svg width="40" height="40" viewBox="0 0 40 40" fill="currentColor"><rect width="40" height="40" opacity="0.5"/><rect x="8" y="8" width="24" height="24" fill="currentColor"/></svg>', "title" => "Verbatim Coding", "desc" => "Leverage NLP and machine learning algorithms to automate thematic coding of open-ended responses.", "path" => "verbatimcoding.php"],
        ["icon" => '<svg width="40" height="40" viewBox="0 0 40 40" fill="currentColor"><polygon points="20,0 40,40 0,40" opacity="0.5"/><polygon points="20,10 32,32 8,32" fill="currentColor"/></svg>', "title" => "Charting", "desc" => "Generate publication-ready charts and interactive visualizations with automated charting systems.", "path" => "charting.php"]
    ];
    ?>
    <section class="py-20 md:py-28 bg-white dark:bg-gray-950 relative overflow-hidden">
        <div class="absolute inset-0 bg-subtle-radial pointer-events-none"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block text-sm font-semibold tracking-wider text-blue-600 uppercase bg-blue-50 dark:bg-blue-950/30 px-4 py-1.5 rounded-full mb-5">Our Services</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white tracking-tight mb-5 flex items-center justify-center gap-4">
    <span>➜</span>
    Better Solutions as per your need
    <span>➜</span>
</h2>

                 </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach($featuresData as $f): ?>
                <a href="<?= $f['path'] ?>" class="feature-card group relative flex flex-col bg-white dark:bg-gray-900 rounded-2xl border border-gray-100 dark:border-gray-800 p-7 transition-all hover:border-blue-200 hover:shadow-xl">
                    <div class="relative mb-7 flex h-20 w-20 items-center justify-center rounded-xl bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-400 transition-all group-hover:bg-blue-100 group-hover:scale-105">
                        <span class="w-10 h-10"><?= $f['icon'] ?></span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-blue-700"><?= $f['title'] ?>.</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed"><?= $f['desc'] ?></p>
                    <div class="relative mt-8 flex items-center text-sm font-medium text-blue-600 group-hover:text-blue-700">
                        <span class="border-b border-transparent group-hover:border-blue-300">Learn more</span>
                        <svg class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-16 text-sm text-gray-400 flex items-center justify-center gap-2">
                <span class="w-1.5 h-1.5 bg-blue-300 rounded-full"></span>
             
                <span class="w-1.5 h-1.5 bg-blue-300 rounded-full"></span>
            </div>
        </div>
    </section>