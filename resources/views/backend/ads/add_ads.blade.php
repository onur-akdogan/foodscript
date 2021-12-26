@extends('admin.admin_master')
@section('admin')

    <div class="content m-2">""

        <!-- 2 columns form -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Reklam Ekle</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('create.ads')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>

                                <div class="form-group">
                                    <label>Reklam Linki:</label>
                                    <input type="text" name="link" class="form-control" placeholder="Başlık">
                                </div>
                                <div class="form-group">
                                    <label>Reklam Alanı:</label>
                                    <select data-placeholder="Select your state" name="category_id" class="form-control form-control-select2" data-fouc>
                                        <option disabled="" selected="">Kategori Seçiniz</option>
                                        @foreach ($category as $row )
                                            <option value="{{$row->id}}">{{$row->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="text-danger">{{$message}}</span>

                                    @enderror
                                </div>




                            </fieldset>
                        </div>

                        <div class="col-md-6">
                            <fieldset>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Attach screenshot:</label>
                                            <input type="file" class="form-input-styled" multiple name="ads" id="image" data-fouc>
                                            @error('ads')
                                            <span class="text-danger">{{$message}}</span>

                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Reklam Tip</label>
                                            <select data-placeholder="Select your state" name="type" class="form-control form-control-select2" data-fouc>
                                                <option value="1">Banner Reklam</option>
                                                <option value="2">Adsense Reklam</option>

                                            </select>
                                            @error('type')
                                            <span class="text-danger">{{$message}}</span>

                                            @enderror
                                        </div>
                                        {{-- <div class="form-group">
                                            <img width="100%" src="{{url('image/no_news_image.png')}}" id="showImage" alt="">

                                        </div> --}}

                                    </div>


                                </div>
                        </div>






                    </div>

                    <div class="form-group">
                        <textarea name="content" id="editor-full" rows="4" cols="4"></textarea>
                        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> 
                        <script>
                            var options = {
                                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                            };
                        </script>
                        <script>
                            CKEDITOR.replace('editor-full', options);
                        </script>
                    </div>




                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Galeri Ekle <i class="icon-paperplane ml-2"></i></button>
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
