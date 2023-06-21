<header class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-white shadow">
        <div class="container-xl">

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
                            <svg class="icon icon-tabler icon-tabler-dashboard" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
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
</header>
