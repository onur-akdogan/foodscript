@extends('admin.admin_master')
@section('admin')

<div class="content m-2" >
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Yemek Ekle</h5>
            
        </div>

        <div class="card-body">
            <form action="{{route('post.insert')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <fieldset>

                            <div class="form-group">
                                <label>Yemek Başlığı:</label>
                                <input type="text" name="title" class="form-control" placeholder="Başlık">
                            </div>
                            <div class="form-group">
                                <label>Yemek Spot Başlığı:</label>
                                <input type="text" name="subtitle" class="form-control" placeholder="Spot Başlık">
                            </div>
                            <div class="form-group">
                                <label>Video Yemek Linki:</label>
                                <input type="text" name="post_video" class="form-control" placeholder="youtube iframe">
                            </div>
                            <div class="form-group">
                                <label>Kategori Seçiniz:</label>
                                <select data-placeholder="Select your state" name="category_id" class="form-control form-control-select2" data-fouc>
                                    <option disabled="" selected="">Kategori Seçiniz</option>
                                    @foreach ($category as $row )
                                    <option value="{{$row->id}}">{{$row->title}}</option>
                                    @endforeach
                                </select>
                            
                            </div>
                            
                         
                            <div class="form-group">
                                <label class="font-weight-semibold text-success">Yemek Etiketleri</label>
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input id="tokenfield" type="text" name="tags" class="form-control tokenfield">
                                    <div class="form-control-feedback text-success">
                                        <i class="icon-checkmark-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <div class="form-group">
                                <label class="font-weight-semibold text-success">Kalori</label>
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input type="text" name="kalori" class="form-control tokenfield">
                                   
                                </div>
                            </div>


                        </fieldset>
                    </div>

                    <div class="col-md-6">
                        <fieldset>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kapak Fotoğrafı:</label>
                                        <input type="file" class="form-input-styled" name="image" id="image" data-fouc>
                                    
                                    </div>
                                </div>

                                    <div class="col-md-6">

                                    <div class="form-group">
                                        <img width="100%" src="{{url('image/no_news_image.png')}}" id="showImage" alt="">
                                    </div>

                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Zorluk seviyesi Seçiniz:</label>
                                        <select data-placeholder="Select your state" id="zorluk" name="zorluk" class="form-control form-control-select2" data-fouc>
                                            <option disabled="" selected="">Zorluk seviyesi</option>
                                          
                                            <option value="0">Kolay</option>
                                            <option value="1">Orta</option>
                                            <option value="2">Zor</option>
                                            
                                        </select>
                                    
                                    </div>

                                </div>

                               
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="font-weight-semibold text-success">Yemek Anahtar Kelime</label>
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input id="tokenfield" type="text" name="keywords" class="form-control tokenfield">
                                            <div class="form-control-feedback text-success">
                                                <i class="icon-checkmark-circle"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-semibold text-success">Yemek Açıklama</label>
                                        <textarea rows="1" cols="1" maxlength="225" class="form-control maxlength-textarea" name="description" placeholder="Açıklama alanı 225 karakterle sınırlandırılmıştır"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-semibold text-success">Hazırlanma Süresi</label>
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input id="tokenfield" type="text" name="hazirlanma_suresi" class="form-control tokenfield">
                                            <div class="form-control-feedback text-success">
                                                <i class="icon-checkmark-circle"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-semibold text-success">Kişi Sayısı</label>
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input id="tokenfield" type="text" name="kisi_sayisi" class="form-control tokenfield">
                                            <div class="form-control-feedback text-success">
                                                <i class="icon-checkmark-circle"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-semibold text-success">Pişirme Süresi</label>
                                        <div class="form-group-feedback form-group-feedback-right">
                                            <input id="tokenfield" type="text" name="pisirme_süresi" class="form-control tokenfield">
                                            <div class="form-control-feedback text-success">
                                                <i class="icon-checkmark-circle"></i>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <h3>Yemek Etiketleri</h3>
                    </div>

                    <div class="col-md-3 mb-3">

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="gunun_yemegi" value="1" class="form-check-input-styled-primary" data-fouc>
                            Günün yemeği
                        </label>
                    </div>
                </div>
                <div class="col-md-3 mb-3">

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="slider" value="1"  class="form-check-input-styled-primary"  data-fouc>
                            Slider Ekle
                        </label>
                    </div>
                </div>   <div class="col-md-3 mb-3">

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="onerilenler" value="1"  class="form-check-input-styled-primary"  data-fouc>
                            Önerilenler
                        </label>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="onecikart" value="1"  class="form-check-input-styled-primary"  data-fouc>
                            Öne Çıkart
                        </label>
                    </div>
                </div>
               
                




                    <div class="col-md-12">
                        <div class="col-md-12">
                            <h3>Malzemeler</h3>
                        </div>
                         
                     <div class="form-group">
                        <textarea name="malzemeler" id="editor-full" rows="4" cols="4"></textarea>
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
                   
                </div>

               
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <h3>Yapılış Aşaması</h3>
                    </div>
                    <textarea name="yapilis" class="ckeditor"></textarea>

                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Yemek Ekle <i class="icon-paperplane ml-2"></i></button>
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