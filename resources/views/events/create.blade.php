<x-app-layout>
    <div class="bg-[#E0A6F1] min-h-screen flex items-center justify-center pt-32 pb-12 px-4">
        
        <div class="bg-[#F8D7F9] rounded-[2rem] p-8 md:p-10 shadow-xl w-full max-w-2xl border-4 border-white/30">
            
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-black">Add New Event</h2>
                <p class="text-gray-700 mt-2">Create a new gathering for the Tawakkal family</p>
            </div>

            <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label class="block font-bold mb-2 ml-1 text-black">Event Name</label>
                    <input type="text" name="title" required placeholder="e.g. Himpunan Kasih Keluarga Tawakkal V2"
                           class="block w-full h-12 rounded-lg border-2 border-purple-300 bg-white px-4 text-black focus:ring-2 focus:ring-purple-500 shadow-sm">
                </div>

                <div class="mb-4">
                    <label class="block font-bold mb-2 ml-1 text-black">Description</label>
                    <textarea name="description" rows="4" required placeholder="Write a short description..."
                              class="block w-full rounded-lg border-2 border-purple-300 bg-white px-4 py-3 text-black focus:ring-2 focus:ring-purple-500 shadow-sm"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block font-bold mb-2 ml-1 text-black">Date</label>
                        <input type="date" name="date" required
                               class="block w-full h-12 rounded-lg border-2 border-purple-300 bg-white px-4 text-black focus:ring-2 focus:ring-purple-500 shadow-sm">
                    </div>
                    <div>
                        <label class="block font-bold mb-2 ml-1 text-black">Time Range</label>
                        <input type="text" name="time_range" placeholder="e.g. 9:30 AM – 3:00 PM" required
                               class="block w-full h-12 rounded-lg border-2 border-purple-300 bg-white px-4 text-black focus:ring-2 focus:ring-purple-500 shadow-sm">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block font-bold mb-2 ml-1 text-black">Venue</label>
                    <input type="text" name="venue" required placeholder="e.g. Timorra Venue, Kuantan"
                           class="block w-full h-12 rounded-lg border-2 border-purple-300 bg-white px-4 text-black focus:ring-2 focus:ring-purple-500 shadow-sm">
                </div>

                <div class="mb-4">
                    <label class="block font-bold mb-2 ml-1 text-black">Dress Code</label>
                    <textarea name="dress_code" rows="4" placeholder="e.g. Family Branch Colors..."
                              class="block w-full rounded-lg border-2 border-purple-300 bg-white px-4 py-3 text-black focus:ring-2 focus:ring-purple-500 shadow-sm"></textarea>
                </div>

                <div class="mb-8">
                    <label class="block font-bold mb-2 ml-1 text-black">Event Photo</label>
                    <input type="file" name="image" required
                           class="block w-full rounded-lg border-2 border-purple-300 bg-white px-4 py-2 text-black shadow-sm">
                </div>

                <div class="flex justify-center gap-4 mt-6">
                    <a href="{{ route('dashboard') }}" class="bg-gray-400 text-white px-8 py-2 rounded-full font-bold hover:bg-gray-500 transition shadow-sm border border-white/50">
                        Cancel
                    </a>
                    <button type="submit" class="bg-[#bf6ad4] text-white px-8 py-2 rounded-full font-bold hover:bg-purple-600 transition shadow-sm border border-white/50">
                        Save Event
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>