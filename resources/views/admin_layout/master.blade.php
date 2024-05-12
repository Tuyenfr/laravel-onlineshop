<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/datepicker3.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/on-off-switch.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/style.css') }}">
</head>

<body class="hold-transition fixed skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- start header  -->

        @include('admin_layout.header')

        <!-- end header  -->

        <!-- start Side Bar to Manage Shop Activities -->

        @include('admin_layout.sidebar')

        <!-- end  Side Bar to Manage Shop Activities -->

        {{-- start content --}}

        @yield('content')

        {{-- end content --}}

    </div>

    @include('admin_layout.script')

</body>

</html>
