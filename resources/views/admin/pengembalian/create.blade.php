@vite('resources/css/app.css')

<div class="flex justify-center items-center min-h-screen bg-gray-50">
    <div class="shadow-lg rounded-lg bg-white w-full max-w-sm p-3">
        <h2 class="text-2xl font-bold text-center mt-5">Tambah Pengembalian</h2>

        <form action="{{ route('admin.pengembalian.store') }}" method="POST" class="space-y-4 p-5 mb-5">
            @csrf

       
            <div>
                <label for="pinjam_id" class="block text-sm font-medium text-gray-700">Peminjaman</label>
                <select name="pinjam_id" id="pinjam_id" class="w-full border rounded p-2" required>
                    <option value="">-- Pilih Peminjaman --</option>
                    @foreach ($pinjam as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->user->name }} - {{ $item->buku->judul }} ({{ $item->tgl_pinjam }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="tgl_kembali" class="block text-sm font-medium text-gray-700">Tanggal Kembali</label>
                <input type="date" name="tgl_kembali" id="tgl_kembali"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

         
            <div>
                <label for="denda" class="block text-sm font-medium text-gray-700">Denda</label>
                <input type="number" name="denda" id="denda"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan denda (opsional)" min="0">
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
