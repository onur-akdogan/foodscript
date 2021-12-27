<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">

            <li class="nav-label">Panel</li>
            <li>
                <a class="has-arrow" href="{{route('admin.index')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Ana Sayfa</span>
                </a>

            </li>


            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kategori</a>
            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li><a href="{{route('category.index')}}">Kategoriler</a></li>
                <li><a href="{{route('category.addPage')}}">Kategori ekle</a></li>
            </ul>



            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Tarif</a>
            <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li><a href="{{route('post.index')}}">Tarifler</a></li>
                <li><a href="{{route('post.addPage')}}">Yemek Ekle</a></li>
            </ul>


            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">appp</a>
            <ul class="collapse list-unstyled" id="pageSubmenu3">
                <li><a href="{{route('post.index')}}">assss</a></li>
                <li><a href="{{route('post.addPage')}}">sdaasdas</a></li>
            </ul>
        </ul>
    </div>
</div>
