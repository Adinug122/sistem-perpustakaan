    @vite('resources/css/app.css')
    <div class="flex justify-center items-center  bg-gray-50">
    <div class="shadow-lg rounded-lg bg-white w-full max-w-sm p-3 ">
        <h2 class="text-2xl font-bold text-center  mt-5">Tambah Kategori</h2>
        <form action="{{ route('admin.buku.update',$buku->id) }}" method="POST" class="space-y-4 p-5 mb-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul Buku</label>
                <input type="text" name="judul" id="judul"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan judul Buku" required value="{{ old('judul',$buku->judul) }}">
            </div>

            <div>
                <label for="penulis" class="block text-sm font-medium text-gray-700">Penulis</label>
                <input type="text" name="penulis" id="penulis"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan nama penulis"  value="{{ old('penulis',$buku->penulis) }}">
            </div>
            <div>
                <label for="penerbit" class="block text-sm font-medium text-gray-700">penerbit</label>
                <input type="text" name="penerbit" id="penerbit"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan nama penerbit"  value="{{ old('penerbit',$buku->judul) }}">
            </div>
            <div>
                <label for="isbn" class="block text-sm font-medium text-gray-700">isbn</label>
                <input type="text" name="isbn" id="isbn"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan nama isbn" value="{{ old('isbn',$buku->isbn) }}">
            </div>
            <div>
                <label for="tahun" class="block text-sm font-medium text-gray-700">Tahun</label>
                <input type="date" name="tahun" id="tahun"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan nama tahun" value="{{ old('tahun',$buku->tahun) }}">
            </div>
            <div>
                <label for="jumlah" class="block text-sm font-medium text-gray-700">jumlah</label>
                <input type="text" name="jumlah" id="jumlah"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan nama jumlah" value="{{ old('jumlah',$buku->jumlah) }}">
            </div>
            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan nama gambar">
                    @if ($buku->gambar)
                        <img src="{{ asset('storage/img/'. $buku->gambar) }}" alt="{{ $buku->judul }}" class="w-10 h-15">
                    @endif
            </div>
         <div>
    <label for="kategori_id" class="block text-sm font-medium text-gray-700">Kategori</label>
    <select name="kategori_id" id="kategori_id" class="w-full border rounded p-2" required>
        <option value="">-- Pilih Kategori --</option>
        @foreach ($kategori as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
        @endforeach
    </select>
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


