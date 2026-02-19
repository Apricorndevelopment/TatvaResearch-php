<?php include "../includes/auth.php"; ?>
<?php include "../includes/header.php"; ?>
<?php include "../includes/sidebar.php"; ?>
<?php include "../includes/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>

<!-- Tailwind CDN -->
<script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">


<div class="p-6 flex-1">

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

        <div class="bg-white rounded-xl shadow p-6">
            <p class="text-gray-500 text-sm">Total Users</p>
            <h2 class="text-3xl font-bold mt-2">1,245</h2>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <p class="text-gray-500 text-sm">Monthly Income</p>
            <h2 class="text-3xl font-bold mt-2">₹85,000</h2>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <p class="text-gray-500 text-sm">New Registrations</p>
            <h2 class="text-3xl font-bold mt-2">120</h2>
        </div>
          <div class="bg-white rounded-xl shadow p-6">
            <p class="text-gray-500 text-sm">Pending issues</p>
            <h2 class="text-3xl font-bold mt-2">5</h2>
        </div>


    </div>

<?php
/* ====== TOTAL COUNTS ====== */
$blogCount = $conn->query("SELECT COUNT(*) as total FROM blog")->fetch_assoc()['total'];
$contactCount = $conn->query("SELECT COUNT(*) as total FROM contacts")->fetch_assoc()['total'];

/* ====== MONTHLY BLOG DATA ====== */
$blogData = [];
$blogLabels = [];

$blogQuery = $conn->query("
    SELECT DATE_FORMAT(created_at,'%b') as month,
    COUNT(*) as total
    FROM blog
    GROUP BY MONTH(created_at)
");

while($row = $blogQuery->fetch_assoc()){
    $blogLabels[] = $row['month'];
    $blogData[] = $row['total'];
}

/* ====== MONTHLY CONTACT DATA ====== */
$contactData = [];
$contactLabels = [];

$contactQuery = $conn->query("
    SELECT DATE_FORMAT(created_at,'%b') as month,
    COUNT(*) as total
    FROM contacts
    GROUP BY MONTH(created_at)
");

while($row = $contactQuery->fetch_assoc()){
    $contactLabels[] = $row['month'];
    $contactData[] = $row['total'];
}
?>

<div class="p-8 bg-gray-100 min-h-screen">

<h1 class="text-3xl font-bold mb-8 text-gray-800">📊 Dashboard Overview</h1>

<!-- KPI Cards -->
<div class="grid md:grid-cols-2 gap-8 mb-10">

    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white p-8 rounded-2xl shadow-xl">
        <h3 class="text-lg font-medium">Total Blogs</h3>
        <p class="text-4xl font-bold mt-4"><?php echo $blogCount; ?></p>
    </div>

    <div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white p-8 rounded-2xl shadow-xl">
        <h3 class="text-lg font-medium">Total Contacts</h3>
        <p class="text-4xl font-bold mt-4"><?php echo $contactCount; ?></p>
    </div>

</div>

<!-- Charts Section -->
<div class="grid md:grid-cols-2 gap-8">

    <!-- Blog Chart -->
    <div class="bg-white p-6 rounded-2xl shadow-lg">
        <h3 class="text-lg font-semibold mb-4">Blogs Growth</h3>
        <canvas id="blogChart"></canvas>
    </div>

    <!-- Contact Chart -->
    <div class="bg-white p-6 rounded-2xl shadow-lg">
        <h3 class="text-lg font-semibold mb-4">Contacts Growth</h3>
        <canvas id="contactChart"></canvas>
    </div>

</div>

</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

/* BLOG CHART */
const blogCtx = document.getElementById('blogChart');

new Chart(blogCtx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($blogLabels); ?>,
        datasets: [{
            label: 'Blogs Published',
            data: <?php echo json_encode($blogData); ?>,
            borderColor: '#4F46E5',
            backgroundColor: 'rgba(79,70,229,0.1)',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: true }
        }
    }
});

/* CONTACT CHART */
const contactCtx = document.getElementById('contactChart');

new Chart(contactCtx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($contactLabels); ?>,
        datasets: [{
            label: 'Contacts Received',
            data: <?php echo json_encode($contactData); ?>,
            backgroundColor: '#10B981'
        }]
    },
    options: {
        responsive: true
    }
});

</script>

</body>
</html>


  

</div>

</body>
</html>
