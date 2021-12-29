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
                <li><a href="{{route('post.addPage')}}">Tarif Ekle</a></li>
            </ul>


            <a href="#pageSubmenuYorumlar" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Yorumlar</a>
            <ul class="collapse list-unstyled" id="pageSubmenuYorumlar">
                <li><a href="{{route('comments.index')}}">Yorumlar</a></li>

            </ul>



            <a href="#pageSubmenuKullanıcılar" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kullanıcılar</a>
            <ul class="collapse list-unstyled" id="pageSubmenuKullanıcılar">
                <li><a href="{{route('user.index')}}">Kullanıcılar</a></li>
                <li><a href="{{route('user.create')}}">Kullanıcı Ekle</a></li>

            </ul>

            <a href="#pageSubmenuSabit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Sabit Sayfalar</a>
            <ul class="collapse list-unstyled" id="pageSubmenuSabit">
                <li><a href="{{route('fixedpage.index')}}">Sabit Sayfalar</a></li>
                <li><a href="{{route('fixedpage.add')}}">Sabit Sayfa Ekle</a></li>

            </ul>
            <a href="#pageSubmenuReklam" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reklam Yönetimi</a>
            <ul class="collapse list-unstyled" id="pageSubmenuReklam">
                <li><a href="{{route('list.add')}}">Reklam Alanları</a></li>
                <li><a href="{{route('add.ads')}}">Reklam Ekle</a></li>
            </ul>
            <a href="#pageSubmenuBlog" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Bloglar</a>
            <ul class="collapse list-unstyled" id="pageSubmenuBlog">
                <li><a href="{{route('blog.index')}}">Blog Yazıları</a></li>
                <li><a href="{{route('blog.addPage')}}">Blog Ekle</a></li>
            </ul>
            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ayarlar</a>
            <ul class="collapse list-unstyled" id="pageSubmenu3">
                <li><a href="{{route('social.setting')}}">Sosyal Medya Ayarları</a></li>
                <li><a href="{{route('seo.setting')}}">Seo Ayarları</a></li>
                <li><a href="{{route('website.setting')}}">Genel Ayarlar</a></li>
                <!-- Teme ayarları önyüz oluşturulduktan sonra yapılacak -->
                <li><a href="{{route('post.addPage')}}">Tema Ayarları</a></li>
            </ul>
            
            

            

         
           
        </ul>
    </div>
</div>
