<div class="nav-header">
    <div class="brand-logo">
        <a href="{{route('admin.index')}}">
            <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
            <span class="logo-compact"></span>
            <span class="brand-title">
                        <h2 class="text-white">YO Script</h2>
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
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
            <a href="{{route('cacheClean')}}" >
                <i class=""></i>
                <span class="badge badge-pill gradient-1 mt-3 text-center" style="height: 30px">Önbellek Temizle</span>
            </a>
        </div>
        <div class="header-right">
            <ul class="clearfix">





                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="images/user/1.png" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>


                                <hr class="my-2">

                                <li><a href="{{route('admin.logout')}}"><i class="icon-key"></i> <span>Güvenli Çıkış</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
