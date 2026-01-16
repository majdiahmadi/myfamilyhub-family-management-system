<x-app-layout>
    <div class="bg-gray-50 min-h-screen pt-28 pb-12">
        <div class="max-w-5xl mx-auto px-6">
            
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">Family Database</h2>
                    <p class="text-gray-500">Manage all registered family members.</p>
                </div>
                <a href="{{ route('members.create') }}" class="bg-[#E0A6F1] hover:bg-purple-300 text-white font-bold py-3 px-8 rounded-full shadow-md transition flex items-center gap-2">
                    <span>+ Add Member</span>
                </a>
            </div>

            <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
                
                <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                    <form method="GET" action="{{ route('members.index') }}" class="relative max-w-lg">
                        <input type="text" name="search" placeholder="Search email..." 
                               class="w-full rounded-full border-gray-200 pl-12 pr-4 py-3 focus:border-[#E0A6F1] focus:ring focus:ring-purple-100 transition"
                               value="{{ request('search') }}">
                        <span class="absolute left-4 top-3.5 text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </span>
                    </form>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-white text-gray-500 text-sm uppercase tracking-wider">
                            <tr>
                                <th class="p-6 font-semibold border-b">No.</th>
                                <th class="p-6 font-semibold border-b">Email</th>
                                <th class="p-6 font-semibold border-b">Password</th>
                                <th class="p-6 font-semibold border-b text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($members as $index => $member)
                            <tr class="hover:bg-purple-50 transition duration-150">
                                <td class="p-6 text-gray-400 font-mono">{{ $index + 1 }}</td>
                                <td class="p-6 font-bold text-gray-800 text-lg">{{ $member->email }}</td>
                                <td class="p-6 text-gray-400 tracking-widest">••••••</td>
                                <td class="p-6 text-right">
                                    <a href="{{ route('members.edit', $member->id) }}" class="text-[#b968cc] hover:text-purple-700 font-bold text-sm bg-[#F8D7F9] hover:bg-[#E0A6F1] hover:text-white px-5 py-2 rounded-full transition">
                                        Edit Details
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="p-6 bg-gray-50/50">
                    {{ $members->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>