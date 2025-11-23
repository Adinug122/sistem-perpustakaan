@vite('resources/css/app.css')
<div class="flex justify-center items-center min-h-screen bg-gray-50">
    <div class="shadow-lg rounded-lg bg-white w-full max-w-sm p-3 ">
        <h2 class="text-2xl font-bold text-center mt-5">Edit Peminjaman</h2>

        <form action="{{ route('admin.pinjam.update', $pinjam->id) }}" method="POST" class="space-y-4 p-5 mb-5">
            @csrf
            @method('PUT')

            <div>
                <label for="user_id" class="block text-sm font-medium text-gray-700">Nama</label>
                <select name="user_id" id="user_id" class="w-full border rounded p-2" required>
                    <option value="">-- Pilih User --</option>
                    @foreach ($user as $item)
                        <option value="{{ $item->id }}" {{ $pinjam->user_id == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>

         
            <div>
                <label for="buku_id" class="block text-sm font-medium text-gray-700">Buku</label>
                <select name="buku_id" id="buku_id" class="w-full border rounded p-2" required>
                    <option value="">-- Pilih Buku --</option>
                    @foreach ($buku as $item)
                        <option value="{{ $item->id }}" {{ $pinjam->buku_id == $item->id ? 'selected' : '' }}>
                            {{ $item->judul }}
                        </option>
                    @endforeach
                </select>
            </div>

         
            <div>
                <label for="tgl_pinjam" class="block text-sm font-medium text-gray-700">Tanggal Pinjam</label>
                <input type="date" name="tgl_pinjam" id="tgl_pinjam"
                       value="{{ $pinjam->tgl_pinjam }}"
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="tgl_kembali" class="block text-sm font-medium text-gray-700">Tanggal Kembali</label>
                <input type="date" name="tgl_kembali" id="tgl_kembali"
                       value="{{ $pinjam->tgl_kembali }}"
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="w-full border rounded p-2" required>
                    <option value="">-- Pilih Status --</option>
                    <option value="pinjam" {{ $pinjam->status == 'pinjam' ? 'selected' : '' }}>pinjam</option>
                    <option value="kembali"  {{ $pinjam->status == 'kembali'  ? 'selected' : '' }}>kembali</option>
                </select>
            </div>

            <div class="text-center mt-6">
                <button type="submit"
                    class="bg-blue-600 text-white px-5 py-2 mt-3 rounded-lg hover:bg-blue-700 transition w-full">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
