<!-- ===== About or company(enhanced) ===== -->
    <section class="py-20 bg-gradient-to-br from-indigo-50 via-white to-blue-50 dark:from-gray-900 dark:via-gray-950 dark:to-gray-900">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                 <!-- right: content -->
                <div class="lg:w-1/2">
                    <span class="text-sm font-bold text-indigo-600 dark:text-indigo-400 uppercase tracking-[.20em]">About Our Company</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mt-4 mb-6">Who We are</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
            At Tatva Research, we help businesses understand markets and make smarter decisions through data-driven insights. Based in Sonipat, Delhi NCR, we support organisations across India and beyond with customer research, idea testing, and performance analysis. We focus on clear communication, reliable methods, and practical recommendations, ensuring our clients gain meaningful insights that support confident growth and long-term success.
<?php
$stats = [
    ["number" => "170+", "label" => "Projects Done"],
    ["number" => "200+", "label" => "Happy Clients"],
    ["number" => "10+", "label" => "Team Members"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stats Section</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <?php foreach ($stats as $stat): ?>
                <div class="bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-lg transition">
                    <h3 class="text-3xl font-semibold text-gray-900">
                        <?= $stat['number'] ?>
                    </h3>
                    <p class="text-gray-500 mt-2">
                        <?= $stat['label'] ?>
                    </p>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

</body>
</html>

</div>
                <!-- left: visual with floating badge -->
                <div class="lg:w-1/2 relative">
                    <div class="relative w-full h-96 rounded-3xl overflow-hidden shadow-2xl">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 to-indigo-600/20 mix-blend-overlay"></div>
                        <img src="assets/images/indexpage/about.png" alt="Consumer trust and data ethics" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -top-5 -right-5 bg-white dark:bg-gray-800 p-4 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700 float-animation">
                        <i class="fas fa-hand-holding-heart text-3xl text-rose-500"></i>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <?php include 'components/index/feature.php'?>