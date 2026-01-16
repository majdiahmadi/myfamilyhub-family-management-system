<x-app-layout>
    <div class="bg-gray-50 min-h-screen pt-32 pb-20">
        
        <div id="background" class="max-w-7xl mx-auto px-6 mb-16 scroll-mt-32">
            <div class="bg-white rounded-[2.5rem] p-10 md:p-14 shadow-xl border border-gray-100 relative overflow-hidden">
                <div class="absolute -right-20 -top-20 w-64 h-64 bg-purple-50 rounded-full opacity-50 blur-3xl"></div>
                
                <h2 class="text-3xl font-bold text-gray-800 mb-8 relative z-10">Tawakkal Family Background</h2>
                
                <div class="flex flex-col md:flex-row gap-12 items-start relative z-10 mb-12">
                    
                    <div class="text-center min-w-[200px] flex flex-col items-center justify-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Tawakkal Logo" class="h-48 w-auto object-contain">
                    </div>
                    
                    <div class="md:border-l-2 md:border-gray-100 md:pl-12">
                        <h3 class="text-2xl font-serif font-bold mb-4 text-gray-900">Who is “Tawakkal”?</h3>
                        <p class="text-gray-600 leading-relaxed text-lg font-light">
                            Tawakkal is the earliest generation of our family, as recounted by the ancestors we were fortunate to meet. We regard him as the foundation, the root generation, the First Generation, of our family lineage.
                        </p>
                        <p class="mt-6 text-gray-500 leading-relaxed">
                            The Tawakkal Family traces its roots back to the first generation, beginning with Tawakkal, who married Zabedah. Each generation has carried forward the values established by them, such as unity, responsibility, and mutual respect.
                        </p>
                    </div>
                </div>

                <div class="relative z-10 mt-8">
                    <div class="rounded-3xl overflow-hidden shadow-lg border-4 border-gray-50">
                        @if(file_exists(public_path('images/family_background.jpg')))
                            <img src="{{ asset('images/family_background.jpg') }}" class="w-full h-auto object-cover">
                        @else
                            <img src="https://via.placeholder.com/1200x600?text=Upload+family_background.jpg" class="w-full h-auto object-cover">
                        @endif
                    </div>
                    <p class="text-center text-gray-400 text-sm mt-3 italic">The Extended Tawakkal Family</p>
                </div>

            </div>
        </div>

        <div id="tree" class="max-w-7xl mx-auto px-6 mb-16 scroll-mt-32">
            <div class="bg-white rounded-[2.5rem] p-10 md:p-14 shadow-xl border border-gray-100 text-center">
                <h2 class="text-4xl font-serif font-bold text-gray-800 mb-6">The Family Tree</h2>
                
                <p class="text-gray-500 max-w-2xl mx-auto mb-10 text-lg">
                    Explore our roots using the Ancestry platform.
                </p>

                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <a href="https://www.ancestry.com" target="_blank" 
                       class="bg-gradient-to-r from-[#E0A6F1] to-purple-400 hover:to-purple-500 text-white font-bold py-3 px-10 rounded-full shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                        View Ancestry Link ↗
                    </a>

                    @if(auth()->user()->role >= 1)
                        <a href="{{ route('members.create') }}" class="bg-white text-purple-600 border border-purple-100 font-bold py-3 px-8 rounded-full shadow-sm hover:shadow-md hover:bg-purple-50 transition-all duration-300">
                            + Add Member
                        </a>
                        <a href="{{ route('members.index') }}" class="bg-white text-purple-600 border border-purple-100 font-bold py-3 px-8 rounded-full shadow-sm hover:shadow-md hover:bg-purple-50 transition-all duration-300">
                            Edit Members
                        </a>
                    @endif
                </div>

                <div class="inline-block rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                    <img src="{{ asset('images/tree.png') }}" alt="Family Tree" class="max-w-4xl w-full hover:scale-105 transition duration-700">
                </div>
            </div>
        </div>

        <div id="events" class="max-w-7xl mx-auto px-6 scroll-mt-32">
            
            <div class="mb-16">
                <h2 class="text-3xl font-serif font-bold text-gray-400 mb-8 ml-2">Past Memories</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @if(isset($pastEvents) && $pastEvents->count() > 0)
                        @foreach($pastEvents as $index => $event)
                            <div class="group">
                                <span class="text-6xl text-gray-200 font-light mb-2 block group-hover:text-[#E0A6F1] transition-colors">0{{ $index + 1 }}</span>
                                
                                <a href="{{ route('events.show', $event->id) }}" class="block rounded-[2rem] overflow-hidden mb-5 h-64 shadow-md bg-gray-100 relative">
                                     @if($event->image_path)
                                        <img src="{{ asset('storage/' . $event->image_path) }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700">
                                    @else
                                        <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">No Image</div>
                                    @endif
                                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition"></div>
                                </a>

                                <div class="flex justify-between items-start">
                                    <h4 class="font-bold text-xl text-gray-700 group-hover:text-purple-600 transition">
                                        {{ $event->title }}
                                    </h4>
                                    
                                    @if(auth()->user()->role >= 1)
                                        <a href="{{ route('events.edit', $event->id) }}" class="text-xs font-bold text-gray-400 hover:text-[#E0A6F1] hover:underline ml-2 pt-1">
                                            Edit ✎
                                        </a>
                                    @endif
                                </div>

                                <p class="text-gray-400 text-sm mt-1">
                                    {{ \Carbon\Carbon::parse($event->date)->format('j F Y') }}
                                </p>
                            </div>
                        @endforeach
                    @else
                        <p class="text-gray-400 col-span-3 italic">No past events found.</p>
                    @endif
                </div>
            </div>

            <div class="mb-10">
                <div class="flex items-center gap-4 mb-8">
                    <h2 class="text-4xl font-serif font-bold text-gray-800">Upcoming Events</h2>
                    
                    @if(auth()->user()->role >= 1)
                        <a href="{{ route('events.create') }}" class="w-12 h-12 rounded-full bg-purple-50 text-[#E0A6F1] flex items-center justify-center text-3xl shadow-sm hover:bg-[#E0A6F1] hover:text-white transition-all duration-300 pb-1">
                            +
                        </a>
                    @endif
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @forelse($upcomingEvents as $index => $event)
                        <div class="bg-white rounded-[2rem] p-6 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 relative">
                            
                            <span class="text-5xl text-gray-100 font-light mb-4 block">0{{ $index + 1 }}</span>
                            
                            <div class="rounded-[1.5rem] overflow-hidden mb-6 h-56 shadow-inner relative">
                                @if($event->image_path)
                                    <img src="{{ asset('storage/' . $event->image_path) }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full bg-purple-50"></div>
                                @endif
                                
                                <div class="absolute top-3 right-3 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                                    {{ \Carbon\Carbon::parse($event->date)->format('M d') }}
                                </div>

                                @if(auth()->user()->role >= 1)
                                    <a href="{{ route('events.edit', $event->id) }}" class="absolute top-3 left-3 bg-white/90 hover:bg-[#E0A6F1] hover:text-white backdrop-blur w-8 h-8 flex items-center justify-center rounded-full text-xs font-bold shadow-sm transition">
                                        ✎
                                    </a>
                                @endif
                            </div>

                            <h4 class="font-bold text-xl text-gray-900 mb-2 leading-tight">{{ $event->title }}</h4>
                            <p class="text-gray-500 text-sm mb-6 line-clamp-2">
                                {{ Str::limit($event->description, 80) }}
                            </p>
                            
                            <a href="{{ route('events.show', $event->id) }}" class="block w-full text-center bg-[#E0A6F1]/10 text-[#a95ebf] font-bold py-3 rounded-xl hover:bg-[#E0A6F1] hover:text-white transition-all duration-300">
                                See Details ↗
                            </a>
                        </div>
                    @empty
                        <div class="col-span-3 p-10 bg-white rounded-[2rem] border border-dashed border-gray-300 text-center">
                            <p class="text-gray-400">No upcoming events found.</p>
                        </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</x-app-layout>