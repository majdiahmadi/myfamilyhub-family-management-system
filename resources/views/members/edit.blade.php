<x-app-layout>
    <div class="bg-[#E0A6F1] min-h-screen flex items-center justify-center pt-32 pb-12 px-4">
        
        <div class="bg-[#F8D7F9] rounded-[2rem] p-8 md:p-10 shadow-xl w-full max-w-md border-4 border-white/30 text-center">
            
            <div class="mb-4 flex flex-col items-center">
                <img src="{{ asset('images/logo.png') }}" class="h-48 w-auto object-contain mb-2">
                
                <h3 class="text-lg font-bold mt-2 text-black">Edit Family Member</h3>
            </div>

            <form method="POST" action="{{ route('members.update', $member->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-4 text-left">
                    <label class="block font-bold mb-2 ml-1 text-black">Email</label>
                    <input type="email" name="email" value="{{ $member->email }}" required
                           class="block w-full h-12 rounded-lg border-none bg-white px-4 text-black font-bold shadow-sm focus:ring-2 focus:ring-purple-500">
                </div>

                <div class="mb-4 text-left">
                    <label class="block font-bold mb-2 ml-1 text-black">Role / Status</label>
                    <select name="role" class="block w-full h-12 rounded-lg border-none bg-white px-4 text-black font-bold shadow-sm focus:ring-2 focus:ring-purple-500">
                        <option value="0" {{ $member->role == 0 ? 'selected' : '' }}>Family Member</option>
                        <option value="1" {{ $member->role == 1 ? 'selected' : '' }}>Family Admin</option>
                    </select>
                </div>

                <div class="mb-8 text-left">
                    <label class="block font-bold mb-2 ml-1 text-black">New Password</label>
                    <input type="text" name="password" placeholder="Leave empty to keep current"
                           class="block w-full h-12 rounded-lg border-none bg-white px-4 text-black font-bold shadow-sm placeholder-gray-400 focus:ring-2 focus:ring-purple-500">
                </div>

                <div class="flex justify-center gap-4 mt-6">
                    <a href="{{ route('members.index') }}" class="bg-[#E0A6F1] text-white px-8 py-2 rounded-full font-bold hover:bg-purple-400 transition shadow-sm border border-white/50">
                        Cancel ↗
                    </a>
                    <button type="submit" class="bg-[#E0A6F1] text-white px-8 py-2 rounded-full font-bold hover:bg-purple-400 transition shadow-sm border border-white/50">
                        Save ↗
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>