@extends('admin.admin_master')
@section('admin')

<div class="content m-2" >
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Blog Ekle</h5>
            
        </div>

        <div class="card-body">
            <form action="{{route('blog.update',$item)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <fieldset>

                            <div class="form-group">
                                <label>Başlık:</label>
                                <input type="text" value="{{$item->title}}" name="title" class="form-control" placeholder="Başlık">
                            </div>
                            <div class="form-group">
                                <label>Spot Başlık:</label>
                                <input type="text" name="subtitle" value="{{$item->subtitle}}" class="form-control" placeholder="Spot Başlık">
                            </div>
                            <div class="form-group">
                                <label>Video Linki:</label>
                                <input type="text" name="video_link" value="{{$item->video_link}}" class="form-control" placeholder="youtube iframe">
                            </div>
                         
                            
                         
                        
                            <input type="hidden" name="user_id" value="{{$item->user_id}}" value="{{Auth::user()->id}}">
                        


                        </fieldset>
                    </div>

                    <div class="col-md-6">
                        <fieldset>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kapak Fotoğrafı:</label>
                                        <input type="file" class="form-input-styled" name="images"  id="image" data-fouc>
                                        <input type="hidden" class="form-input-styled" name="old_image" value="{{asset($item->images)}}" id="image" data-fouc>
                                    
                                    </div>
                                </div>

                                    <div class="col-md-6">

                                    <div class="form-group">
                                        <img width="100%" src="{{asset($item->images)}}" id="showImage" alt="">
                                    </div>

                                </div>


                            </div>

                      

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="font-weight-semibold text-success">Anahtar Kelime</label>
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input id="tokenfield" type="text" name="keywords" value="{{$item->keywords}}" class="form-control tokenfield">
                                            <div class="form-control-feedback text-success">
                                                <i class="icon-checkmark-circle"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-semibold text-success">Açıklama</label>
                                        <textarea rows="1" cols="1" maxlength="225" class="form-control maxlength-textarea"  name="description" placeholder="Açıklama alanı 225 karakterle sınırlandırılmıştır">{{$item->description}}</textarea>
                                    </div>
                  
                   
                </div>
            </div>
               
        </div>
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <h3>İçerik</h3>
                    </div>
                     
                 <div class="form-group col-lg-12">
                    <textarea name="detail" id="editor-full" rows="4" cols="4">{{$item->detail}}</textarea>
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
                

                

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Blog Düzenle <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

 @endsection

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