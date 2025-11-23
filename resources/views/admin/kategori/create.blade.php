    @vite('resources/css/app.css')
    <div class="flex justify-center items-center min-h-screen bg-gray-50">
    <div class="shadow-lg rounded-lg bg-white w-full max-w-sm p-3 ">
        <h2 class="text-2xl font-bold text-center  mt-5">Tambah Kategori</h2>
        <form action="{{ route('admin.kategori.store') }}" method="POST" class="space-y-4 p-5 mb-5">
            @csrf
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                <input type="text" name="nama" id="nama"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan nama kategori" required>
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan deskripsi kategori">
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


