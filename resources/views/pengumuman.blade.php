<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-50 min-h-screen font-inter">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Section Judul --}}
    <section class="max-w-screen-xl mx-auto pt-40 px-4 text-center">
        <h2 class="text-3xl font-semibold text-slate-700 mb-8">Semua Pengumuman</h2>


   
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse ($pengumuman as $item)
                <div class="bg-white shadow-md rounded-xl overflow-hidden transition-transform hover:scale-105 duration-300 flex flex-col">
                    <img src="{{ asset('storage/img/'.$item->gambar) }}" 
                         alt="{{ $item->judul }}" 
                         class="w-full h-60 object-cover">
                    <div class="p-4 flex-1 flex flex-col">
                        <h3 class="text-lg font-semibold text-slate-700">{{ $item->judul }}</h3>
                        <p class="text-sm text-slate-500 mt-1">
                            {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
                        </p>
                        <p class="text-sm text-slate-600 mt-2 line-clamp-3">
                            {{ Str::limit($item->isi, 10) }}
                        </p>
                        <a href="{{ route('pengumuman.show',$item->id) }}" 
                           class="text-primary text-sm font-medium mt-3 inline-block hover:underline mt-auto">
                            Lihat Selengkapnya
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-slate-500 text-center col-span-full">Belum ada pengumuman yang tersedia.</p>
            @endforelse
        </div>
    </section>

    
@include('layouts.footer')
</body>
