@extends('admin.admin_master')
@section('admin')

    <div class="content m-2">

        <!-- 2 columns form -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Kullanıcı Ekle</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('user.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Personal details</legend>

                                <div class="form-group">
                                    <label>Ad Soyad:</label>
                                    <input type="text" name="name" class="form-control" placeholder="Ad Soyad">
                                </div>
                                <div class="form-group">
                                    <label>Kullanıcı Adı:</label>
                                    <input type="text" name="email" class="form-control" placeholder="Kullanıcı Adı">
                                </div>
                                <div class="form-group">
                                    <label>Kullanıcı Şifre:</label>
                                    <input type="password" name="password" class="form-control" placeholder="Kullanıcı Şifre">
                                </div>



                            </fieldset>
                        </div>

                        <div class="col-md-6">
                            <fieldset>
                                <legend class="font-weight-semibold"><i class="icon-user mr-2"></i> </legend>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Attach screenshot:</label>
                                            <input type="file" class="form-input-styled" name="profile_photo_path" id="image" data-fouc>
                                            @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <img width="100%" src="{{url('image/no_news_image.png')}}" id="showImage" alt="">
                                            {{-- <label>First name:</label>
                                            <input type="text" placeholder="Eugene" class="form-control"> --}}
                                        </div>

                                    </div>


                                </div>

                            </fieldset>
                        </div>





                    </div>









                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Kullanıcı Ekle <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /2 columns form -->
    </div>
    <!--Yüklenen resmi otomatik olarak gösterir-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload =function(e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection
