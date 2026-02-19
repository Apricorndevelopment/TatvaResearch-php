<?php
$pageTitle = "Our Services | Tatva Research";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">

<?php include 'components/common/header.php'?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-indigo-900 to-blue-800 text-white py-20 ">
    <div class="max-w-6xl mx-auto px-6 text-center mt-8">
        <h2 class="text-4xl font-bold mb-4">Our Marketing Research Services</h2>
        <p class="text-lg text-gray-200 max-w-3xl mx-auto">
            We solve real-time marketing challenges through data-driven research, survey analysis, verbatim coding, and AI-powered insights.
        </p>
    </div>
</section>

<!-- Services Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-10">

            <!-- Service 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300">
                <h3 class="text-xl font-semibold mb-4 text-blue-900">Survey Research & Data Collection</h3>
                <p class="text-gray-600">
                    We design and conduct structured surveys to gather real-time consumer insights. 
                    Our data collection methods ensure accuracy, reliability, and actionable intelligence.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300">
                <h3 class="text-xl font-semibold mb-4 text-blue-900">Verbatim Coding & Text Analysis</h3>
                <p class="text-gray-600">
                    Transform open-ended responses into structured insights through advanced verbatim coding techniques 
                    and AI-based text analytics for deeper understanding.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300">
                <h3 class="text-xl font-semibold mb-4 text-blue-900">Data Science & Predictive Analytics</h3>
                <p class="text-gray-600">
                    Using statistical modeling, machine learning, and predictive analysis, we help businesses 
                    forecast trends and make data-backed strategic decisions.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300">
                <h3 class="text-xl font-semibold mb-4 text-blue-900">AI-Powered Market Insights</h3>
                <p class="text-gray-600">
                    We leverage artificial intelligence to uncover hidden patterns in customer behavior 
                    and provide smart recommendations for business growth.
                </p>
            </div>

            <!-- Service 5 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300">
                <h3 class="text-xl font-semibold mb-4 text-blue-900">Market Problem Diagnosis</h3>
                <p class="text-gray-600">
                    Identify real-life market challenges, customer pain points, and competitive gaps 
                    using scientific research methodologies.
                </p>
            </div>

            <!-- Service 6 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300">
                <h3 class="text-xl font-semibold mb-4 text-blue-900">Business Strategy Consulting</h3>
                <p class="text-gray-600">
                    Convert insights into action with strategic consulting services focused on growth, 
                    branding, positioning, and market expansion.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-blue-900 text-white py-16 text-center">
    <h2 class="text-3xl font-bold mb-4">Ready to Solve Your Market Challenges?</h2>
    <p class="mb-6 text-gray-200">Let Tatva Research turn your data into strategic advantage.</p>
    <a href="contact.php" class="bg-yellow-400 text-blue-900 px-8 py-3 rounded-full font-semibold hover:bg-yellow-300 transition">
        Get in Touch
    </a>
</section>

<!-- Footer -->
<footer class="bg-black text-gray-400 py-8">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <p>&copy; <?php echo date("Y"); ?> Tatva Research. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
