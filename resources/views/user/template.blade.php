@include('template.user.head')

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('template.user.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container" style="margin-left: 70px; margin-right: 70px">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        @include('template.user.topbar')
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    @yield('content')
                    <div class="footer-wrapper p-1" style="background-color:#0044ff; display: inline;">
                        <div class="footer-section">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="nomor text-white ml-3" style="font-size: 26px">About</div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="nomor text-white ml-3" style="font-size: 26px">Kelas Aktif</div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="nomor text-white ml-3" style="font-size: 26px">Bantuan
                                        <p class="text-white">Lorem Ipsum is simply dummy text</p>
                                        <p class="text-white">Lorem Ipsum is simply dummy text</p>
                                        <p class="text-white">Lorem Ipsum is simply dummy text</p>
                                        <p class="text-white">Lorem Ipsum is simply dummy text</p>
                                        <p class="text-white">Lorem Ipsum is simply dummy text</p>
                                        <p class="text-white">Lorem Ipsum is simply dummy text</p>
                                        <p class="text-white">Lorem Ipsum is simply dummy text</p>
                                        <p class="text-white">Lorem Ipsum is simply dummy text</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="nomor text-white ml-3" style="font-size: 26px">Hubungi Kami</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="nomor d-flex justify-content-center text-white ml-3" style="font-size: 26px">@copyright</div>
                        {{-- <div class="footer-section f-section-2">
                            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                    </path>
                                </svg></p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->
    @include('template.user.footer')
