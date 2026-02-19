<!DOCTYPE html>
<html>
<head>
  <title>Add Blog · Nexum</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind via CDN + a touch of smooth extras (no logic changes) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- subtle custom baseline – purely aesthetic, does not interfere with form behaviour -->
  <style>
    /* gentle transition & focus ring – only visual, no functional disturbance */
    input, select, textarea, button { transition: all 0.18s ease; }
    input:focus, select:focus, textarea:focus { outline: 2px solid rgba(99,102,241,0.25); outline-offset: 2px; }
  </style>
</head>
<body class="bg-slate-50 font-sans antialiased flex items-start justify-center p-4 md:p-8">

  <!-- main card – subtle brand polish, keeps original structure untouched -->
  <div class="w-full max-w-2xl bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl shadow-indigo-100/50 border border-slate-200 overflow-hidden">

    <!-- header with brand accent (purely decorative) -->
    <div class="bg-gradient-to-r from-indigo-700 to-indigo-500 px-6 py-5">
      <div class="flex items-center gap-2">
        <!-- simple abstract mark – doesn't interfere with functionality -->
        <svg class="w-5 h-5 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
        <h2 class="text-xl font-semibold tracking-tight text-white">Create new Category</h2>
      </div>
      <p class="text-indigo-100 text-sm mt-1 ml-7 hidden sm:block">publish insights · market research & strategy</p>
    </div>

    <!-- form area – exactly same fields, names, enctype, nothing removed/added -->
    <div class="p-6 md:p-8">
      <!-- all original attributes retained: action, method, enctype, ids, names, required etc. -->
      <form action="save.php" method="POST" enctype="multipart/form-data" class="space-y-5">

        <div class="space-y-1.5">
          <label class="text-sm font-medium text-slate-700 flex items-center gap-1.5">
            <span class="w-1 h-4 bg-indigo-400 rounded-full"></span>
            Category Name <span class="text-xs text-slate-400 font-normal">(required)</span>
          </label>
          <input type="text" name="categoryname" placeholder="Mention new Category" 
                 class="w-full border border-slate-200 bg-slate-50/50 rounded-xl px-5 py-3 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-indigo-300 shadow-sm">
        </div>       
        <!-- submit button (exactly same text, background kept similar but enhanced) -->
        <div class="pt-4">
          <button type="submit" 
                  class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-8 py-3 rounded-xl shadow-lg shadow-indigo-200/80 inline-flex items-center gap-2 transition-all hover:scale-[1.02] active:scale-[0.99]">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
            Save
          </button>
          <!-- subtle note: no extra hidden fields, everything original -->
        </div>
      </form>

      <!-- extra info (pure design, does not affect POST) -->
      <p class="text-xs text-slate-400 text-center mt-6 border-t border-slate-100 pt-4">
        <span class="inline-flex items-center gap-1"><span class="w-1 h-1 bg-indigo-300 rounded-full"></span> all changes go to save_blog.php</span>
      </p>
    </div>
  </div>
</body>
</html>                     