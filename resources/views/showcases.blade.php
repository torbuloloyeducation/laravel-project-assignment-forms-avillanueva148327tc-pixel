<x-layout title="Gallery - Eden Brook Resort">
    <div class="py-24 px-4 bg-gray-900">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div class="max-w-2xl">
                    <h1 class="text-6xl font-black text-white mb-6 leading-tight tracking-tighter">Capturing <span class="text-indigo-400">Paradise</span></h1>
                    <p class="text-gray-400 text-lg leading-relaxed">A glimpse into the serene landscapes and vibrant activities that await you at Eden Brook. Every corner is a postcard waiting to happen.</p>
                </div>
                <div class="flex gap-4">
                    <button class="px-6 py-2 bg-indigo-600 text-white rounded-full font-bold text-sm shadow-lg shadow-indigo-500/20">All</button>
                    <button class="px-6 py-2 bg-white/5 text-gray-400 rounded-full font-bold text-sm hover:bg-white/10 transition-colors">Lake</button>
                    <button class="px-6 py-2 bg-white/5 text-gray-400 rounded-full font-bold text-sm hover:bg-white/10 transition-colors">Pools</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 pb-24">
                <!-- Large Featured Image (Lotus Pond) -->
                <div class="md:col-span-8 group relative overflow-hidden rounded-[2.5rem] shadow-2xl h-[500px]">
                    <img src="https://images.unsplash.com/photo-1544923246-77307dd654ca?auto=format&fit=crop&q=80&w=2000" alt="Lotus Pond" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-x-0 bottom-0 p-8 bg-gradient-to-t from-black/90 to-transparent">
                        <span class="inline-block px-3 py-1 bg-indigo-500 rounded-lg text-[10px] font-black tracking-widest text-white uppercase mb-3">Scenic</span>
                        <h4 class="text-2xl font-bold text-white uppercase tracking-wider">The Lotus Sanctuary</h4>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500">A peaceful bridge walk over our natural lotus pond, blooming year-round.</p>
                    </div>
                </div>

                <!-- Vertical Image (Pool View) -->
                <div class="md:col-span-4 group relative overflow-hidden rounded-[2.5rem] shadow-2xl h-[500px]">
                    <img src="https://images.unsplash.com/photo-1510414842594-a61c69b5ae57?auto=format&fit=crop&q=80&w=1000" alt="Pool" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-x-0 bottom-0 p-8 bg-gradient-to-t from-black/90 to-transparent">
                        <h4 class="text-xl font-bold text-white uppercase tracking-wider">Infinity Blue</h4>
                        <p class="text-gray-300 text-sm">Refreshing afternoon by the mural pool.</p>
                    </div>
                </div>

                <!-- Grid Bottom -->
                <div class="md:col-span-4 group relative overflow-hidden rounded-[2.5rem] shadow-2xl h-[350px]">
                    <img src="https://images.unsplash.com/photo-1505228395891-9a51e7e86bf6?auto=format&fit=crop&q=80&w=1000" alt="Boats" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center p-8 text-center backdrop-blur-sm">
                        <div>
                            <h4 class="text-2xl font-bold text-white uppercase mb-2">Lake Adventure</h4>
                            <p class="text-white/70 text-sm font-medium italic">Available daily for rental.</p>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-4 group relative overflow-hidden rounded-[2.5rem] shadow-2xl h-[350px]">
                    <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&q=80&w=1000" alt="Entrance" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-x-0 bottom-0 p-8 bg-gradient-to-t from-black/90 to-transparent">
                        <h4 class="text-lg font-bold text-white uppercase tracking-wider">The Grand Entrance</h4>
                    </div>
                </div>
                <div class="md:col-span-4 group relative overflow-hidden rounded-[2.5rem] shadow-2xl h-[350px]">
                    <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?auto=format&fit=crop&q=80&w=1000" alt="Lotus Close" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-x-0 bottom-0 p-8 bg-gradient-to-t from-black/90 to-transparent">
                        <h4 class="text-lg font-bold text-white uppercase tracking-wider">Nature's Detail</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
