<aside class="main-sidebar">
    <section class="sidebar">
        <div class="logo-company text-center" style="margin-top: 18px;">
            <img src="{{ asset('rembang.png') }}" width="100" alt="">
            <h4 style="color: white">Badan Kepegawaian Daerah</h4>
            <h4 style="color: white">Kabupaten Rembang</h4>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">NAVIGASI LAYANAN</li>
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-tasks"></i> <span>DASHBOARD</span></a>
            </li>
            <li><a href="{{ route('statistik') }}"><i class="fa fa-bar-chart"></i> <span>STATISTIK</span></a>
            </li>
            <li><a href="{{ route('pengaduan') }}"><i class="fa fa-file"></i> <span>PENGADUAN</span></a>
            </li>
            <li><a href="{{ route('riwayatPengaduan') }}"><i class="fa fa-folder-open-o"></i> <span>RIWAYAT
                        PENGADUAN</span></a>
            </li>
            <li><a href="{{ route('surveyForm') }}"><i class="fa fa-thumbs-up"></i> <span>SURVEY
                        KEPUASAN</span></a>
            </li>
            {{-- <li><a href="{{ route('surveyHasil') }}"><i class="fa fa-smile-o"></i> <span>HASIL SURVEY</span></a>
            </li> --}}
        </ul>
    </section>
</aside>
