<?php
include "../includes/db.php";

// Get blog ID from URL
if (!isset($_GET['id'])) {
    header("Location: blogs.php");
    exit();
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM blog WHERE id='$id'");
$row = $result->fetch_assoc();

// Handle Form Submission for Update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $excerpt = $_POST['excerpt']; // Note: Saved in 'status' column in DB
    $category = $_POST['category'];
    
    // Check if a new image was uploaded
    $imageName = $_FILES['image']['name'];
    
    if (!empty($imageName)) {
        // If new image is uploaded, move it and update image in DB
        $tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp, "uploads/" . $imageName);
        
        $stmt = $conn->prepare("UPDATE blog SET title=?, slug=?, category=?, status=?, image=? WHERE id=?");
        $stmt->bind_param("sssssi", $title, $slug, $category, $excerpt, $imageName, $id);
    } else {
        // If no new image, update everything else except image
        $stmt = $conn->prepare("UPDATE blog SET title=?, slug=?, category=?, status=? WHERE id=?");
        $stmt->bind_param("ssssi", $title, $slug, $category, $excerpt, $id);
    }
    
    if($stmt->execute()){
        header("Location: blogs.php");
        exit();
    } else {
        echo "Error updating blog!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Blog · Nexum</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    input, select, textarea, button { transition: all 0.18s ease; }
    input:focus, select:focus, textarea:focus { outline: 2px solid rgba(99,102,241,0.25); outline-offset: 2px; }
  </style>
</head>
<body class="bg-slate-50 font-sans antialiased flex items-start justify-center p-4 md:p-8">

  <div class="w-full max-w-2xl bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl shadow-indigo-100/50 border border-slate-200 overflow-hidden">

    <div class="bg-gradient-to-r from-indigo-700 to-indigo-500 px-6 py-5">
      <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
        <h2 class="text-xl font-semibold tracking-tight text-white">Edit Blog</h2>
      </div>
      <p class="text-indigo-100 text-sm mt-1 ml-7 hidden sm:block">Update your existing blog details</p>
    </div>

    <div class="p-6 md:p-8">
      <form action="" method="POST" enctype="multipart/form-data" class="space-y-5">

        <div class="space-y-1.5">
          <label class="text-sm font-medium text-slate-700 flex items-center gap-1.5">
            <span class="w-1 h-4 bg-indigo-400 rounded-full"></span>
            Blog title <span class="text-xs text-slate-400 font-normal">(required)</span>
          </label>
          <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required
                 class="w-full border border-slate-200 bg-slate-50/50 rounded-xl px-5 py-3 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-indigo-300 shadow-sm">
        </div>

        <div class="space-y-1.5">
          <label class="text-sm font-medium text-slate-700 flex items-center gap-1.5">
            <span class="w-1 h-4 bg-indigo-400 rounded-full"></span>
            URL slug
          </label>
          <div class="flex items-center rounded-xl bg-slate-50/50 border border-slate-200 px-3 focus-within:bg-white focus-within:border-indigo-300 transition">
            <span class="text-slate-400 text-sm select-none">/blog/</span>
            <input type="text" name="slug" value="<?php echo htmlspecialchars($row['slug']); ?>" required
                   class="w-full border-0 bg-transparent px-2 py-3 text-slate-800 placeholder:text-slate-400 focus:ring-0">
          </div>
        </div>

        <div class="space-y-1.5">
          <label class="text-sm font-medium text-slate-700 flex items-center gap-1.5">
            <span class="w-1 h-4 bg-indigo-400 rounded-full"></span>
            Short description
          </label>
          <textarea name="excerpt" rows="3" required
                    class="w-full border border-slate-200 bg-slate-50/50 rounded-xl px-5 py-3 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-indigo-300 resize-y"><?php echo htmlspecialchars($row['status']); ?></textarea>
        </div>

        <div class="space-y-1.5">
          <label class="text-sm font-medium text-slate-700 flex items-center gap-1.5">
            <span class="w-1 h-4 bg-indigo-400 rounded-full"></span>
            Category <span class="text-xs text-slate-400 font-normal">(required)</span>
          </label>
          <div class="relative">
            <select name="category" required 
                    class="w-full appearance-none border border-slate-200 bg-slate-50/50 rounded-xl px-5 py-3 text-slate-800 focus:bg-white focus:border-indigo-300 pr-10">
              <option value="Market Research" <?php if($row['category'] == 'Market Research') echo 'selected'; ?>>Market Research</option>
              <option value="Consumer Insights" <?php if($row['category'] == 'Consumer Insights') echo 'selected'; ?>>Consumer Insights</option>
              <option value="Industry Analysis" <?php if($row['category'] == 'Industry Analysis') echo 'selected'; ?>>Industry Analysis</option>
              <option value="Business Strategy" <?php if($row['category'] == 'Business Strategy') echo 'selected'; ?>>Business Strategy</option>
              <option value="Case Studies" <?php if($row['category'] == 'Case Studies') echo 'selected'; ?>>Case Studies</option>
              <option value="News & Updates" <?php if($row['category'] == 'News & Updates') echo 'selected'; ?>>News & Updates</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-indigo-400">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
          </div>
        </div>

        <div class="space-y-2">
          <label class="text-sm font-medium text-slate-700 flex items-center gap-1.5">
            <span class="w-1 h-4 bg-indigo-400 rounded-full"></span>
            Featured image
          </label>
          
          <?php if(!empty($row['image'])): ?>
          <div class="mb-2">
             <p class="text-xs text-slate-500 mb-1">Current Image:</p>
             <img src="uploads/<?php echo $row['image']; ?>" alt="Current Blog Image" class="w-32 h-20 object-cover rounded border">
          </div>
          <?php endif; ?>

          <div class="flex items-center gap-3">
            <div class="relative w-full">
              <input type="file" name="image" accept="image/*" 
                     class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-5 file:rounded-full file:border-0 file:text-sm file:font-medium file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 file:cursor-pointer border border-slate-200 rounded-xl py-1.5 px-3 bg-slate-50/50">
            </div>
          </div>
          <p class="text-xs text-slate-400">Leave blank if you don't want to change the image.</p>
        </div>

        <div class="pt-4 flex gap-4">
          <button type="submit" 
                  class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-8 py-3 rounded-xl shadow-lg shadow-indigo-200/80 inline-flex items-center gap-2 transition-all hover:scale-[1.02] active:scale-[0.99]">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
            Update Blog
          </button>
          <a href="blogs.php" class="bg-slate-200 hover:bg-slate-300 text-slate-700 font-medium px-8 py-3 rounded-xl transition-all">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>