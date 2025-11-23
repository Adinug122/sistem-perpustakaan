    @vite('resources/css/app.css')
    <div class="flex justify-center items-center min-h-screen bg-gray-50">
    <div class="shadow-lg rounded-lg bg-white w-full max-w-sm p-3 ">
        <h2 class="text-2xl font-bold text-center  mt-5">Tambah Kategori</h2>
        <form action="{{ route('admin.pengumuman.update',$pengumuman->id) }}" method="POST" class="space-y-4 p-5 mb-5"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan nama judul" value="{{ old('judul',$pengumuman->judul) }}" required>
            </div>

            <div>
                <label for="isi" class="block text-sm font-medium"> Isi</label>
                <textarea name="isi" id="isi" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 
                focus:outline-none focus:ring-2 focus:ring-blue-500"  required >{{ old('isi', $pengumuman->isi) }}</textarea>
            </div>
            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    @if ($pengumuman->gambar)
                        <img src="{{ asset('storage/img/'.$pengumuman->gambar) }}" alt="">
                    @endif
            </div>

            <div class="text-center mt-6">
                <button type="submit"
                    class="bg-blue-600 text-white px-5 py-2 mt-3 rounded-lg hover:bg-blue-700 transition w-full">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>


