<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar" style="background: transparent">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> CORK </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories flex-row" id="topAccordion">

            <img src="{{ asset('User/assets/img/175x115.jpg') }}" alt=""
                style="width: 100px; border-radius: 11px">

            <li class="menu single-menu active d-flex align-items-center ml-4">
                <b><a href="/"> Beranda </a></b>
            </li>
            <li class="menu single-menu d-flex align-items-center ml-4">
                <b><a href="/berita"> Berita </a></b>
            </li>
            <li class="menu single-menu d-flex align-items-center ml-4 mr-auto">
                <b><a href="/"> Tentang Kami </a></b>
            </li>
            <li class="menu single-menu d-flex align-items-center ml-4">
                <b><a href="/"> Login </a></b>
            </li>

            <li class="menu single-menu">
                <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span style="color: black"><b>PKBM</b></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                    <li>
                        <a href="apps_chat.html"> Chat </a>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu">
                <button class="btn btn-primary btn-sm"
                    style="border-radius: 20px; height: 38px; font-size: 13px">Profile <svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                        <path
                            d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12 10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36 7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8 8.1 8.1 0 0 1 8 8 8 8 0 0 1-2.39 5.64z">
                        </path>
                        <path
                            d="M12 6a3.91 3.91 0 0 0-4 4 3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2 1.91 1.91 0 0 1-2 2z">
                        </path>
                    </svg></button>
        </ul>
    </nav>
</div>
