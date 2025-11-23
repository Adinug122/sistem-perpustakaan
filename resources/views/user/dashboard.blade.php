@vite('resources/css/app.css')
@include('layouts.navbar')


<section class="max-w-screen-xl mx-auto py-10 pt-40">

    <h2 class="text-2xl font-bold mb-4 text-slate-700">
        Pinjaman Aktif
    </h2>

    @forelse ($pinjaman as $pinjam)
          <div class="p-4 bg-white rounded-lg shadow mb-3">
            <p><strong>Buku:</strong> {{ $pinjam->buku->judul }}</p>
            <p><strong>Tanggal Pinjam:</strong> {{ $pinjam->tgl_pinjam }}</p>
            <p><strong>Harus Kembali:</strong> {{ $pinjam->tgl_kembali }}</p>
            <span class="text-blue-600 font-semibold">Status: Masih Dipinjam</span>
        </div>

         @empty
            <p class="text-slate-500">Tidak ada pinjaman aktif.</p>
    @endforelse


    <h2 class="text-2xl font-bold mt-10 mb-4 text-slate-700">
        Riwayat Pengembalian
    </h2>

    @forelse ($riwayat as $item)
        <div class="p-4 bg-white rounded-lg shadow mb-3">
            <p><strong>Buku:</strong> {{ $item->buku->judul }}</p>
            <p><strong>Tanggal Pinjam:</strong> {{ $item->tgl_pinjam }}</p>
            <p><strong>Dikembalikan:</strong> {{ $item->pengembalian->tgl_kembali ?? '-' }}</p>
            <p><strong>Denda:</strong> Rp {{ $item->pengembalian->denda ?? '-' }}</p>

            <span class="text-green-600 font-semibold">Status: Dikembalikan</span>
        </div>
    @empty
        <p class="text-slate-500">Belum ada riwayat pengembalian.</p>
    @endforelse

</section>
