<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengaduan Masyarakat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="pengaduanTable" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ticketing</th>
                                <th>Hari/Tanggal</th>
                                <th>No HP</th>
                                <th>Nama Pelapor</th>
                                <th>Judul Pengaduan</th>
                                <th>Deskripsi Pengaduan</th>
                                <th>Proses</th>
                                <th>Tanggapan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#LPR0001</td>
                                <td>2025-01-13</td>
                                <td>08123456789</td>
                                <td>John Doe</td>
                                <td>Pemberkasan P3K</td>
                                <td>Tidak bisa upload foto padahal sudah di kompres sizenya</td>
                                <td>Dalam Proses</td>
                                <td>Menunggu verifikasi</td>
                                <td><a href="#">Lihat Detail</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>#LPR0002</td>
                                <td>2025-01-14</td>
                                <td>08234567890</td>
                                <td>Jane Doe</td>
                                <td>Dokumen Kelengkapan CPNS</td>
                                <td>Apakah tidak bisa diperpanjang?</td>
                                <td>Proses Selesai</td>
                                <td>Telah ditangani</td>
                                <td><a href="#">Lihat Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#pengaduanTable').DataTable({
                // "processing": true,
                // "serverSide": true,
                // "ajax": "",
                // "columns": [{
                //         "data": "no"
                //     },
                //     {
                //         "data": "ticketing"
                //     },
                //     {
                //         "data": "tanggal"
                //     },
                //     {
                //         "data": "no_hp"
                //     },
                //     {
                //         "data": "nama_pelapor"
                //     },
                //     {
                //         "data": "judul_pengaduan"
                //     },
                //     {
                //         "data": "deskripsi_pengaduan"
                //     },
                //     {
                //         "data": "proses"
                //     },
                //     {
                //         "data": "tanggapan"
                //     },
                //     {
                //         "data": "aksi"
                //     }
                // ]
            });
        });
    </script>
</x-app-layout>
