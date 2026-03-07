<?php include 'components/common/header.php'?>
<?php include "admin/includes/db.php";
$result = $conn->query("SELECT * FROM blog ORDER BY id DESC");?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tatva Research Blogs</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
 
<!-- Hero Section -->
<section class="bg-gradient-to-br from-[#0b1f3a] via-[#112b4e] to-[#1b3a5c]  text-white py-16 ">
<div class="max-w-6xl mx-auto px-6 text-center mt-8">
<h1 class="text-4xl md:text-5xl font-bold">Insights & Research Blogs</h1>
<p class="mt-4 text-blue-200">Deep thinking. Real data. Practical insights.</p>
</div>
</section>

<!-- Blog Grid -->
<section class="max-w-6xl mx-auto px-6 py-12">

<div class="grid md:grid-cols-3 gap-8">

<?php while($blog = $result->fetch_assoc()): ?>

<div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">

<!-- Blog Image -->
<img src="admin/blogs/uploads/<?php echo $blog['image']; ?>" 
     class="h-48 w-full object-cover">

<div class="p-5">

<!-- Blog Title -->
<h3 class="text-xl font-semibold mb-2">
    <?php echo $blog['title']; ?>
</h3>

<!-- Blog Excerpt -->
<p class="text-gray-600 text-sm mb-4">
    <?php echo $blog['status']; ?>
</p>

<!-- Read More Button -->
<a href="single_blog.php?id=<?php echo $blog['id']; ?>" 
   class="text-indigo-600 font-medium hover:underline">
   Read More →
</a>

</div>
</div>

<?php endwhile; ?>

</div>

</section>

</body>
</html>
<?php include 'components/common/footer.php'?>
