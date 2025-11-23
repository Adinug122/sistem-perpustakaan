<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
@vite('resources/css/app.css')
<body class="bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-50 min-h-screen font-inter">
   @include('layouts.navbar') 
   <section class="max-w-screen-xl mx-auto pt-32 px-4">
  <h2 class="text-3xl font-bold text-center text-slate-900 mb-12">
            Daftar <span class="text-primary">Buku</span>
        </h2>
        <div class="flex items-center justify-center">
             <form action="{{ route('buku') }}" method="GET" class="mb-6">
    <select name="kategori" onchange="this.form.submit()" class="border border-gray-300 rounded-lg px-3 py-2 text-slate-600 w-60 ">
        <option value="" class="text-center">Semua Kategori</option>
        @foreach ($kategori as $kat)
            <option value="{{ $kat->id }}" {{ request('kategori') == $kat->id ? 'selected' : '' }} class="text-center">
                {{ $kat->nama }}
            </option>
        @endforeach
    </select>
</form>
        </div>
   


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 justify-center">
        @foreach ($buku as $item)
            <div class="bg-white shadow-md rounded-xl overflow-hidden transition-transform hover:scale-105 duration-300 flex flex-col mx-auto" style="width:250px" >
    <img src="{{ asset('storage/img/'.$item->gambar) }}" 
         alt="{{ $item->judul }}" 
         class="w-full h-80 object-center ">
    <div class="p-4 flex-1 flex flex-col">
        <h3 class="text-lg font-semibold text-slate-700">{{ $item->judul }}</h3>
        <p class="text-sm text-slate-500 mt-1">Penulis: {{ $item->penulis }}</p>
        <p class="text-sm text-slate-500 mt-1">Tahun: {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</p>

    </div>
</div>

        @endforeach
    </div>
</section>
</body>


@include('layouts.footer')
