<x-app-layout>

        <x-slot name="header">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <button id="menuToggle" class="lg:hidden mr-4 text-gray-600 hover:text-blue-600 focus:outline-none transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        <h1 class="text-2xl font-bold text-gray-800">
                             Dashboard 
                        </h1>
                        
                    </div>
                    <div class="flex items-center space-x-3">
                        
                        <a href="{{ route('profile.edit') }}" class="px-4 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors duration-200">
                            Profile
                    </a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors duration-200 shadow-lg shadow-blue-500/30">
                            Logout
                        </button>
                        </form>
                    </div>
                </div>
         
            </x-slot>
   <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
    
        <!-- Main Content -->
        <div class="flex-1 flex flex-col lg:ml-64 overflow-hidden">
            <!-- Header -->

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto bg-gray-50 p-6">
                <!-- Dashboard Overview -->
                <div id="dashboard" class="mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6 ">Overview</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl shadow-xl p-6 text-white transform hover:scale-105 transition-transform duration-200">
                            <div class="flex items-center justify-between mb-4">
                                <div class="p-3 bg-white/20 rounded-xl backdrop-blur-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                </div>
                                <span class="text-sm font-medium bg-white/20 px-3 py-1 rounded-full">Members</span>
                            </div>
                            <h5 class="text-4xl font-bold mb-2">{{ $members }}</h5>
                            <p class="text-blue-100">Active Members</p>
                        </div>

                        <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl shadow-xl p-6 text-white transform hover:scale-105 transition-transform duration-200">
                            <div class="flex items-center justify-between mb-4">
                                <div class="p-3 bg-white/20 rounded-xl backdrop-blur-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                </div>
                                <span class="text-sm font-medium bg-white/20 px-3 py-1 rounded-full">Books</span>
                            </div>
                            <h5 class="text-4xl font-bold mb-2">{{ $books }}</h5>
                            <p class="text-emerald-100">Available Books</p>
                        </div>

                        <div class="bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl shadow-xl p-6 text-white transform hover:scale-105 transition-transform duration-200">
                            <div class="flex items-center justify-between mb-4">
                                <div class="p-3 bg-white/20 rounded-xl backdrop-blur-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                </div>
                                <span class="text-sm font-medium bg-white/20 px-3 py-1 rounded-full">Loans</span>
                            </div>
                            <h5 class="text-4xl font-bold mb-2">{{ $loans }}</h5>
                            <p class="text-amber-100">Books on Loan</p>
                        </div>

                        <div class="bg-gradient-to-br from-red-500 to-red-600 rounded-2xl shadow-xl p-6 text-white transform hover:scale-105 transition-transform duration-200">
                            <div class="flex items-center justify-between mb-4">
                                <div class="p-3 bg-white/20 rounded-xl backdrop-blur-sm">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <span class="text-sm font-medium bg-white/20 px-3 py-1 rounded-full">Returns</span>
                            </div>
                            <h5 class="text-4xl font-bold mb-2">{{ $overdue }}</h5>
                            <p class="text-red-100">Overdue Books</p>
                        </div>
                    </div>
                </div>

                <!-- Manage Members -->
                <!-- Manage Books -->
                
                <!-- Manage Loans -->
               

                <!-- Manage Returns -->
               
                <!-- Manage Categories -->
              
                <!-- Manage Staff -->
               
            </main>
        </div>
    </div>

</x-app-layout>
