  <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-gradient-to-b from-blue-900 to-blue-950 text-white transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out shadow-2xl">
            <div class="flex flex-col h-full">
                <div class="flex items-center justify-center h-20 border-b border-blue-800/50 bg-blue-950/50">
                    <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-300 to-blue-100 bg-clip-text text-transparent">Library System</h1>
                </div>
                <nav class="flex-1 overflow-y-auto py-6 px-3">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="nav-link active flex items-center px-4 py-3 rounded-lg transition-all duration-200 bg-blue-800/50 text-white shadow-lg">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                <span class="font-medium">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.member.index') }}#members" class="nav-link flex items-center px-4 py-3 rounded-lg transition-all duration-200 hover:bg-blue-800/30 text-blue-100">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                <span class="font-medium">Members</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.buku.index') }}#books" class="nav-link flex items-center px-4 py-3 rounded-lg transition-all duration-200 hover:bg-blue-800/30 text-blue-100">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <span class="font-medium">Buku</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pinjam.index') }}#loans" class="nav-link flex items-center px-4 py-3 rounded-lg transition-all duration-200 hover:bg-blue-800/30 text-blue-100">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                <span class="font-medium">Peminjaman</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pengumuman.index') }}" class="nav-link flex items-center px-4 py-3 rounded-lg transition-all duration-200 hover:bg-blue-800/30 text-blue-100">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                <span class="font-medium">Pengumuman</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pengembalian.index') }}#returns" class="nav-link flex items-center px-4 py-3 rounded-lg transition-all duration-200 hover:bg-blue-800/30 text-blue-100">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="font-medium"> Pengembalian</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.kategori.index') }}#categories" class="nav-link flex items-center px-4 py-3 rounded-lg transition-all duration-200 hover:bg-blue-800/30 text-blue-100">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                                <span class="font-medium">Kategori</span>
                            </a>
                        </li>
                    
                </nav>
            </div>
        </aside>
