<x-app-layout>
    <div class="bg-gray-50 min-h-screen pt-32 pb-20 px-4">
        <div class="max-w-7xl mx-auto">
            
            <div class="mb-10 flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                     <span class="text-[#E0A6F1] font-bold tracking-widest text-xs uppercase mb-2 block">Event Details</span>
                    <h1 class="text-3xl md:text-5xl font-bold text-gray-800">
                        {{ $event->title }}
                    </h1>
                </div>
                
                @if(auth()->user()->role >= 1)
                    <a href="{{ route('events.edit', $event->id) }}" class="bg-white text-gray-600 border border-gray-200 px-6 py-2 rounded-full font-bold hover:bg-gray-50 transition shadow-sm flex items-center gap-2">
                        <span>Edit Event</span> ✎
                    </a>
                @endif
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-10">
                
                <div class="md:col-span-7 bg-white p-8 rounded-[2.5rem] shadow-xl border border-gray-100 h-fit">
                    <div class="space-y-8">
                        
                         <div class="rounded-3xl overflow-hidden shadow-lg border-4 border-gray-50">
                            @if($event->image_path)
                                <img src="{{ asset('storage/' . $event->image_path) }}" class="w-full h-auto object-cover">
                            @else
                                <div class="w-full h-64 bg-gray-200 flex items-center justify-center text-gray-400">No Image Uploaded</div>
                            @endif
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-4">
                            <div>
                                <h3 class="font-bold text-gray-400 text-xs uppercase tracking-widest mb-1">Venue</h3>
                                <p class="text-xl font-bold text-gray-800 leading-tight">{{ $event->venue }}</p>
                            </div>

                            <div>
                                <h3 class="font-bold text-gray-400 text-xs uppercase tracking-widest mb-1">Date & Time</h3>
                                <p class="text-xl font-bold text-gray-800">
                                    {{ \Carbon\Carbon::parse($event->date)->format('j F Y') }}
                                </p>
                                <p class="text-[#b968cc] font-medium">{{ $event->time_range }}</p>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100">
                            <h3 class="font-bold text-gray-400 text-xs uppercase tracking-widest mb-2">Dress Code</h3>
                            <div class="bg-purple-50 rounded-2xl p-5 text-gray-700">
                                <p class="text-sm leading-relaxed text-purple-900 font-medium whitespace-pre-wrap">{{ $event->dress_code }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-5 bg-[#F8D7F9] p-10 rounded-[2.5rem] shadow-xl relative overflow-hidden h-fit">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-[#E0A6F1] rounded-bl-[4rem] opacity-50"></div>

                    <h3 class="font-bold text-2xl text-gray-800 mb-6 relative z-10 border-b-2 border-white/40 pb-4 inline-block">
                        Event Description & Itinerary
                    </h3>
                    
                    <div class="relative z-10 text-gray-900">
                        <div class="text-lg font-medium leading-relaxed text-left whitespace-pre-wrap font-sans">
{{ $event->description }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>