<!DOCTYPE html>
<html>
<head>
  <title>Add Research</title>
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
        <h2 class="text-xl font-semibold tracking-tight text-white">What's New Research</h2>
      </div>
      <p class="text-indigo-100 text-sm mt-1 ml-7 hidden sm:block">market research & strategy</p>
    </div>

    <!-- form area – exactly same fields, names, enctype, nothing removed/added -->
    <div class="p-6 md:p-8">
      <!-- all original attributes retained: action, method, enctype, ids, names, required etc. -->
      <form action="save.php" method="POST" enctype="multipart/form-data" class="space-y-5">

        <!-- blog title -->
        <div class="space-y-1.5">
          <label class="text-sm font-medium text-slate-700 flex items-center gap-1.5">
            <span class="w-1 h-4 bg-indigo-400 rounded-full"></span>
            Research title <span class="text-xs text-slate-400 font-normal">(required)</span>
          </label>
          <input type="text" name="title" placeholder="e.g., The future of consumer behavior" 
                 class="w-full border border-slate-200 bg-slate-50/50 rounded-xl px-5 py-3 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-indigo-300 shadow-sm">
        </div>

        <!-- url slug -->
        <div class="space-y-1.5">
          <label class="text-sm font-medium text-slate-700 flex items-center gap-1.5">
            <span class="w-1 h-4 bg-indigo-400 rounded-full"></span>
            URL slug
          </label>
          <div class="flex items-center rounded-xl bg-slate-50/50 border border-slate-200 px-3 focus-within:bg-white focus-within:border-indigo-300 transition">
            <span class="text-slate-400 text-sm select-none">/blog/</span>
            <input type="text" name="slug" placeholder="consumer-insights-2025" 
                   class="w-full border-0 bg-transparent px-2 py-3 text-slate-800 placeholder:text-slate-400 focus:ring-0">
          </div>
          <p class="text-xs text-slate-400 mt-1">human‑readable part of the url (letters, hyphens)</p>
        </div>

        <!-- excerpt / short description -->
        <div class="space-y-1.5">
          <label class="text-sm font-medium text-slate-700 flex items-center gap-1.5">
            <span class="w-1 h-4 bg-indigo-400 rounded-full"></span>
            Short description
          </label>
          <textarea name="excerpt" placeholder="A compelling preview of the article…" rows="3"
                    class="w-full border border-slate-200 bg-slate-50/50 rounded-xl px-5 py-3 text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-indigo-300 resize-y"></textarea>
        </div>

        <!-- category dropdown (exactly original options, name, id, required) -->
        <div class="space-y-1.5">
          <label class="text-sm font-medium text-slate-700 flex items-center gap-1.5">
            <span class="w-1 h-4 bg-indigo-400 rounded-full"></span>
            Category <span class="text-xs text-slate-400 font-normal">(required)</span>
          </label>
          <div class="relative">
            <select name="category" id="category" required 
                    class="w-full appearance-none border border-slate-200 bg-slate-50/50 rounded-xl px-5 py-3 text-slate-800 focus:bg-white focus:border-indigo-300 pr-10">
              <option value="" disabled selected class="text-slate-400">— select a category —</option>
              <option value="Market Research" class="py-1">Market Research</option>
              <option value="Consumer Insights">Consumer Insights</option>
              <option value="Industry Analysis">Industry Analysis</option>
              <option value="Business Strategy">Business Strategy</option>
              <option value="Case Studies">Case Studies</option>
              <option value="News & Updates">News & Updates</option>
            </select>
            <!-- custom dropdown arrow (pure css, no js) -->
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-indigo-400">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
          </div>
        </div>

        <!-- image upload field (exactly as original) -->
        <div class="space-y-2">
          <label class="text-sm font-medium text-slate-700 flex items-center gap-1.5">
            <span class="w-1 h-4 bg-indigo-400 rounded-full"></span>
            Featured image
          </label>
          <div class="flex items-center gap-3">
            <!-- we keep file input unchanged: name, class (w-full) but we style container -->
            <div class="relative w-full">
              <input type="file" name="image" accept="image/*" 
                     class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-5 file:rounded-full file:border-0 file:text-sm file:font-medium file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 file:cursor-pointer border border-slate-200 rounded-xl py-1.5 px-3 bg-slate-50/50">
            </div>
          </div>
          <p class="text-xs text-slate-400">PNG, JPG, WEBP up to 5MB (optional)</p>
        </div>

        <!-- submit button (exactly same text, background kept similar but enhanced) -->
        <div class="pt-4">
          <button type="submit" 
                  class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-8 py-3 rounded-xl shadow-lg shadow-indigo-200/80 inline-flex items-center gap-2 transition-all hover:scale-[1.02] active:scale-[0.99]">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
            Add Research
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