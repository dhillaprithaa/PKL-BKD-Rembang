<?php

namespace App\Http\Controllers;

use App\Models\DataUtama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasyarakatPageController extends Controller
{
    function statistik()
    {

        $dataAsnByGender = DataUtama::select(
            DB::raw("CASE
                        WHEN jenisKelamin = 'M' THEN 'Laki-Laki'
                        WHEN jenisKelamin = 'F' THEN 'Perempuan'
                        ELSE 'Tidak Diketahui'
                     END as jenisKelamin"),
            DB::raw('count(*) as total')
        )
            ->whereIn('jenisKelamin', ['M', 'F'])
            ->groupBy('jenisKelamin')
            ->get();

        $chartDataGender = [
            'labels' => $dataAsnByGender->pluck('jenisKelamin'),
            'data' => $dataAsnByGender->pluck('total'),
        ];

        ###status & GENDER
        $dataAsnByStatusGender = DataUtama::select(
            DB::raw("CASE
                        WHEN kedudukanPnsId IN (1, 3, 4, 15, 17, 18) THEN 'PNS'
                        WHEN kedudukanPnsId = 71 THEN 'PPPK'
                        ELSE 'Tidak Diketahui'
                     END as statusPegawai"),
            DB::raw("CASE
                        WHEN jenisKelamin = 'M' THEN 'Laki-Laki'
                        WHEN jenisKelamin = 'F' THEN 'Perempuan'
                        ELSE 'Tidak Diketahui'
                     END as jenisKelamin"),
            DB::raw('count(*) as total')
        )
            ->whereIn('kedudukanPnsId', [1, 3, 4, 15, 17, 18, 71]) // Menyaring berdasarkan kedudukanPnsId untuk PNS dan PPPK
            ->groupBy(DB::raw("CASE
                                WHEN kedudukanPnsId IN (1, 3, 4, 15, 17, 18) THEN 'PNS'
                                WHEN kedudukanPnsId = 71 THEN 'PPPK'
                                ELSE 'Tidak Diketahui'
                           END"))
            ->groupBy('jenisKelamin')
            ->get();



        // dd($dataAsnByStatusGender);

        $chartDataStatusGender = [
            'labels' => $dataAsnByStatusGender->groupBy('statusPegawai')->keys(),
            'data' => $dataAsnByStatusGender->groupBy('statusPegawai')->map(function ($group) {
                return [
                    'Laki-Laki' => $group->where('jenisKelamin', 'Laki-Laki')->sum('total'),
                    'Perempuan' => $group->where('jenisKelamin', 'Perempuan')->sum('total'),
                ];
            }),
        ];


        return view('statistik', compact('chartDataGender', 'chartDataStatusGender'));
    }

    function dashboard()
    {

        return view('dashboard');
    }

    function pengaduan()
    {
        return view('pengaduan');
    }

    function pengaduanForm()
    {
        return view('pengaduan');
    }


    function riwayatPengaduan()
    {
        return view('riwayat-pengaduan');
    }

    function surveyForm()
    {
        return view('survery-form');
    }

    function surveyHasil()
    {
        return view('hasil-survey');
    }
}