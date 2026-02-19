<?php include 'components/common/header.php'?>
<?php include 'admin/includes/db.php';
$result= $conn->query("select * from research order by id desc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!--- Hero section--->
   <section class="bg-gradient-to-br from-[#0b1f3a] via-[#112b4e] to-[#1b3a5c]  text-white py-16 ">
<div class="max-w-6xl mx-auto px-6 text-center mt-8">
<h1 class="text-4xl md:text-5xl font-bold">Turning Insights Into Impactful Decisions</h1>
<p class="mt-4 text-blue-200">We empower businesses with deep research, data clarity, and strategic intelligence to unlock growth opportunities and stay ahead in a competitive world..</p>
</div>
</section>

<!-- creation of research grid-->
 <section class='max-w-6xl mx-auto px-6 py-12'>
    <div class='grid md:grid-cols-3 gap-8'>
        <?php while($research=$result->fetch_assoc()):?>
     <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">
     <img src="admin/research/uploads/<?php echo $research['image'];?>  "
     class="h-48 w-full object-cover">     
     <div class="p-5">

     <h3 class= "text-xl font-semibold mb-2">
     <?php echo $research['title'];?>
        </h3>
        <p class="text-gray-600 text-sm mb-4">
            <?php echo $research['Description'];?>
        </p>
       <a href="single_blog.php?id=<?php echo $research['id']; ?>" 
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