<header class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-white shadow">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#navbarMenuCollapse" aria-controls="navbarMenuCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2 w-5 h-5"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="4" y1="6" x2="20" y2="6"></line>
                    <line x1="4" y1="12" x2="20" y2="12"></line>
                    <line x1="4" y1="18" x2="20" y2="18"></line>
                </svg>
            </button>

            <a href="" class="navbar-brand hidden-dark">
                <img src="" width="136px">
            </a>
            <a href="" class="navbar-brand show-dark">
                <img src="assets/img/logo-bg-dark.svg" width="136px">
            </a>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav nav-tabs mb-2 mb-lg-0">
                    <li class="nav-item">
                        <b>Vending Machine Node MCU</b>



                    </li>
                </ul>
            </div>
            <div class="navbar-right">
                <ul class="navbar-nav nav-tabs ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title==="Transaksi")?"active":"" }}" aria-current="page" href="{{ route('transaksi.index') }}">

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dashboard"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="13" r="2"></circle>
                                <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line>
                                <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
                            </svg>


                            <span>Transaksi</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ ($title==="User")?"active":"" }}" aria-current="page" href="{{ route('user.index') }}">

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                             </svg>


                            <span>User</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="sidenav sidenav-tabs bg-white offcanvas offcanvas-start" id="navbarMenuCollapse">
        <div class="offcanvas-header sticky-top navbar">

            <a href="" class="navbar-brand hidden-dark">
                <img src="assets/img/logo.svg" width="136px">
            </a>
            <a href="" class="navbar-brand show-dark">
                <img src="assets/img/logo-bg-dark.svg" width="136px">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ~nav-pills mb-2 mb-lg-0">



                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dashboard"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="13" r="2"></circle>
                            <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line>
                            <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
                        </svg>


                        <span>Dashboard</span>
                    </a>
                </li>















                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="4" y="4" width="6" height="5" rx="2"></rect>
                            <rect x="4" y="13" width="6" height="7" rx="2"></rect>
                            <rect x="14" y="4" width="6" height="16" rx="2"></rect>
                        </svg>

                        <span>Layouts</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler icon-tabler-chevron-down w-4 h-4"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="dropdown-menu ">



                        <li>
                            <a class="dropdown-item" href="layout/stacked.html">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-layout-navbar" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                                    <line x1="4" y1="9" x2="20" y2="9"></line>
                                </svg>

                                <span>Stacked</span>
                            </a>
                        </li>




                        <li>
                            <a class="dropdown-item" href="layout/sidebar.html">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-layout-sidebar" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                                    <line x1="9" y1="4" x2="9" y2="20"></line>
                                </svg>

                                <span>Sidebar</span>
                            </a>
                        </li>




                        <li>
                            <hr class="dropdown-divider">
                        </li>




                        <li>
                            <a class="dropdown-item" href="layout/combined.html">

                                <span>Combined</span>
                            </a>
                        </li>




                        <li>
                            <a class="dropdown-item" href="layout/content-sidebar.html">

                                <span>Content Sidebar</span>
                            </a>
                        </li>


                    </ul>
                </li>



                <li>
                    <hr class="divider">
                </li>




                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="element/forms.html">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checkbox"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="9 11 12 14 20 6"></polyline>
                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                        </svg>

                        <span>Forms</span>
                    </a>
                </li>




                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="element/tables.html">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-table"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                            <line x1="4" y1="10" x2="20" y2="10"></line>
                            <line x1="10" y1="4" x2="10" y2="20"></line>
                        </svg>

                        <span>Tables</span>
                    </a>
                </li>




                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="element/widgets.html">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-grid"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                            <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                        </svg>

                        <span>Widgets</span>
                    </a>
                </li>




                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="element/components.html">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-components"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 12l3 3l3 -3l-3 -3z"></path>
                            <path d="M15 12l3 3l3 -3l-3 -3z"></path>
                            <path d="M9 6l3 3l3 -3l-3 -3z"></path>
                            <path d="M9 18l3 3l3 -3l-3 -3z"></path>
                        </svg>

                        <span>Components</span>
                    </a>
                </li>



                <li>
                    <hr class="divider">
                </li>









                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-files"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M15 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z"></path>
                            <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2"></path>
                        </svg>

                        <span>Pages</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler icon-tabler-chevron-down w-4 h-4"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="dropdown-menu ">



                        <li>
                            <a class="dropdown-item" href="page/empty.html">

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                    <path
                                        d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                                    </path>
                                </svg>

                                <span>Empty</span>
                            </a>
                        </li>




                        <li>
                            <a class="dropdown-item" href="page/error.html">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-file-alert" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                    <path
                                        d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                                    </path>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                    <line x1="12" y1="11" x2="12" y2="14"></line>
                                </svg>

                                <span>Error</span>
                            </a>
                        </li>


                    </ul>
                </li>









                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="5" y="11" width="14" height="10" rx="2"></rect>
                            <circle cx="12" cy="16" r="1"></circle>
                            <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                        </svg>

                        <span>Authentications</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler icon-tabler-chevron-down w-4 h-4"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="dropdown-menu ">



                        <li>
                            <a class="dropdown-item" href="page/auth/login.html">

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                    </path>
                                    <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                </svg>

                                <span>Login</span>
                            </a>
                        </li>




                        <li>
                            <a class="dropdown-item" href="page/auth/register.html">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-user-plus" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    <path d="M16 11h6m-3 -3v6"></path>
                                </svg>

                                <span>Register</span>
                            </a>
                        </li>


                    </ul>
                </li>



                <li>
                    <hr class="divider">
                </li>













                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-subtask"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="6" y1="9" x2="12" y2="9"></line>
                            <line x1="4" y1="5" x2="8" y2="5"></line>
                            <path d="M6 5v11a1 1 0 0 0 1 1h5"></path>
                            <rect x="12" y="7" width="8" height="4" rx="1"></rect>
                            <rect x="12" y="15" width="8" height="4" rx="1"></rect>
                        </svg>

                        <span>Submenu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler icon-tabler-chevron-down w-4 h-4"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="dropdown-menu ">



                        <li>
                            <a class="dropdown-item" href="">

                                <span>Submenu Satu</span>
                            </a>
                        </li>




                        <li>
                            <a class="dropdown-item" href="">

                                <span>Submenu Dua</span>
                            </a>
                        </li>




                        <li>
                            <hr class="dropdown-divider">
                        </li>




                        <li>
                            <a class="dropdown-item" href="">

                                <span>Submenu Tiga</span>
                            </a>
                        </li>


                    </ul>
                </li>


            </ul>
        </div>
    </div>
</header>
