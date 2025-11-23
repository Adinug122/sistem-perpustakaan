

                <x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between px-6 py-4">
            <div class="flex items-center">
                <button id="menuToggle"
                    class="lg:hidden mr-4 text-gray-600 hover:text-blue-600 focus:outline-none transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <h1 class="text-2xl font-bold text-gray-800">
                    Dashboard
                </h1>
            </div>
            <div class="flex items-center space-x-3">
                <button
                    class="px-4 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors duration-200">
                    Profile
                </button>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors duration-200 shadow-lg shadow-blue-500/30">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </x-slot>

    <div id="categories" class="flex-1 flex flex-col lg:ml-64 overflow-hidden px-10 mt-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Manage Members</h2>
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gradient-to-r from-blue-600 to-blue-700">
                                    <tr>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">#</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">Email</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">Phone</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">Address</th>
                                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    
                                   @foreach ($user as $index => $item)
                                   @if ($item->role != 'admin')
                                         <tr>
                                <td class="px-6 py-4">{{ $index + 0 }}</td>
                                <td class="px-6 py-4">{{ $item->name }}</td>
                                <td class="px-6 py-4">{{ $item->email }}</td>
                                <td class="px-6 py-4">{{ $item->telepon }}</td>
                                <td class="px-6 py-4">{{ $item->alamat }}</td>
                               <td class="px-6 py-4">
                                  <div class="flex justify-center items-center gap-2">
                                        <a href=""
                                           class="bg-blue-600 px-4 py-2 text-white rounded-lg hover:bg-blue-700 transition">
                                           Edit
                                        </a>
                                        <form action="" method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="bg-red-600 px-4 py-2 text-white rounded-lg hover:bg-red-700 transition">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                               </td>     
                              
                            </tr>
                                   @endif
                          
                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
      
    </div>
</x-app-layout>
