@extends('admin.admin_master')
@section('admin')
    <div class="col-lg-12 mt-3">
        <div class="card">
            <div class="card-body">
               <div class="row d-flex justify-content-between">
                <div class="card-title">
                    <h4>Kategoriler</h4>
                </div><div class="card-title positon-right">
                    <a href="{{route('category.addPage')}}" type="submit text-white" class="btn btn-success">Yeni Ekle
                    </a>
                </div>   
            </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>İsim</th>
                                <th>Durum</th>
                                <th>Düzenle</th>
                                <th>Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=0;
                        @endphp
    @foreach ($allCategory as $item)
    @php
    $i++;
@endphp
                            <tr>
                                <th>{{$i}}</th>
                                <td>{{$item->title}} </td>


                                <td>
                                    @if ($item->status==0)
                                    <form action="{{route('category.status',$item->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger text-white" name="aktif" value="1">Pasif
                                        </button>
                                    </form>
                                @else
                                    <form action="{{route('category.status',$item->id)}}" method="post">
                                        @csrf
                                        <button type="submit text-white" class="btn btn-success" name="aktif" value="0">Aktif
                                        </button>
                                    </form>
                                    @endif
                                
                                </td>


                                <td><a href="{{route('category.editPage',$item->id)}}"><i class="fa fa-cog fa-2x" style="color:green" aria-hidden="true"></i></a></td> 
                                <td class="color-primary"><a href="{{route('category.delete',$item->id)}}"><i class="fa fa-times fa-2x" style="color:red" aria-hidden="true"></i>
                                </a></td>
                            </tr>
    @endforeach
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection