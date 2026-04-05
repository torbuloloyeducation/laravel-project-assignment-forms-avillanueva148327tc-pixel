<x-layout title="Join Us - Eden Brook Resort">
    <div class="py-24 px-4 bg-[#1c3056]">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-5xl font-black text-white mb-4 tracking-tighter">Become a <span class="text-indigo-400">Regular</span></h1>
                <p class="text-gray-400 text-lg font-light">Join our exclusive mailing list for special discounts and event invites.</p>
            </div>

            @if (session('success'))
                <div class="bg-indigo-600/20 border border-indigo-500/50 text-indigo-100 p-6 rounded-3xl mb-8 flex items-center gap-4 animate-in fade-in zoom-in duration-300">
                    <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span class="font-bold">{{ session('success') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-500/10 border border-red-500/30 text-red-100 p-6 rounded-3xl mb-8 animate-in shake duration-300">
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li class="font-medium">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/formtest" class="p-12 bg-gray-800/50 backdrop-blur-3xl rounded-[3rem] border border-white/5 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.5)] mb-16">
                @csrf
                <div class="space-y-6">
                    <label for="email" class="block text-sm font-black text-indigo-400 uppercase tracking-[0.2em]">Your Email Address</label>
                    <div class="relative group">
                        <input id="email" type="text" name="email" placeholder="you@resort.com" 
                               class="block w-full bg-white/5 border border-white/10 rounded-2xl py-5 px-6 text-white placeholder:text-gray-600 focus:outline-none focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all text-lg font-medium" />
                        <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-gray-700 opacity-50 group-focus-within:text-indigo-500 group-focus-within:opacity-100 transition-opacity">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206"></path></svg>
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-black py-5 rounded-2xl transition-all shadow-xl shadow-indigo-600/30 text-lg uppercase tracking-widest">Subscribe Now</button>
                </div>
            </form>

            <div class="bg-black/20 backdrop-blur-md rounded-[3rem] border border-white/5 p-10">
                <div class="flex justify-between items-center mb-10">
                    <h2 class="text-3xl font-black text-white tracking-tight">Our <span class="text-indigo-400">Members</span></h2>
                    @if(count($emails) > 0)
                        <a href="/delete-emails" class="text-xs font-black uppercase tracking-widest text-gray-500 hover:text-red-500 transition-colors border-b border-gray-800 hover:border-red-500 pb-1">Reset List</a>
                    @endif
                </div>
                
                @if (count($emails) > 0)
                    <div class="grid grid-cols-1 gap-4">
                        @foreach ($emails as $email)
                            <div class="flex justify-between items-center p-6 bg-white/5 rounded-2xl border border-white/5 group hover:bg-white/[0.08] transition-all">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-indigo-500/20 rounded-full flex items-center justify-center text-indigo-400 text-xs font-black">EB</div>
                                    <span class="text-gray-200 font-medium">{{ $email }}</span>
                                </div>
                                <form method="POST" action="/delete-email">
                                    @csrf
                                    <input type="hidden" name="email" value="{{ $email }}">
                                    <button type="submit" class="p-2 text-red-500/40 hover:text-red-500 hover:bg-red-500/10 rounded-xl transition-all">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-10">
                        <div class="w-20 h-20 bg-gray-800/50 rounded-full flex items-center justify-center text-gray-600 mx-auto mb-6">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                        </div>
                        <p class="text-gray-500 font-medium">No members yet. Be the first to join!</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>