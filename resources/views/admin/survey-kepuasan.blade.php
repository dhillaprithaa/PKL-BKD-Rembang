<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Survey Kepuasan Masyarakat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="surveyTable" class="display text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Usia (Rentang Tahun)</th>
                                <th>Emoji</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Muhammad Indra</td>
                                <td>Jl. Rembang Raya No 31/RT 003/RW 010</td>
                                <td>17-25</td>
                                <td>😊</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Shifa Salsabillahi</td>
                                <td>Jl. Kemerdekaan Kidul Rembang Raya No 2A</td>
                                <td>26-45</td>
                                <td>😍</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Joko Purnomo</td>
                                <td>Jl. Gunung Kidul Rembang Raya No 2A</td>
                                <td>26-45</td>
                                <td>😍</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Cantika Amanda</td>
                                <td>Jl. Gunung Kidul Rembang Raya No 2A</td>
                                <td>47-60</td>
                                <td>☹️</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#surveyTable').DataTable({
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
