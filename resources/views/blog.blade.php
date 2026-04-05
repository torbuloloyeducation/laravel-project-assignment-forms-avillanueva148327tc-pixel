<x-layout title="Resort Journal - Eden Brook Resort">
    <div class="py-24 px-4 bg-gray-900">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-6xl font-black text-white mb-6">Resort <span class="text-indigo-400">Journal</span></h1>
                <p class="text-gray-400 text-lg">Stay updated with the latest happenings, seasonal events, and nature's transitions at Eden Brook.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Main News -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-[2.5rem] mb-6 aspect-video">
                        <img src="https://images.unsplash.com/photo-1549294413-26f195200c16?auto=format&fit=crop&q=80&w=1000" alt="Festival" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute top-6 left-6 bg-white px-4 py-2 rounded-full text-indigo-900 font-bold text-xs uppercase tracking-widest shadow-xl">Latest News</div>
                    </div>
                    <div class="px-2">
                        <span class="text-indigo-400 font-bold text-sm uppercase tracking-widest">April 4, 2026</span>
                        <h2 class="text-3xl font-black text-white mt-2 mb-4 group-hover:text-indigo-400 transition-colors tracking-tight">The Annual Lotus Festival Begins Next Week</h2>
                        <p class="text-gray-400 leading-relaxed mb-6 font-light text-lg">Experience the lake in its full glory as thousands of lotus flowers bloom simultaneously. Join us for a week of nature walks, photography workshops, and boat parades.</p>
                        <a href="#" class="inline-flex items-center gap-2 text-white font-bold border-b-2 border-indigo-500 pb-1 hover:gap-4 transition-all">Read More</a>
                    </div>
                </div>

                <!-- Secondary News -->
                <div class="space-y-12">
                    <div class="flex flex-col sm:flex-row gap-6 group cursor-pointer">
                        <div class="w-full sm:w-48 h-48 overflow-hidden rounded-3xl shrink-0">
                            <img src="https://images.unsplash.com/photo-1544124499-583dcee7ca8c?auto=format&fit=crop&q=80&w=500" alt="Boats" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div>
                            <span class="text-indigo-400 font-bold text-xs uppercase tracking-widest">March 28, 2026</span>
                            <h3 class="text-xl font-bold text-white mt-1 mb-2 group-hover:text-indigo-400 transition-colors">New Fleet of Swan Pedal Boats Arrives</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">We've added 10 new high-stability swan-shaped pedal boats to our rental center, perfect for sunset cruises.</p>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-6 group cursor-pointer">
                        <div class="w-full sm:w-48 h-48 overflow-hidden rounded-3xl shrink-0">
                            <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?auto=format&fit=crop&q=80&w=500" alt="Eco" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        </div>
                        <div>
                            <span class="text-indigo-400 font-bold text-xs uppercase tracking-widest">March 15, 2026</span>
                            <h3 class="text-xl font-bold text-white mt-1 mb-2 group-hover:text-indigo-400 transition-colors">Eco-Preservation: Protecting Our Lake</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">Learn about the biological filtration systems we've introduced to keep our lake water crystal clear for the local ecosystem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
