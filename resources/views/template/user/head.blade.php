<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('User/assets/img/favicon.ico') }}" />
    <link href="{{ asset('User/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('User/assets/js/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('User/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('User/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    {{-- <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css"> --}}
    <link href="{{ asset('User/assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link href="{{asset('User/assets/css/components/custom-carousel.css')}}" rel="stylesheet" type="text/css">
    <script src="{{ asset('User/assets/js/libs/jquery-3.1.1.min.js') }}"></script>

    @yield('css')

    <style>
        .nomor {
            font-size: 42px;
            font-weight: 600;
            font-family: sans-serif;
            color: rgb(0, 0, 0);
        }
    
        .judul {
            font-size: 50px;
            font-weight: 600;
            font-family: sans-serif;
            color: black;
        }
    
    </style>
</head>