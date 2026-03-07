<!-- ---------- LEFT: FORM with luxurious card & floating labels ---------- -->
<div class="glass-card rounded-3xl shadow-2xl p-8 md:p-10 border border-white/50 dark:border-gray-700/50 backdrop-blur-xl">
    <div class="flex items-center gap-3 mb-8">
        <span class="p-3 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl shadow-lg">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
        </span>
        <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Send a message</h2>
    </div>
    <?php if (isset($_GET['success'])): ?>

        <div class="mb-6 p-4 rounded-xl bg-green-100 border border-green-300 text-green-800 font-medium">
            ✅ Your message has been sent successfully! Our team will contact you soon.
        </div>

    <?php endif; ?>

    <form method="POST" action="admin/contacts/contact_submit.php" class="space-y-7">
        <!-- full name with icon -->
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-500 dark:text-gray-400">👤</span>
            <input type="text" name="name" placeholder="Your full name"
                class="w-full pl-11 pr-5 py-4 rounded-2xl border border-gray-200 dark:border-gray-700 bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm focus:bg-white dark:focus:bg-gray-800 focus:ring-4 focus:ring-blue-500/20 outline-none transition dark:text-white">
        </div>

        <!-- email -->
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-500 dark:text-gray-400">✉️</span>
            <input type="email" name="email" placeholder="Email address"
                class="w-full pl-11 pr-5 py-4 rounded-2xl border border-gray-200 dark:border-gray-700 bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm focus:bg-white dark:focus:bg-gray-800 focus:ring-4 focus:ring-blue-500/20 outline-none transition dark:text-white">
        </div>

        <!-- message -->
        <div class="relative">
            <span class="absolute top-5 left-0 pl-4 text-gray-500 dark:text-gray-400">💬</span>
            <textarea name="message" rows="5" placeholder="How can we help you?"
                class="w-full pl-11 pr-5 py-4 rounded-2xl border border-gray-200 dark:border-gray-700 bg-white/70 dark:bg-gray-800/70 backdrop-blur-sm focus:bg-white dark:focus:bg-gray-800 focus:ring-4 focus:ring-blue-500/20 outline-none transition dark:text-white"></textarea>
        </div>

        <button type="submit"
            class="group relative w-full py-4 px-6 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-[1.02] transition duration-300 flex items-center justify-center gap-3">
            <span>Send message</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </button>

        <p class="text-xs text-gray-500 dark:text-gray-400 text-center mt-4">
            We’ll respond within 24 hours, usually sooner 🚀
        </p>
    </form>

</div>