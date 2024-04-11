<div class="nav-bar">


    <!-- Header desktop -->
    <div class="container-menu-desktop">

        <div class="wrap-menu-desktop">

            <nav class="limiter-menu-desktop container">


                <!-- Logo desktop -->
                <a href="#" class="logo">
                    <img src="{{asset('assets/images/icons/logo-01.png')}}" alt="IMG-LOGO">
                </a>



                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    @can('admin-panel-access')
                    <a href="{{route('admin.dashboard')}}">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                            <button class="btn btn-primary btn-sm">Admin Panel</button>
                        </div>
                    </a>
                    @endcan
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    <!-- logout -->
                    <div class="icon-header-item cl2 hov-cl1  trans-04 p-l-22 p-r-11 icon-header-noti" >
                        <a href="{{route('logout')}}">
                            <i class="zmdi zmdi-sign-in">
                            </i>
                        </a>
                    </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</div>
