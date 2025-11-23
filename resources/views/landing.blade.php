@use('App\Models\Buku')

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Athenaneum - Perpustakaan Digital Modern">
    <title>Athenaneum - Perpustakaan Digital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
       
        @keyframes blob {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .galery::-webkit-scrollbar{
            display: none;

        }
    </style>
</head>

<body class="bg-gradient-to-br from-slate-50 via-cyan-50 to-blue-50 min-h-screen font-inter">
    @include('layouts.navbar')

    <section class="max-w-screen-xl mx-auto px-6 lg:px-8 pt-40 h-screen pb-20">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-16">

            <div class="flex-1 space-y-8 max-w-2xl">
                <div class="space-y-6">
                    <div class="inline-block">
                        <span class="bg-primary text-white text-sm font-semibold px-6 py-2.5 rounded-full">
                            Perpustakaan Ternama
                        </span>
                    </div>

                    <h1 class="text-4xl lg:text-4xl font-bold text-slate-900 leading-tight">
                        Selamat Datang Di
                        <span class="text-primary block mt-2">
                            Athenaneum
                        </span>
                    </h1>

                    <p class="text-lg lg:text-sm text-slate-600 leading-relaxed">
                        Jelajahi ribuan koleksi buku digital, jurnal ilmiah, dan referensi akademik dari perpustakaan
                        modern kami.
                        Akses mudah kapan saja, dimana saja untuk mendukung perjalanan pembelajaran Anda.
                    </p>
                </div>
                <div class="flex flex-wrap gap-4">
                    <a href="#"
                        class="group bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl  transition-all duration-300 flex items-center gap-2">
                        Jelajahi Koleksi
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                   
                </div>


            </div>

            <!-- Image -->
            <div class="flex-1 relative max-w-xl w-full">
                <!-- Decorative Elements -->
                {{-- <div
                    class="absolute -top-4 -left-4 w-72 h-72 rounded-full mix-blend-multiply filter blur-xl opacity-50 animate-blob"
                    style="background-color: #41C4E3;"></div> --}}
                <div class="absolute top-7 -right-9 w-80 h-80 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000"
                    style="background-color: #6dd4ed;"></div>
                {{-- <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-4000"
                    style="background-color: #2da5c4;"></div> --}}

                <!-- Main Image -->
                <div class="relative">
                    <img src="{{ asset('img/vector.png') }}" alt="Athenaneum Library Illustration"
                        class="relative w-96 md:w-full mx-auto ">
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl mx-auto px-6 pb-20 sm:mt-10">
        <h2 class="text-3xl font-bold text-center text-slate-900 mb-12">
            Mengapa Memilih <span class="text-primary">Athenaneum?</span>
        </h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-3">
            <div
                class="bg-white shadow-lg rounded-2xl p-8 transition-all duration-300 hover:ring-1 hover:ring-primary border border-gray-100">
                <div class="flex justify-center items-center">
                    <div class="w-16 h-16 bg-blue-100 text-cyan-600 flex items-center justify-center rounded-full mb-6">
                        <svg class="w-9 h-9" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M19.8978 16H7.89778C6.96781 16 6.50282 16 6.12132 16.1022C5.08604 16.3796 4.2774 17.1883 4 18.2235"
                                    stroke="currentColor" stroke-width="1.5"></path>
                                <path d="M8 7H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                </path>
                                <path d="M8 10.5H13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                </path>
                                <path d="M10 22C7.17157 22 5.75736 22 4.87868 21.1213C4 20.2426 4 18.8284 4 16V8C4 5.17157 4 3.75736 4.87868 2.87868C5.75736 2 7.17157 2 10 2H14C16.8284 2 18.2426 2 19.1213 2.87868C20 3.75736 20 5.17157 20 8M14 22C16.8284 22 1
                    8.2426 22 19.1213 21.1213C20 20.2426 20 18.8284 20 16V12" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                            </g>
                        </svg>
                    </div>
                </div>

                <h3 class="text-xl font-semibold mb-3 text-slate-800">Buku Lengkap</h3>
                <p class="text-slate-600 ">
                    Akses buku berkualitas, dirancang oleh pengajar berpengalaman untuk mendukung semua level
                    pembelajar.
                </p>
            </div>
            <div
                class="bg-white shadow-lg rounded-2xl p-8 transition-all duration-300 hover:ring-1 hover:ring-primary border border-gray-100">
                <div class="flex justify-center items-center">
                    <div class="w-16 h-16 bg-blue-100 text-cyan-600 flex items-center justify-center rounded-full mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a4 4 0 00-3-3.87M9 12a4 4 0 11-8 0 4 4 0 018 0zm12 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </div>

                <h3 class="text-xl font-semibold mb-3 text-slate-800">Konten Terkurasi</h3>
                <p class="text-slate-600 ">
                    Koleksi kami dipilih dan dikurasi oleh para ahli untuk memastikan kualitas terbaik.
                </p>
            </div>
            <div
                class="bg-white shadow-lg rounded-2xl p-8 transition-all duration-300 hover:ring-1 hover:ring-primary border border-gray-100">
                <div class="flex justify-center items-center">
                    <div class="w-16 h-16 bg-blue-100 text-cyan-600 flex items-center justify-center rounded-full mb-6">
                        <svg class="w-10 h-10" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 502.648 502.648"
                            xml:space="preserve" fill="currentColor">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g i d="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <g>
                                            <circle style="fill:currentColor;" cx="250.399" cy="91.549" r="58.694">
                                            </circle>
                                            <path style="fill:currentColor;"
                                                d="M455.861,253.028l-54.703-11.411c-18.637-3.904-37.037,4.638-46.765,19.824 c-9.448-4.853-19.608-9.038-30.415-12.511v-32.529c0.022-24.612-20.126-44.738-44.651-44.738h-55.933 c-24.655,0-44.716,20.126-44.716,44.738v32.701c-10.699,3.408-20.751,7.593-30.264,12.468 c-9.728-15.251-28.15-23.857-46.809-19.953l-54.747,11.411c-24.03,5.026-39.626,28.862-34.6,52.978l13.741,65.64 c4.983,24.051,28.84,39.647,52.892,34.621l17.321-3.624c8.671,12.813,20.665,24.569,36.023,34.621 c31.989,20.967,74.247,32.529,119.092,32.529c68.617,0,127.721-27.589,154.943-67.215l17.602,3.689 c24.03,5.004,47.887-10.57,52.87-34.621l13.762-65.64C495.508,281.89,479.912,258.054,455.861,253.028z M251.305,447.381 c-40.51,0-78.475-10.203-106.797-28.862c-9.707-6.342-17.753-13.395-24.202-20.945l13.266-2.783 c24.073-5.004,39.669-28.84,34.643-52.913l-12.317-59.018c7.183-3.861,14.733-7.248,22.757-10.138v10.764 c0,24.569,20.104,44.695,44.716,44.695h55.933c24.548,0,44.652-20.147,44.652-44.695v-11.325 c8.175,2.912,15.854,6.256,22.973,10.052L334.439,341.9c-4.983,24.073,10.591,47.909,34.664,52.913l13.395,2.804 C357.52,427.191,308.101,447.381,251.305,447.381z">
                                            </path>
                                            <circle style="fill:currentColor;" cx="443.954" cy="168.708" r="58.694">
                                            </circle>
                                            <path style="fill:currentColor;"
                                                d="M70.736,226.172c31.752-6.644,52.029-37.77,45.471-69.501 c-6.687-31.709-37.749-52.072-69.523-45.428c-31.709,6.622-52.072,37.727-45.428,69.458 C7.879,212.453,38.984,232.795,70.736,226.172z">
                                            </path>
                                        </g>
                                    </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>

                <h3 class="text-xl font-semibold mb-3 text-slate-800">Komunikasi Aktif</h3>
                <p class="text-slate-600 ">
                    Terhubung dengan ribuan pelajar lain untuk berbagi ilmu, berdiskusi, dan tumbuh bersama setiap hari.
                </p>
            </div>
        </div>
    </section>

    {{-- tentang kami --}}
   <section id="tentang-kami" class="max-w-screen-xl mx-auto px-6 lg:px-8 py-24 ">
     <h2 class="text-3xl font-bold text-center text-slate-900 mb-12">
            Tentang <span class="text-primary">Kami</span>
        </h2>
    <div class="flex flex-col lg:flex-row items-center gap-12">
         <div class="lg:w-1/2 w-full flex justify-center">
        <img src="{{ asset('img/perpus.jpg') }}" 
             alt="Perpustakaan Digital" 
             class="w-[550px] rounded-3xl shadow-2xl ">
    </div>


    <div class="lg:w-1/2 w-full space-y-6">
        <h2 class="text-4xl font-bold text-slate-900 leading-snug">
            Kami adalah <span class="text-primary">Penyedia Buku</span> Paling Lengkap
        </h2>

        <p class="text-slate-600 text-justify  leading-normal">
            Athenaneum hadir sebagai platform perpustakaan digital modern yang menyediakan ribuan koleksi buku dari berbagai kategori mulai dari fiksi, pendidikan, hingga teknologi terkini. 
            Kami berkomitmen untuk memberikan pengalaman membaca yang mudah, cepat, dan menyenangkan bagi semua kalangan.
        </p>

    
        <div class="pt-6">
            <a href="#" 
               class="bg-gradient-to-r from-primary to-cyan-500 text-white px-8 py-4 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 inline-block">
               Jelajahi Koleksi Kami
            </a>
        </div>
    </div>
</section>  
    </div>
 
    <section class="relative max-w-screen-xl mx-auto py-16">
    <h2 class="text-3xl font-bold text-center text-slate-900 mb-12">
        Buku <span class="text-primary">Terbaru</span>
    </h2>
      <button id="left"
        class="absolute left-0 top-1/2 -translate-y-12 bg-cyan-200 hover:bg-cyan-100 shadow-lg rounded-full p-2 transition">
        <img src="{{ asset('img/left.svg') }}" alt="Kiri" class="w-6 h-6">
    </button>
    <div class="galery w-full max-w-2xl flex  mx-auto gap-8 overflow-x-scroll ">
        @foreach ($buku as $item)
            @if ($item->gambar)
                <div class="bg-white flex-none shadow-md rounded-xl p-5 transition-transform hover:scale-105 duration-300">
                    <div class="relative group">
                        <img src="{{ asset('storage/img/' . $item->gambar) }}" 
                             alt="{{ $item->judul }}" 
                             class="w-[160px] h-[220px] object-cover rounded-md">
                
                        <div class="absolute inset-0 bg-blue-700 opacity-0 group-hover:opacity-50 transition-opacity duration-300 rounded-md"></div>
                    </div>
                    <p class="text-sm text-primary pt-2">{{ $item->penulis }}</p>
                    <p class="text-[12px] text-slate-600">{{ $item->tahun }}</p>
                    <h2 class="text-slate-600 text-lg font-semibold">
                        {{ $item->judul }}
                    </h2>
                </div>
            @endif  
        @endforeach
    </div>
    <button id="right" class="absolute right-0 top-1/2 -translate-y-12 bg-cyan-200 hover:bg-cyan-100 shadow-lg rounded-full p-2 transition">
         <img src="{{ asset('img/left.svg') }}" alt="" class="w-6 h-6 font-bold rotate-180">
    </button>
   

    <!-- Tombol Selengkapnya -->
    <div class="text-center mt-10">
        <a href="{{ route('buku') }}" 
           class="bg-primary text-white px-6 py-2 text-sm rounded-full font-semibold hover:bg-cyan-300 transition-colors duration-300">
           Lihat Selengkapnya
        </a>
    </div>
</section>


    <section class="max-w-screen-lg mx-auto">
             <h2 class="text-3xl font-bold text-center text-slate-900 mb-12">
            Pengumuman <span class="text-primary">Terbaru</span>
        </h2>
       <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 p-6">
    @foreach ($pengumuman as $item)
        <div class="bg-white  shadow-lg rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col">
            <div class="w-full h-60 bg-gray-100 flex items-center justify-center overflow-hidden">
                <img src="{{ asset('storage/img/'.$item->gambar) }}" 
                     alt="{{ $item->judul }}" 
                     class="w-full h-full object-contain">
            </div>

            <div class="px-5 py-4 flex flex-col justify-between">
                <h2 class="text-gray-800 text-lg font-semibold line-clamp-2">
                    {{ $item->judul }}
                </h2>
                <a href="{{ route('pengumuman.show',$item->id) }}" class="text-sm text-primary font-medium mt-2 hover:underline cursor-pointer">
                    Lihat Selengkapnya
            </a>
            </div>
        </div>
    @endforeach
    
</div>
  <div class="text-center mt-10">
        <a href="{{ route('pengumuman') }}" 
           class="bg-primary text-white px-6 py-2 text-sm rounded-full font-semibold hover:bg-cyan-300 transition-colors duration-300">
           Lihat Selengkapnya
        </a>    
    </div>

    </section>

    <section class="bg-gradient-to-r from-primary to-cyan-500 h-96 flex flex-col items-center justify-center mt-10">
        <h2 class="text-4xl font-bold text-white text-center leading-snug"> Tingkatkan Ilmu, Wujudkan Impianmu </h2> 
        <p class="text-white/80 text-center mt-4 text-lg"> Bersama Athenaneum, jadikan setiap halaman sebagai langkah menuju masa depanmu. </p>
        <button class="bg-white px-4 py-3 rounded-full text-primary mt-5 font-semibold font-inter hover:translate-y-[3px] hover:shadow-md transform transition-all ">Jelajahi Sekarang</button>
    </section>

  <section class="max-w-3xl mx-auto py-20 px-6">
  <h2 class="text-4xl font-bold text-center text-slate-900 mb-10">
    Pertanyaan yang Sering Diajukan
  </h2>


  <div class="border border-gray-200 rounded-lg overflow-hidden mb-4">
    <button onclick="toggleFAQ(this)" 
      class="w-full flex justify-between items-center p-4 text-left font-semibold text-slate-900 hover:bg-gray-50 transition-all">
      Apa itu Athenaneum?
      <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" 
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M19 9l-7 7-7-7" />
      </svg>
    </button>
    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out text-slate-600 bg-gray-50 px-4">
      <p class="py-4">
        Athenaneum adalah aplikasi perpustakaan digital yang memudahkan Anda untuk mencari, membaca, dan meminjam buku secara online.
      </p>
    </div>
  </div>

 
  <div class="border border-gray-200 rounded-lg overflow-hidden mb-4">
    <button onclick="toggleFAQ(this)" 
      class="w-full flex justify-between items-center p-4 text-left font-semibold text-slate-900 hover:bg-gray-50 transition-all">
      Bagaimana cara mendaftar sebagai anggota?
      <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" 
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M19 9l-7 7-7-7" />
      </svg>
    </button>
    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out text-slate-600 bg-gray-50 px-4">
      <p class="py-4">
        Anda dapat mendaftar dengan mengklik tombol "Daftar" di pojok kanan atas dan mengisi formulir pendaftaran.
      </p>
    </div>
  </div>

 
  <div class="border border-gray-200 rounded-lg overflow-hidden mb-4">
    <button onclick="toggleFAQ(this)" 
      class="w-full flex justify-between items-center p-4 text-left font-semibold text-slate-900 hover:bg-gray-50 transition-all">
      Berapa lama masa peminjaman buku digital?
      <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" 
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M19 9l-7 7-7-7" />
      </svg>
    </button>
    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out text-slate-600 bg-gray-50 px-4">
      <p class="py-4">
        Masa peminjaman buku digital biasanya 7-14 hari, tergantung kebijakan perpustakaan. Setelah masa tersebut habis, buku akan otomatis dikembalikan.
      </p>
    </div>
  </div>

  <div class="border border-gray-200 rounded-lg overflow-hidden mb-4">
    <button onclick="toggleFAQ(this)" 
      class="w-full flex justify-between items-center p-4 text-left font-semibold text-slate-900 hover:bg-gray-50 transition-all">
      Apakah saya bisa memperpanjang masa pinjam buku?
      <svg class="w-5 h-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" 
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M19 9l-7 7-7-7" />
      </svg>
    </button>
    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out text-slate-600 bg-gray-50 px-4">
      <p class="py-4">
        Ya, Anda dapat memperpanjang masa pinjam selama buku tersebut tidak sedang dipesan oleh pengguna lain.
      </p>
    </div>
  </div>
</section>


@include('layouts.footer')

<script>
  function toggleFAQ(button) {
    const answer = button.nextElementSibling;
    const icon = button.querySelector('svg');

    if (answer.style.maxHeight) {
      answer.style.maxHeight = null;
      icon.classList.remove('rotate-180');
    } 
    else {
      document.querySelectorAll('.faq-answer').forEach(el => {
        el.style.maxHeight = null;
        el.previousElementSibling.querySelector('svg').classList.remove('rotate-180');
      });
      answer.style.maxHeight = answer.scrollHeight + 'px';
      icon.classList.add('rotate-180');
    }
  }

  const left = document.getElementById('left')
  const right = document.getElementById('right');
  const galery = document.querySelector('.galery');

  
  galery.addEventListener('wheel',(e) => {
    e.preventDefault();
    galery.scrollLeft += e.deltaY;
  })

  right.addEventListener('click',()=>{
    galery.style.scrollBehavior = "smooth";
    galery.scrollLeft += 900
  })
  left.addEventListener('click',()=>{
    galery.style.scrollBehavior = "smooth";
   galery.scrollLeft = 0; 
  })


</script>


</body>

</html>