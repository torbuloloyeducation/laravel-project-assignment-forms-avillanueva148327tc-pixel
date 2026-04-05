<x-layout title="Home - Eden Brook Resort">
    <!-- Hero Section -->
    <div class="relative h-[80vh] flex items-center justify-center overflow-hidden">
        <img src="https://images.unsplash.com/photo-1540541338287-41700207dee6?auto=format&fit=crop&q=80&w=2070" 
             alt="Resort View" class="absolute inset-0 w-full h-full object-cover brightness-50 contrast-125 transition-transform duration-[10000ms] hover:scale-110">
        <div class="relative z-10 text-center px-4 max-w-4xl animate-in fade-in slide-in-from-bottom-10 duration-1000">
            <h1 class="text-6xl md:text-8xl font-black text-white mb-6 tracking-tighter drop-shadow-2xl">
                Eden Brook <span class="text-indigo-400">Inland Resort</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-10 font-light tracking-wide leading-relaxed drop-shadow-lg">
                Discover a sanctuary of peace and adventure by the lake. Your perfect getaway for relaxation, fun, and nature.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/formtest" class="group px-8 py-4 bg-indigo-600 text-white font-bold rounded-full hover:bg-white hover:text-indigo-600 transition-all duration-300 shadow-xl flex items-center gap-2">
                    Join Our Community 
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </a>
                <a href="/services" class="px-8 py-4 bg-white/10 backdrop-blur-md text-white border border-white/20 font-bold rounded-full hover:bg-white/20 transition-all duration-300 shadow-lg">
                    Explore Services
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-[#1c3056] to-transparent"></div>
    </div>

    <!-- Quick Stats -->
    <div class="max-w-7xl mx-auto px-4 -mt-16 relative z-20 grid grid-cols-2 md:grid-cols-4 gap-4">
        @php
            $stats = [
                ['label' => 'Pools', 'value' => '3'],
                ['label' => 'Acre Park', 'value' => '15'],
                ['label' => 'Pedal Boats', 'value' => '20+'],
                ['label' => 'Guest Capacity', 'value' => '500+']
            ];
        @endphp
        @foreach($stats as $stat)
        <div class="bg-gray-800/90 backdrop-blur-xl border border-white/5 p-6 rounded-2xl shadow-2xl text-center group hover:border-indigo-500/50 transition-colors">
            <span class="block text-3xl font-black text-indigo-400 mb-1">{{ $stat['value'] }}</span>
            <span class="text-xs uppercase tracking-widest text-gray-400 font-bold">{{ $stat['label'] }}</span>
        </div>
        @endforeach
    </div>

    <!-- Main Features Preview -->
    <div class="max-w-7xl mx-auto px-4 py-24">
        <div class="flex flex-col md:flex-row items-center gap-16">
            <div class="flex-1 space-y-8">
                <div class="inline-block px-4 py-1.5 bg-indigo-500/10 border border-indigo-500/20 rounded-full text-indigo-400 text-sm font-bold tracking-wider uppercase mb-4">
                    Escape to Nature
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight tracking-tight">
                    Experience the Magic of <br/>Our Lotus-Filled Lake
                </h2>
                <p class="text-gray-400 text-lg leading-relaxed">
                    At Eden Brook, we offer more than just a place to stay. Our resort features a stunning 5-acre lake covered in vibrant lotuses. Take a peaceful walk along our wooden bridges or rent a pedal boat for a unique experience on the water.
                </p>
                <ul class="space-y-4">
                    @foreach(['Crystal Clear Swimming Pools', 'Scenic Wood-Walk Bridges', 'Romantic Lake Pedal Boats', 'Lotus Flowers Observation Deck'] as $feature)
                    <li class="flex items-center gap-3 text-gray-300 font-medium">
                        <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex-1 relative">
                <div class="absolute -inset-4 bg-indigo-500/20 blur-3xl rounded-full"></div>
                <div class="relative grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&q=80&w=1000" class="rounded-3xl shadow-2xl h-64 w-full object-cover" alt="Lake">
                    <img src="https://images.unsplash.com/photo-1544124499-583dcee7ca8c?auto=format&fit=crop&q=80&w=1000" class="rounded-3xl shadow-2xl h-64 w-full object-cover mt-8" alt="Pool">
                </div>
            </div>
        </div>
    </div>
</x-layout>