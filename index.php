<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Marketing Research & Consumer Rights | Tatva Research</title>

<meta name="description" content="We provide data-driven market research, consumer insights, and marketing analytics to help businesses grow faster.">

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
body { font-family: 'Inter', sans-serif; }

@keyframes float {
0% { transform: translateY(0); }
50% { transform: translateY(-8px); }
100% { transform: translateY(0); }
}

.float-animation{
animation: float 4s ease-in-out infinite;
}

.feature-card{
transition: all .3s ease;
}

.feature-card:hover{
transform: translateY(-8px);
box-shadow: 0 25px 35px -10px rgba(0,50,100,0.2);
}
</style>

</head>

<body class="bg-white dark:bg-gray-950">

<?php
$page_title="Home | Tatva Research";
include 'components/common/header.php';
?>

<?php include 'components/index/hero.php'; ?>

<?php include 'components/index/explain.php'; ?>

<?php include 'components/index/about.php'; ?>

<!-- WHY TATVA SECTION -->
<section class="py-28 bg-white dark:bg-gray-950">

<div class="container mx-auto px-6">

<div class="text-center max-w-3xl mx-auto mb-16">

<span class="text-sm font-bold uppercase tracking-[0.3em] text-blue-600">
· Intelligence Architecture ·
</span>

<h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mt-6 mb-6">
Why Tatva Research?
</h2>

<p class="text-gray-600 dark:text-gray-300 text-lg">
We transform raw data into powerful business intelligence —
surveys, analytics and AI-driven foresight.
</p>

</div>

<!-- FEATURE GRID -->
<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

<div class="feature-card bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-800">

<i class="fas fa-wave-square text-3xl text-blue-600 mb-5"></i>

<h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">
Real-time signals
</h3>

<p class="text-gray-500 text-sm">
Live capture of market shifts and competitor movements.
</p>

</div>

<div class="feature-card bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-800">

<i class="fas fa-people-arrows text-3xl text-purple-600 mb-5"></i>

<h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">
Consumer rights first
</h3>

<p class="text-gray-500 text-sm">
Privacy compliant and ethical research methodologies.
</p>

</div>

<div class="feature-card bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-800">

<i class="fas fa-chart-scatter text-3xl text-emerald-600 mb-5"></i>

<h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">
Predictive analytics
</h3>

<p class="text-gray-500 text-sm">
AI forecasting models with 94% prediction accuracy.
</p>

</div>

<div class="feature-card bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl border border-gray-100 dark:border-gray-800">

<i class="fas fa-cubes text-3xl text-amber-600 mb-5"></i>

<h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">
360° Brand tracking
</h3>

<p class="text-gray-500 text-sm">
Unified dashboard for brand awareness and NPS.
</p>

</div>

</div>

</div>
</section>

<?php include 'components/common/footer.php'; ?>

</body>
</html>