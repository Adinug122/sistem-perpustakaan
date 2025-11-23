<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-50 min-h-screen font-inter">
    @include('layouts.navbar')

    <section class="max-w-7xl mx-auto px-4 py-20 lg:py-24">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
           
            <aside class="bg-white rounded-xl shadow-md p-6 h-fit order-first lg:order-last">
                <h3 class="text-lg font-semibold text-slate-700 mb-4 border-b pb-2">
                    Berita Lainnya
                </h3>

                <div class="space-y-4">
                    @foreach ($pengumumanLain as $lain)
                        <a href="{{ route('pengumuman.show', $lain->id) }}" 
                           class="flex items-start gap-3 group hover:bg-slate-50 p-2 rounded-lg transition">
                            
                            @if ($lain->gambar)
                                <img src="{{ asset('storage/img/' . $lain->gambar) }}" 
                                     alt="{{ $lain->judul }}" 
                                     class="w-16 h-16 object-cover rounded-md shadow-sm">
                            @endif

                            <div>
                                <h4 class="font-medium text-slate-700 text-sm group-hover:text-blue-600 transition">
                                    {{ Str::limit($lain->judul, 60) }}
                                </h4>
                                <p class="text-xs text-slate-500 mt-1">
                                    {{ \Carbon\Carbon::parse($lain->created_at)->translatedFormat('d M Y') }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </aside>

         
            <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-6">
                
                @if ($pengumuman->gambar)
                    <img src="{{ asset('storage/img/' . $pengumuman->gambar) }}" 
                         alt="{{ $pengumuman->judul }}" 
                         class="w-full rounded-lg mb-6 shadow-sm h-auto lg:h-96 object-cover">
                @endif

                <h1 class="text-2xl lg:text-3xl font-bold text-slate-800 mb-3 leading-snug">
                    {{ $pengumuman->judul }}
                </h1>

                <div class="flex flex-wrap gap-4 text-sm text-slate-500 mb-6">
                    <p>📅 {{ \Carbon\Carbon::parse($pengumuman->created_at)->translatedFormat('d F Y') }}</p>
                </div>

                <div class="text-slate-700 leading-relaxed space-y-4 text-sm lg:text-base">
                    {!! nl2br(e($pengumuman->isi)) !!}
                </div>
            </div>

        </div>

        <div class="mt-10 text-center">
            <a href="{{ route('pengumuman') }}" 
               class="bg-blue-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-blue-700 transition">
               ← Kembali ke Daftar Pengumuman
            </a>
        </div>
    </section>
</body>
