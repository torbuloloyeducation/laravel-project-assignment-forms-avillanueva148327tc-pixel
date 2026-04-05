@props([
    'title' => 'Eden Brook Inland Resort',
])
<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Premium Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        * { font-family: 'Outfit', sans-serif; }
        body { background-color: #1c3056; margin: 0; padding: 0; }
        .glass-nav { 
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .animate-bounce-subtle {
            animation: bounce-subtle 3s infinite;
        }
        @keyframes bounce-subtle {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head> 
<body class="min-h-full flex flex-col selection:bg-indigo-500/30">
    <header class="sticky top-0 z-50 glass-nav">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 group">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-black group-hover:rotate-12 transition-transform">EB</div>
                <span class="text-xl font-black text-white tracking-tighter">EDEN <span class="text-indigo-400">BROOK</span></span>
            </a>
            
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="text-sm font-bold text-gray-300 hover:text-white transition-colors">Home</a>
                <a href="/about" class="text-sm font-bold text-gray-300 hover:text-white transition-colors">About</a>
                <a href="/services" class="text-sm font-bold text-gray-300 hover:text-white transition-colors">Activities</a>
                <a href="/showcases" class="text-sm font-bold text-gray-300 hover:text-white transition-colors">Gallery</a>
                <a href="/blog" class="text-sm font-bold text-gray-300 hover:text-white transition-colors">Blog</a>
                <a href="/contact" class="px-5 py-2.5 bg-indigo-600 text-white rounded-full text-sm font-bold hover:bg-white hover:text-indigo-600 transition-all shadow-xl">Contact</a>
            </div>
            
            <!-- Mobile Menu Placeholder -->
            <button class="md:hidden text-white"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg></button>
        </nav>
    </header>

    <main class="flex-grow overflow-x-hidden">
        {{ $slot }}
    </main>

    <footer class="bg-gray-950/50 py-16 border-t border-white/5 mt-auto">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 items-center text-center md:text-left">
            <div>
                <span class="text-2xl font-black text-white mb-4 block tracking-tighter">EDEN BROOK</span>
                <p class="text-gray-500 text-sm leading-relaxed">&copy; 2026 Eden Brook Inland Resort. <br/>All rights reserved. Preserving nature's beauty since 2010.</p>
            </div>
            <div class="flex justify-center gap-8">
                <a href="#" class="text-gray-500 hover:text-indigo-400 transition-colors"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg></a>
                <a href="#" class="text-gray-500 hover:text-indigo-400 transition-colors"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.441 1.441 1.441c.795 0 1.439-.645 1.439-1.441s-.644-1.44-1.439-1.44z"/></svg></a>
                <a href="#" class="text-gray-500 hover:text-indigo-400 transition-colors"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg></a>
            </div>
            <div class="md:text-right">
                <a href="/formtest" class="text-indigo-400 font-bold hover:text-white transition-colors underline decoration-indigo-400/30 underline-offset-8">Join the Club</a>
            </div>
        </div>
    </footer>
</body>
</html>