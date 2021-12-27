<div class="nav-header">
    <div class="brand-logo">
        <a href="{{route('admin.index')}}">
            <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
            <span class="logo-compact"></span>
            <span class="brand-title text-white">
                        YO Script
                    </span>
        </a>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="fa fa-bars" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <div class="header-left text-center ">
            <a href="{{route('cacheClean')}}">
                <i class=""></i>
                <span class="badge badge-pill gradient-2 pt-2 pb-2 mt-4 text-center">Önbellek Temizle</span>
            </a>
        </div>
        <div class="header-right">
            <ul class="clearfix">


                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="{{asset(Auth::user()->profile_photo_path)}}" height="40" width="40" alt="">
                    </div>
                    {{Auth::user()->name}}
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>


                                <hr class="my-2">

                                <li><a href="{{route('admin.logout')}}"><i class="icon-key"></i>
                                        <span>Güvenli Çıkış</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
