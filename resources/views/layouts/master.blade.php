<!DOCTYPE html>
<html>

<head>
    @include('layouts.css')
    <title>@yield('title', 'Dashboard')</title>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.2.0/css/dataTables.dataTables.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('layouts.header')
        @include('layouts.sidebar')
        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>
        @include('layouts.footer')
    </div>
    @include('layouts.js')
</body>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.2.0/js/dataTables.js"></script>

</html>
