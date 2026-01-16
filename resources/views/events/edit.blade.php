<x-app-layout>
    <div class="bg-[#E0A6F1] min-h-screen flex items-center justify-center pt-32 pb-12 px-4">
        
        <div class="bg-[#F8D7F9] rounded-[2rem] p-8 md:p-10 shadow-xl w-full max-w-2xl border-4 border-white/30">
            
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-black">Edit Event</h2>
                <p class="text-gray-700 mt-2">Update details for {{ $event->title }}</p>
            </div>

            <form method="POST" action="{{ route('events.update', $event->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block font-bold mb-2 ml-1 text-black">Event Name</label>
                    <input type="text" name="title" value="{{ $event->title }}" required
                           class="block w-full h-12 rounded-lg border-2 border-purple-300 bg-white px-4 text-black focus:ring-2 focus:ring-purple-500 shadow-sm">
                </div>

                <div class="mb-4">
                    <label class="block font-bold mb-2 ml-1 text-black">Description</label>
                    <textarea name="description" rows="4" required
                              class="block w-full rounded-lg border-2 border-purple-300 bg-white px-4 py-3 text-black focus:ring-2 focus:ring-purple-500 shadow-sm">{{ $event->description }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block font-bold mb-2 ml-1 text-black">Date</label>
                        <input type="date" name="date" value="{{ $event->date }}" required
                               class="block w-full h-12 rounded-lg border-2 border-purple-300 bg-white px-4 text-black focus:ring-2 focus:ring-purple-500 shadow-sm">
                    </div>
                    <div>
                        <label class="block font-bold mb-2 ml-1 text-black">Time Range</label>
                        <input type="text" name="time_range" value="{{ $event->time_range }}" required
                               class="block w-full h-12 rounded-lg border-2 border-purple-300 bg-white px-4 text-black focus:ring-2 focus:ring-purple-500 shadow-sm">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block font-bold mb-2 ml-1 text-black">Venue</label>
                    <input type="text" name="venue" value="{{ $event->venue }}" required
                           class="block w-full h-12 rounded-lg border-2 border-purple-300 bg-white px-4 text-black focus:ring-2 focus:ring-purple-500 shadow-sm">
                </div>

                <div class="mb-4">
                    <label class="block font-bold mb-2 ml-1 text-black">Dress Code</label>
                    <textarea name="dress_code" rows="4"
                              class="block w-full rounded-lg border-2 border-purple-300 bg-white px-4 py-3 text-black focus:ring-2 focus:ring-purple-500 shadow-sm">{{ $event->dress_code }}</textarea>
                </div>

                <div class="mb-8">
                    <label class="block font-bold mb-2 ml-1 text-black">Change Event Photo (Optional)</label>
                    <input type="file" name="image"
                           class="block w-full rounded-lg border-2 border-purple-300 bg-white px-4 py-2 text-black shadow-sm">
                    <p class="text-sm text-gray-500 mt-1 ml-1">Leave empty to keep the current photo.</p>
                </div>

                <div class="flex justify-center gap-4 mt-6">
                    <a href="{{ route('events.show', $event->id) }}" class="bg-gray-400 text-white px-8 py-2 rounded-full font-bold hover:bg-gray-500 transition shadow-sm border border-white/50">
                        Cancel
                    </a>
                    <button type="submit" class="bg-[#bf6ad4] text-white px-8 py-2 rounded-full font-bold hover:bg-purple-600 transition shadow-sm border border-white/50">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>